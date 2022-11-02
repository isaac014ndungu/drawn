<div class="row">
    <div class="col-md-12">
        @include('dashboards\admins\formserror\erros')
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-head">
                <header>{!! $header !!}</header>
                <div class="tools visible-xs">
                    <a class="btn btn-default btn-ink" onclick="history.go(-1);return false;">
                        <i class="md md-arrow-back"></i>
                        Back
                    </a>
                    <input type="submit" name="draft" class="btn btn-info ink-reaction" value="Save Draft">
                    <input type="submit" name="publish" class="btn btn-primary ink-reaction" value="Publish">
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            {{ Form::label('name','Name*') }}
                            {{ Form::text('name',old('name'),['class'=>'form-control', 'required']) }}


                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            {{ Form::label('Product','Product*') }}
                            {{ Form::select('Product', array('Materials'=>'Materials', 'Labour'=>'Labour', ), old('Product'), ['class' => 'form-control gender', ]) }}

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            {{ Form::label('Quantity','Quantity*') }}
                            {{ Form::text('Quantity',old('Quantity'),['class'=>'form-control', 'required']) }}

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            {{ Form::label('CostPerItem','CostPerItem*') }}
                            {{ Form::text('CostPerItem',old('CostPerItem'),['class'=>'form-control', 'required']) }}

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            {{ Form::label('Total','Total*') }}
                            {{ Form::number('Total',old('Total'),['class'=>'form-control', 'required']) }}

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            {{ Form::label('GrandTotal','GrandTotal*') }}
                            {{ Form::text('GrandTotal',old('GrandTotal'),['class'=>'form-control', 'required']) }}

                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('Notes','Notes') }}
                                    {{ Form::text('Notes',old('Notes'),['class'=>'form-control', 'required']) }}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="card-actionbar">
                    <div class="card-actionbar-row">
                        <button type="reset" class="btn btn-default ink-reaction">Reset</button>
                        <input type="submit" name="draft" class="btn btn-info ink-reaction" value="Submit">
                    </div>
                </div>
                <div class="row">

                </div>

            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-affix affix-4">
            <div class="card-head">
                <div class="tools">
                    <a class="btn btn-default btn-ink">
                        <i class="md md-arrow-back"></i>
                        Back
                    </a>
                </div>
            </div>
            {{ Form::hidden('view', old('view')) }}
        </div>
    </div>
</div>

@push('styles')
<link href="{{ asset('backend/css/libs/dropify/dropify.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('/backend/css/bootstrap-select.min.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('backend/js/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
<script src="{{ asset('backend/js/libs/jquery-validation/dist/additional-methods.min.js') }}"></script>
<script src="{{ asset('backend/js/libs/dropify/dropify.min.js') }}"></script>
<script src="{{ asset('/backend/js/bootstrap-select.js') }}"></script>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>

@endpush




