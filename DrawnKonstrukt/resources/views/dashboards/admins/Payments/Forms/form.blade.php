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
                            {{ Form::label('Employer','To Employer') }}
                            {{ Form::text('Employer',old('Employer'),['class'=>'form-control', 'required']) }}


                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            {{ Form::label('Person','Contact Person') }}
                            {{ Form::text('Person',old('Person'),['class'=>'form-control', 'required']) }}

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            {{ Form::label('Project','Project') }}
                            {{ Form::text('Project',old('Project'),['class'=>'form-control', 'required']) }}

                        </div>
                    </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            {{ Form::label('Number','Application Number') }}
                            {{ Form::text('Number',old('Number'),['class'=>'form-control', 'required']) }}

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            {{ Form::label('Period','Period Ending') }}
                            {{ Form::Date('Period',old('Period'),['class'=>'form-control', 'required']) }}

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            {{ Form::label('Work',' Contract Work') }}
                            {{ Form::text('Work',old('Work'),['class'=>'form-control', 'required']) }}
                            </div>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('Contract',' Contract No') }}
                                    {{ Form::text('Contract',old('Contract'),['class'=>'form-control', 'required']) }}
                                </div>
                            </div>

</div>
<div class="row">
<div class="col-sm-12">
<div class="form-group">
    {{ Form::label('Prepared','Prepared By') }}
    {{ Form::text('Prepared',old('Prepared'),['class'=>'form-control', 'required']) }}

</div>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {{ Form::label('OrigiAmount','Original   Contract Amount') }}
            {{ Form::text('OrigiAmount',old('OrigiAmount'),['class'=>'form-control', 'required']) }}

        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    {{ Form::label('NetChange','Net Changes') }}
                    {{ Form::text('NetChange',old('NetChange'),['class'=>'form-control', 'required']) }}

                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            {{ Form::label('TotalComplete','Total Completed') }}
                            {{ Form::text('TotalComplete',old('TotalComplete'),['class'=>'form-control', 'required']) }}

        </div>
        <div class="row">
        <div class="col-sm-12">
        <div class="form-group">
        <h5>Enter Number of Hours Per Day</h5>
        {{ Form::label('Retain','Retainage') }}
        {{ Form::text('Retain',old('Retain'),['class'=>'form-control', 'required']) }}

        </div>
        <div class="row">
        <div class="col-sm-12">
        <div class="form-group">
        {{ Form::label('Retainage','Less Retainage') }}
        {{ Form::text('Retainage',old('Retainage'),['class'=>'form-control', 'required']) }}

        </div>
        <div class="row">
        <div class="col-sm-12">
        <div class="form-group">
        {{ Form::label('Previours','Less Previous Retainage') }}
        {{ Form::text('Previours',old('Previours'),['class'=>'form-control', 'required']) }}

        </div>
        <div class="row">
        <div class="col-sm-12">
        <div class="form-group">
        {{ Form::label('Dues','Payment Due') }}
        {{ Form::text('Dues',old('Dues'),['class'=>'form-control', 'required']) }}

        </div>
        <div class="row">
        <div class="col-sm-12">
        <div class="form-group">
        {{ Form::label('Balance','Balance To finish') }}
        {{ Form::text('Balance',old('Balance'),['class'=>'form-control', 'required']) }}

        </div>
        <div class="row">
        <div class="col-sm-12">
        <div class="form-group">
        {{ Form::label('Contractor','Contractor') }}
        {{ Form::text('Contractor',old('Contractor'),['class'=>'form-control', 'required']) }}

        </div>
        <div class="row">
        <div class="col-sm-12">
        <div class="form-group">
        {{ Form::label('Date','DATE') }}
        {{ Form::DATE('Date',old('Date'),['class'=>'form-control', 'required']) }}

        </div>
        <div class="row">
        <div class="col-sm-12">
        <div class="form-group">
        {{ Form::label('County',' County') }}
        {{ Form::text('County',old('County'),['class'=>'form-control', 'required']) }}

        </div>
        <div class="row">
        <div class="col-sm-12">
        <div class="form-group">
        {{ Form::label('Location','Location') }}
        {{ Form::text('Location',old('Location'),['class'=>'form-control', 'required']) }}

        </div>
<div class="row">
<div class="col-sm-12">
<div class="form-group">
{{ Form::label('Day','DAY OF') }}
{{ Form::Date('Day',old('Day'),['class'=>'form-control', 'required']) }}

</div>
<div class="row">
<div class="col-sm-12">
<div class="form-group">
    {{ Form::label('Month','Month') }}
    {{ Form::text('Month',old('Month'),['class'=>'form-control', 'required']) }}

</div>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {{ Form::label('Public','Public Name') }}
            {{ Form::text('Public',old('Public'),['class'=>'form-control', 'required']) }}

        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {{ Form::label('Expire','Commission expiray Date:') }}
            {{ Form::DATE('Expire',old('Expire'),['class'=>'form-control', 'required']) }}

        </div>



                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            {{ Form::label('AmountCert','Amount Certified') }}
                            {{ Form::text('AmountCert',old('AmountCert'),['class'=>'form-control', 'required']) }}

                        </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{ Form::label('Engineer','Engineer/Agent') }}
                                {{ Form::text('Engineer',old('Engineer'),['class'=>'form-control', 'required']) }}

                            </div>
                        </div>
                    </div>
                </div>
            </div>                                                                                                                                           </div>
<div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('Day','Day') }}
                                    {{ Form::Date('DDay',old('DDay'),['class'=>'form-control', 'required']) }}

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
