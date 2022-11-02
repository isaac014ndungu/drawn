@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','upload')

@section('content')

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
                        <form action="{{ route('user.settings') }}" method="post" method="post" enctype="multipart/form-data">
                            @csrf
                            @method("put")
                         <input type="text" name="title" class="form-control m-2" placeholder="title" value="{{ $posts->title }}">


        				 <input type="text" name="author" class="form-control m-2" placeholder="author" value="{{ $posts->author }}">
                         <Textarea name="body" cols="20" rows="4" class="form-control m-2" placeholder="body">{{ $posts->body }}</Textarea>
                        @csrf
                        @method('PUT')
                        <label class="m-2">Select User</label>
                        <select name="" class="form-control m-2" id="">
                            @foreach ($user as $option )
                            <option value="{{ $option->id }}">{{ $option->name }}</option>
                            @endforeach
                         </select>
                            <label class="m-2">Cover Image</label>
                            <button class="btn text-danger">X</button>
                            @csrf
                            @method('delete')


                            <img src="/cover/{{ $posts->cover }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                            <br>

                             @if (count($posts->images)>0)
                             <p>Images:</p>
                             @foreach ($posts->images as $img)
                                 <button class="btn text-danger">x</button>
                                 @csrf
                                 @method('delete')



                                    <label class="m-12">Images</label</th>


                                        <td> <img src="/images/{{ $img->image }}" class="img-responsive"cols="4" style="max-height:  100px; max-width: 100px;" alt="" srcset=""></td>


                                 </table>



                             @endforeach
                             @endif





            <button type="button" class="btn btn-primary">Done</button>



            </form>
        </div>
    </div>
</div>
         </body>
</html>
