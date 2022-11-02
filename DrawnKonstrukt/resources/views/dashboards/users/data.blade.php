@extends('dashboards\users\layouts\user-dash-layout')
@section('title','Dashboard')

@section('content')
<div class="container" style="margin-top: 50px;" >
    @foreach ($post as$post )
    @foreach ($post->images as$image )
<table class="table">
    <tbody>
        <tr>
            <td>{{ $post->author }}</td>
            <td> {{ $post->title }}</td>

            <table>
                <tbody>
                    <tr>
                        <div class="img-zoom-container" >
                    <td><img id="myimage" src="/cover/{{ $post->cover }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset=""></td>
                   <td><img id="myimage" src="/images/{{ $image->image }}" class="img-responsive"cols="4" style="max-height:  100px; max-width: 100px;" alt="" srcset=""></td>
                   <div id="myresult" class="img-zoom-result"></div>
                </div>
                </tr>
                </tbody>
            </table>
            <table>

                <tbody>
                    <tr>

                    </tr>
                </tbody>
            </table>
        </tr>
    </tbody>
</table>
@endforeach
    @endforeach
</div>







@endsection
