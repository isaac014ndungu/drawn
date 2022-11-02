
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel CRUD With Multiple Image Upload</title>

      <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <!-- Font-awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    </head>
    <body>

        <div class="container" style="margin-top: 50px;">
            <div class="row">
                <div class="col-lg-13">
                    <h3 class="text-center text-danger"><b> Post To User</b> </h3>
				    <div class="form-group">
                        <form action="{{ route('register') }}"" method="post" method="post" >
                            @csrf
                            @method("put")
                         <input type="text" name="title" class="form-control m-2" placeholder="title" value="{{ $user->id }}">


        				 <input type="text" name="author" class="form-control m-2" placeholder="author" value="{{ $user->name }}">
                         <input type="text" name="author" class="form-control m-2" placeholder="author" value="{{ $user->role }}">






            <button type="button" class="btn btn-primary">
                {{ __('Register') }}
            </button>



            </form>
        </div>
    </div>
</div>
         </body>
</html>
