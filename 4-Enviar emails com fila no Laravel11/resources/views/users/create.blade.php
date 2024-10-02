    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <title>Login</title>
    </head>
    <body>

        
         <div class="card mt-4 mb-4 border-light shadow container">
            <div class="card-header d-flex justify-content-between">
                <span>Detalhes da conta</span>
            </div>
    
    
            @if(session('success'))
                <p style="color:#086">{{session('success')}}</p>
            @endif

            @if(session('error'))
                <p style="color:#086">{{session('error')}}</p>
            @endif
    
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">{{$error}}</div>
                @endforeach
            @endif
            
            <div class="card-body">
    
                <form action ="{{route('users.store')}}" method="POST" class="row g-3">
                    @csrf
                    <div class="col-12">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" name="name" id="name"class="form-control" placeholder="Nome da conta"  aria-describedby="nome" >
                    </div>
    
                    <div class="col-md-4 col-sm-12">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="text" name="email" id="email"class="form-control"   placeholder="seunome@alu.ufc.br" aria-describedby="senha" >
                    </div>
    
                    <div class="col-md-4 col-sm-12">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" name="password" id="password" class="form-control" aria-describedby="senha" >
                    </div>
    
    
                    <div class="col-12">
                        <button type="submit" class="btn btn-success btn-sm">Cadastrar</button>
                    </div>
    
                </form>
    
            </div>
        
        </div> 


    
    </body>
    </html>
    
    
    
   