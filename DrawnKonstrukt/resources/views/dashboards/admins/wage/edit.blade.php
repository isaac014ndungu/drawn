@extends('dashboards.admins.layouts.admin-dash-layout')

@section('title', 'Staff')

@section('content')
    <section>
        <div class="section-body">
            {{ Form::model($wagereport, ['route' =>['wagerepo.edit', $wagereport->id],'class'=>'form form-validate','role'=>'form', 'files'=>true, 'novalidate']) }}
            {{ method_field('PUT') }}
            @include('dashboards.admins.wage.edit', ['header' => 'Edit Staff <span class="text-primary"></span>'])
            {{ Form::close() }}
        </div>
    </section>
@stop
