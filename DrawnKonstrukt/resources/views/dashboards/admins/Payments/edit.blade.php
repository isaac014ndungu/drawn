@extends('dashboards.admins.layouts.admin-dash-layout')

@section('title', 'Time And Materials')

@section('content')
    <section>
        <div class="section-body">
            {{ Form::model( $paymentform, ['route' =>['payment.update',  $Paymentform->name],'class'=>'form form-validate','role'=>'form', 'files'=>true, 'novalidate']) }}
            {{ method_field('PUT') }}
            @include('dashboards.admins.Payments.forms.form', ['header' => 'Edit Time and Materials <span class="text-primary"></span>'])
            {{ Form::close() }}
        </div>
    </section>
@stop

