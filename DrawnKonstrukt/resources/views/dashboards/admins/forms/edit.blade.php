@extends('dashboards.admins.layouts.app')

@section('title', 'Staff')

@section('content')
    <section>
        <div class="section-body">
            {{ Form::model($Products, ['route' =>['Products.update', $Products->id],'class'=>'form form-validate','role'=>'form', 'files'=>true, 'novalidate']) }}
            {{ method_field('PUT') }}
            @include('dashboards.admins.forms.form', ['header' => 'Edit Staff <span class="text-primary">('.($Products->name).')</span>'])
            {{ Form::close() }}
        </div>
    </section>
@stop
