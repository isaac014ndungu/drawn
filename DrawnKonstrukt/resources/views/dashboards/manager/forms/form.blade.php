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
                            {{ Form::label('name','Name oF contractor') }}
                            {{ Form::text('name',old('name'),['class'=>'form-control', 'required']) }}
                            </div>


                        </div>
                    </div>
                </div>


                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{ Form::label('Address','Address') }}
                                {{ Form::text('code',old('code'),['class'=>'form-control', 'required']) }}
                                </div>


                            </div>
                        </div>
                    </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            {{ Form::label('Manager','Project Manager') }}
                            {{ Form::text('Manager',old('Manager'),['class'=>'form-control', 'required']) }}

                        </div>
                    </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            {{ Form::label('Location','Location') }}
                            {{ Form::text('Location',old('Location'),['class'=>'form-control', 'required']) }}

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            {{ Form::label('SiteManager','Site Manager') }}
                            {{ Form::text('SiteManager',old('SiteManager'),['class'=>'form-control', 'required']) }}

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            {{ Form::label('ContractNo','Contract Number') }}
                            {{ Form::number('ContractNo',old('ContractNo'),['class'=>'form-control', 'required']) }}

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            {{ Form::label('Payroll','Payroll Number') }}
                            {{ Form::text('Payroll',old('Payroll'),['class'=>'form-control', 'required']) }}

                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('Week','Week End') }}
                                    {{ Form::text('Week',old('Week'),['class'=>'form-control', 'required']) }}

                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            {{ Form::label('Start','Start Date') }}
                                            {{ Form::Date('Start',old('Start'),['class'=>'form-control', 'required']) }}

                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    {{ Form::label('End','End Date') }}
                                                    {{ Form::Date('End',old('End'),['class'=>'form-control', 'required']) }}

                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            {{ Form::label('Names','Names Of Employees') }}
                                                            {{ Form::Textarea('Names',old('Names'),['class'=>'form-control', 'required']) }}

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    {{ Form::label('Work','Work Classfication') }}
                                                                    {{ Form::Textarea('Work',old('Work'),['class'=>'form-control', 'required']) }}

                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <h5>Enter Number of Hours Per Day</h5>
                                                                            {{ Form::label('Mon','Monday') }}
                                                                            {{ Form::text('Mon',old('Mon'),['class'=>'form-control', 'required']) }}

                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="form-group">
                                                                                    {{ Form::label('Tue','Tuesday') }}
                                                                                    {{ Form::text('Tue',old('Tue'),['class'=>'form-control', 'required']) }}

                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <div class="form-group">
                                                                                            {{ Form::label('Wed','Wednesday') }}
                                                                                            {{ Form::text('Wed',old('Wed'),['class'=>'form-control', 'required']) }}

                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-sm-12">
                                                                                                <div class="form-group">
                                                                                                    {{ Form::label('Thr','Thursday') }}
                                                                                                    {{ Form::text('Thr',old('Thr'),['class'=>'form-control', 'required']) }}

                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-12">
                                                                                                        <div class="form-group">
                                                                                                            {{ Form::label('Fri','Friday') }}
                                                                                                            {{ Form::text('Fri',old('Fri'),['class'=>'form-control', 'required']) }}

                                                                                                        </div>
                                                                                                        <div class="row">
                                                                                                            <div class="col-sm-12">
                                                                                                                <div class="form-group">
                                                                                                                    {{ Form::label('Sat','Sartady') }}
                                                                                                                    {{ Form::text('Sat',old('Sat'),['class'=>'form-control', 'required']) }}

                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-sm-12">
                                                                                                                        <div class="form-group">
                                                                                                                            {{ Form::label('Sun','Sunday') }}
                                                                                                                            {{ Form::text('Sun',old('Sun'),['class'=>'form-control', 'required']) }}

                                                                                                                        </div>
                                                                                                                        <div class="row">
                                                                                                                            <div class="col-sm-12">
                                                                                                                                <div class="form-group">
                                                                                                                                    {{ Form::label('Total','Total Hours') }}
                                                                                                                                    {{ Form::text('Total',old('Total'),['class'=>'form-control', 'required']) }}

                                                                                                                                </div>
                                                                                                                                <div class="row">
                                                                                                                                    <div class="col-sm-12">
                                                                                                                                        <div class="form-group">
                                                                                                                                            {{ Form::label('Rate','Rate Per Hour') }}
                                                                                                                                            {{ Form::text('Rate',old('Rate'),['class'=>'form-control', 'required']) }}

                                                                                                                                        </div>
                                                                                                                                        <div class="row">
                                                                                                                                            <div class="col-sm-12">
                                                                                                                                                <div class="form-group">
                                                                                                                                                    {{ Form::label('Gross','Gross Amount Earned') }}
                                                                                                                                                    {{ Form::text('Gross',old('Gross'),['class'=>'form-control', 'required']) }}

                                                                                                                                                </div>
                                                                                                                                                <div class="row">
                                                                                                                                                    <div class="col-sm-12">
                                                                                                                                                        <div class="form-group">
                                                                                                                                                            {{ Form::label('Nhif','NHIF (Deductions)') }}
                                                                                                                                                            {{ Form::text('Nhif',old('Nhif'),['class'=>'form-control', 'required']) }}

                                                                                                                                                        </div>
                                                                                                                                                        <div class="row">
                                                                                                                                                            <div class="col-sm-12">
                                                                                                                                                                <div class="form-group">
                                                                                                                                                                    {{ Form::label('Nssf','NSSF (Deductions)') }}
                                                                                                                                                                    {{ Form::text('Nssf',old('Nssf'),['class'=>'form-control', 'required']) }}

                                                                                                                                                                </div>

                                                                                                                                                                <div class="row">
                                                                                                                                                                    <div class="col-sm-12">
                                                                                                                                                                        <div class="form-group">
                                                                                                                                                                            {{ Form::label('Other','Other (Deductions)') }}
                                                                                                                                                                            {{ Form::text('Other',old('Other'),['class'=>'form-control', 'required']) }}

                                                                                                                                                                        </div>

                                                                                                                                                                        <div class="row">
                                                                                                                                                                            <div class="col-sm-12">
                                                                                                                                                                                <div class="form-group">
                                                                                                                                                                                    {{ Form::label('Total Deductions','Net Wage Paid For Week') }}
                                                                                                                                                                                    {{ Form::text('GrandTotal',old('GrandTotal'),['class'=>'form-control', 'required']) }}

                                                                                                                                                                                </div>
                                                                                                                                                                            <div class="row">
                                                                                                                                                                                <div class="col-sm-12">
                                                                                                                                                                                    <div class="form-group">
                                                                                                                                                                                        {{ Form::label('Net','Net Wage Paid For Week') }}
                                                                                                                                                                                        {{ Form::text('Net',old('Net'),['class'=>'form-control', 'required']) }}

                                                                                                                                                                                    </div>
                                                                                                                                                                                </div>
                                                                                                                                                                            </div>
                                                                                                                                                                        </div>
                                                                                                                                                                    </div>                                                                                                                                           </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('Note','Note') }}
                                    {{ Form::text('Note',old('Note'),['class'=>'form-control', 'required']) }}

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
