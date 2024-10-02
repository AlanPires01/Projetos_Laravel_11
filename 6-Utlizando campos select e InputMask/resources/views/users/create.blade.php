<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @vite('resources/js/app.js')
    <title>Document</title>
</head>
<body class="bg-dark">
    <span>
        <a href="{{route('users.index')}}" class="btn btn-warning btn-sm">Listar</a>
    </span>
    <div class="d-flex justify-content-center align-items-center vh-100">
       
        <div class="card col-4 bg-body-tertiary">
            <div class="card-header">
                <span>Cadastrar usuários</span>
             
                <x-alert/>
               
            </div>
            <div class="card-body">

                <form method="POST" action="{{route('users.store')}}">
                    @csrf

                    <label class="form-label">Nome</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input class="form-control" type="text" name="name" id="name" placeholder="Nome completo" value="{{old('name')}}">
                    </div>

                    <label class="form-label">Email</label>
                    <div class="input-group">
                        <input class="form-control" type="email" name="email" id="email" placeholder="seunome@alu.ufc.br" value="{{old('email')}}">
                        <span class="input-group-text" id="basic-addon2">@example.com</span>
                    </div>
                    <div class="d-flex flex-row">
                        <div>
                            <label class="form-label">Estado</label>
                            <select name="estado_id" id="estado_id" class="form-select">
                                <option value="">Selecione um estado</option>
                                @forelse ($estados as $estado)
                                    <option value="{{$estado->id}}" {{old('estado_id')==$estado->id? 'selected':''}}>{{$estado->nome_estado}}</option>
                                @empty
                                    
                                @endforelse
                                
                            </select>
                        </div>
                       
    
                        @if(old('estado_id'))
                            @php
                                $cidades = \App\Models\Cidade::where('estado_id',old('estado_id'))->orderBy('nome_cidade')->get();
                            @endphp
                        @else
                            @php
                                $cidades = [];
                            @endphp
                        @endif
                        
                        <div>
                            <label class="form-label">Cidade</label>
                            <select name="cidade_id" id="cidade_id" class="form-select">
                                <option value="">Selecione</option>
                                @forelse($cidades as $cidade)
                                    <option value="{{$cidade->id}}" {{old('cidade_id')==$cidade->id ? 'selected':''}}>{{$cidade->nome_cidade}}</option>
                                @empty
                                @endforelse
                            </select>
                        </div>

                    </div>


                    <label class="form-label">Senha</label>
                    <div class="input-group">
                        <input class="form-control" type="password" name="password" id="password">
                    </div>
                    <div class="d-flex flex-row ">
                        
                        <div>
                            <label class="form-label" for="cpf">CPF</label>
                            <input class="form-control cpf" type="text" name="cpf" id="cpf" value="{{old('cpf')}}">    
                        </div>
                        <div>
                            <label class="form-label" for="telefone">Telefone</label>
                            <input class="form-control telefone" type="text" name="telefone" id="telefone" value="{{old('telefone')}}">
                        </div>
                       
                    </div>
                    

                    <div>
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>


                </form>
            </div>
            
        </div>
     
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function(){
            var InputSelectEstado = document.querySelector('#estado_id');
            var InputSelectCidade = document.querySelector('#cidade_id');

            InputSelectEstado.addEventListener('change',()=>{
                pesquisarCidade();
            });

            function pesquisarCidade(){
                InputSelectCidade.innerHTML=` <option value="">Carregando...</option>`;
                var SelectedCidades = "{{route('cidades.select')}}";
                axios.post(SelectedCidades,{
                    estado_id:InputSelectEstado.value,
                }).then( response=>{
                    InputSelectCidade.innerHTML = `<option value="">Selecione</option>`;
                    response.data.forEach(row =>{
                        InputSelectCidade.innerHTML +=`<option value="${row.id}">${row.nome_cidade}</option>`;
                    })

                    
                }).catch( error =>{
                    console.error("Erro na requisição:", error.response); // Mostra o erro detalhado no console
                    InputSelectCidade.innerHTML = `<option value="">Nenhuma cidade encontrada.</option>`;
                })
            }

        });
    </script>
</body>
</html>
