@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!doctype html>
                    <html lang="en">
                        <head>
                            <meta charset="utf-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width, initial-scale=1">
                            <title>Drawn Konstrukt Project Manager</title>

                          <!-- Bootstrap CSS -->
                         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
                         <!-- Font-awesome -->
                         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

                        </head>
                        <body>

                            <div class="container" style="margin-top: 50px;">
                                <div class="row">


                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-6" style="background-color:green">
                                        <h3 class="text-center text-danger"  ><b>Project Update</b> </h3>
                                        <div class="form-group">
                                            <form action="/post" method="post" enctype="multipart/form-data">
                                             @csrf
                                             <input type="text" name="title" class="form-control m-2" placeholder="PROJECT NAME">
                                             <input type="text" name="author" class="form-control m-2" placeholder="PROJECT">
                                             <Textarea name="body" cols="20" rows="4" class="form-control m-2" placeholder="Project Description"></Textarea>
                                             <label class="m-2">Overview Image</label>
                                             <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">

                                             <label class="m-2">Interior Images</label>
                                             <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" multiple>

                                            <button type="submit" style="background-color:green" class="btn btn-danger mt-3 ">Submit</button>
                                            </form>
                                       </div>
                                    </div>
                                </div>



                             </body>
                    </html>

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
