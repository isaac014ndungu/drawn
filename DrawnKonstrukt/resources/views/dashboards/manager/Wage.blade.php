@extends('dashboards.manager.layouts.manager-dash-layout')

@section('title', 'Staff')

@section('content')
    <section>
        <div class="section-body">

            {{ Form::open(['route' =>'Wage.store','class'=>'form form-validate','role'=>'form',  'novalidate']) }}
            @include('dashboards.manager.forms.form', ['header' => 'Create a staff'])
            {{ Form::close() }}
        </div>

    </section>
@stop
