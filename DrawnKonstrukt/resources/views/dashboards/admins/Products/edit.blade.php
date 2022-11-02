@extends('dashboards.admins.layouts.admin-dash-layout')

@section('title', 'Time And Materials')

@section('content')
    <section>
        <div class="section-body">
            {{ Form::model( $products, ['route' =>['Products.update',  $products->name],'class'=>'form form-validate','role'=>'form', 'files'=>true, 'novalidate']) }}
            {{ method_field('PUT') }}
            @include('dashboards.admins.Products.forms.forms', ['header' => 'Edit Time and Materials <span class="text-primary"></span>'])
            {{ Form::close() }}
        </div>
    </section>
@stop

