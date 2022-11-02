@extends('dashboards.admins.layouts.admin-dash-layout')

@section('title', 'Staff')

@section('content')
    <section>
        <div class="section-body">
            {{ Form::open(['route' =>'Paymentform.store','class'=>'form form-validate','role'=>'form',  'novalidate']) }}
            @include('dashboards.admins.Payments.Forms.form', ['header' => 'Payments Applications'])
            {{ Form::close() }}
        </div>
    </section>
@stop
