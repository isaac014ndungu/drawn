@extends('dashboards.admins.layouts.admin-dash-layout')

@section('title', 'Time and Material Invoice')

@section('content')
    <section>
        <div class="section-body">

            {{ Form::open(['route' =>'products.store','class'=>'form form-validate','role'=>'form',  'novalidate']) }}
            @include('dashboards.admins.forms.form', ['header' => 'Time and Material Invoice'])
            {{ Form::close() }}
        </div>
    </section>
@stop
