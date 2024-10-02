<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrador</title>
    <meta name='csrf-token' content="{{csrf_token()}}">
</head>
<body>
   
    <h2>Dashboard</h2>

    <p>Quantidade de usuários online logados: <span id="quantidadeUsuarioOnlineLogado">{{ $activeUsers}}</span></p>

    <a href="{{route('login.destroy')}}">Sair</a>
    <p>mariasilva@example.com</p>
    <p>joaosouza@example.com</p>
    <p>anacarvalho@example.com</p>
    <script src="{{asset('js/custom.js')}}">

    </script>
    
</body>
</html>
