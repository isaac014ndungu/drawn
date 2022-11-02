@extends('dashboards.admins.layouts.admin-dash-layout')

@section('title', 'Time and Material Invoice')

@section('content')
    <section>
        <div class="section-body">

            {{ Form::open(['route' =>'Product.store','class'=>'form form-validate','role'=>'form',  'novalidate']) }}
            @include('dashboards.admins.Products.forms.forms', ['header' => 'Time and Material Invoice'])
            {{ Form::close() }}
        </div>
    </section>
@stop
