
@extends('dashboards.admins.layouts.admin-dash-layout')

@section('title', 'Time and Material Invoice')

@section('content')
    <section>
        <div class="section-body">
            <div class="card">
                <div class="card-head">
                    <header class="text-capitalize">Time and Material Invoice</header>
                    <div class="tools">
                        <a class="btn btn-primary ink-reaction" href="{{ route('Products.create') }}" >
                            <i class="md md-add"></i>
                            Add
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="Products-datatable">


                                <form action="/put" method="POST">
                                    {{ csrf_field() }}
                                <select name="post_id" class="form-control m-2" id="">
                                    @foreach ($posts as $post)
                                    <option value="{{ $post->id }}">{{ $post->id }}</option>
                                 @endforeach
                                </select>
                                    <select name="users_id" class="form-control m-2" id="">
                                    @foreach ($user as $option )
                          <option value="{{ $option->id }}">{{ $option->name }}</option>
                    @endforeach
                </select>
                <button type="submit" style="background-color:rgb(3, 27, 236)" class="btn btn-danger mt-3 ">Submit</button>


                                </form></td>
                                    </form>

                                   </td>

                               </tr>


                            </tbody>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
