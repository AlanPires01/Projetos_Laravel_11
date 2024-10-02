<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

/**
 * Controlador para gerenciar o processo de login e atividades relacionadas.
 *
 * Esta classe lida com o carregamento do formulário de login, a validação do login do usuário e a atualização da última
 * atividade do usuário. Inclui funcionalidades para autenticar usuários e registrar logs de atividades.
 *
 * @package App\Http\Controllers
 */
class LoginController extends Controller
{

    /**
     * Exibe o formulário de login.
     *
     * Este método carrega a view para a página de login, permitindo ao usuário inserir suas credenciais.
     *
     * @return \Illuminate\View\View Retorna a view do formulário de login.
     */
    public function index()
    {
        // Carrega a view do formulário de login
        return view('login.index');
    }

    /**
     * Processa o login do usuário.
     *
     * Este método valida as credenciais de login, autentica o usuário e redireciona para o dashboard.
     * Se a autenticação falhar, o usuário é redirecionado de volta para a página de login com uma mensagem de erro.
     *
     * @param LoginRequest $request Objeto de requisição contendo os dados do formulário de login.
     * @return \Illuminate\Http\RedirectResponse Redireciona para o dashboard ou de volta para o login em caso de falha.
     */
    public function loginProcess(LoginRequest $request)
    {
        // Valida os dados do formulário usando a classe LoginRequest
        $request->validated();

        // Tenta autenticar o usuário usando o email e a senha fornecidos
        $authenticated = Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        // Verifica se a autenticação falhou
        if (!$authenticated) {
            // Redireciona de volta para o formulário de login com uma mensagem de erro
            return back()->withInput()->with('error', 'E-mail ou senha inválido!');
        }

        // Recupera o usuário autenticado do banco de dados
        $user = User::where('id', Auth::id())->first();

        // Atualiza o campo last_active_at do usuário com a data e hora atuais
        $user->update(['last_active_at' => Carbon::now()]);

        // Redireciona o usuário autenticado para o dashboard
        return redirect()->route('dashboard.index');
    }

    /**
     * Atualiza o último horário de atividade do usuário.
     *
     * Este método é chamado via AJAX para atualizar o timestamp de última atividade do usuário logado e
     * registrar um log da atualização. Também retorna o número de usuários ativos nos últimos minutos.
     *
     * @return \Illuminate\Http\JsonResponse Resposta JSON com o status da operação e o número de usuários ativos.
     */
    public function updateLastActive()
    {
        // Recupera o usuário logado do banco de dados
        $user = User::where('id', Auth::id())->first();

        // Verifica se o usuário foi encontrado
        if ($user) {
            // Atualiza o campo last_active_at do usuário com a data e hora atuais
            $user->update(['last_active_at' => Carbon::now()]);

            //Registra um log informativo da atualização do last_active_at
            Log::info('last_active_at atualizado.', [
                'user_id' => $user->id,
                'last_active' => $user->last_active_at, // Valor antes da atualização
                'last_active_at' => Carbon::now() // Valor atualizado
            ]);

            // Conta o número de usuários ativos nos últimos 1 minuto
            $activeUsers = User::where('last_active_at', '>=', Carbon::now()->subMinutes(5))->count();

            // Retorna uma resposta JSON com o status de sucesso e o número de usuários ativos
            return response()->json(['status' => 'success', 'activeUsers' => $activeUsers]);
        }else{
            Log::info('Usuario nao encontrado');
        }

        // Retorna uma resposta JSON com status de erro se o usuário não foi encontrado
        return response()->json(['status' => 'error'], 401);
    }

    /**
     * Método destroy
     *
     * Este método é responsável por deslogar o usuário autenticado. Ele realiza as seguintes ações:
     * - Recupera o usuário autenticado a partir do banco de dados.
     * - Atualiza o campo `last_active_at` do usuário para null, indicando que o usuário não está mais ativo.
     * - Desloga o usuário da sessão atual.
     * - Redireciona o usuário para a página de login com uma mensagem de sucesso.
     *
     * @return \Illuminate\Http\RedirectResponse Redireciona para a rota de login com uma mensagem de sucesso.
     */
    public function destroy()
    {
        // Recupera o usuário autenticado do banco de dados
        $user = User::where('id', Auth::id())->first();

        // Atualiza o campo last_active_at do usuário com a data e hora atuais
        $user->update(['last_active_at' => null]);

        // Deslogar o usuário
        Auth::logout();

        // Redirecionar o usuário, enviar a mensagem de sucesso
        return redirect()->route('login.index')->with('success', 'Deslogado com sucesso!');
    }
}
