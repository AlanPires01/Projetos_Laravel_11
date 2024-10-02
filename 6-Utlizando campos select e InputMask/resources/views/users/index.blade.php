<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @vite('resources/js/app.js')
</head>
<body class="bg-dark">

    <div class="card mt-4 mb-4 border-light shadow  container">
        <div class="card-header d-flex justify-content-between">
            <span>Listar usuários</span>
            <span>
                <a href="{{route('users.create')}}" class="btn btn-success btn-sm">Cadastrar</a>
            </span>

        </div>
        <div class="card-body">
            <x-alert/>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>CPF</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Cidade</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $user)
                        <tr>
                            <td> {{$user->id}}</td>
                            <td> {{substr($user->cpf,0,3)}}.{{substr($user->cpf,3,3)}}.{{substr($user->cpf,6,3)}}-{{substr($user->cpf,9,2)}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->cidade->nome_cidade}}</td>
        
        
                        </tr>
                    @empty
                    <span  style="color:#f00;">Nenhuma conta cadastrada </span>
                    @endforelse
                </tbody>
                    
            </table>
        </div>

   

</body>
</html>

