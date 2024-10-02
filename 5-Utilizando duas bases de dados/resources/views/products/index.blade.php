<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Celke</title>
</head>
<body>
    <div class="card mt-4 mb-4 border-light shadow">
        <div class="card-header d-flex justify-content-between">
            <span>Listar os produtos</span>
        </div>
        
        <div class="card-body">
           
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
                @forelse($products as $product)
                    <tbody>
                        <tr>
                            <td> {{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->email}}</td>
                           
                        </tr>
                    </tbody>
                @empty
                    <span  style="color:#f00;">Nenhum produto cadastrado </span>
                @endforelse
            </table>
</body>
</html>