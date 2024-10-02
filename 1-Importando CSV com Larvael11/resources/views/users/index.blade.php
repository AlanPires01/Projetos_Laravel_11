<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Celke - Importar CSV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
</head>
<body>
    <div class="container">
        <div class="card my-5 border-light shadow">
            <h3 class="card-header">Laravel 11 - Importar Excel</h3>
            <div class="card-body">
                @session('success')
                <div class="alert alert-success" role="alert">{!!$value!!}</div>
                @endsession
            
                @session('error')
                    <div class="alert alert-danger" role="alert">{!!$value!!}</div>
                @endsession
                 
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">{{$error}}</div>
                    @endforeach
            
                @endif
            
                <form method="POST" action="{{route('user.import')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group my-4">
                        <input type="file" name="file" class="form-control" id="file" accept=".csv"><br><br>
                        <button type="submit" class="btn btn-outline-success" id="fileBtn">
                            <i class="fa-solid fa-file-arrow-up me-2"></i>Importar
                        </button>
                    </div>
                    
                </form>
                <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                            </tr>  
                        @endforeach
                    </tbody>
               
            </div>
          
        </div>
    </div>
    
</body>
</html>