@extends('dashboards.admins.layouts.admin-dash-layout')

@section('title', 'Payment Form')

@section('content')
    <section>
        <div class="section-body">
            <div class="card">
                <div class="card-head">
                    <header class="text-capitalize">Payments Applications</header>
                    <div class="tools">
                        <a class="btn btn-primary ink-reaction" href="{{ route('admin/create') }}" >
                            <i class="md md-add"></i>
                            Add
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="paymentform-datatable">
                            <thead>
                            <tr>
                                <th>{{ strtoupper(__('id')) }}</th>
                                <th>{{ strtoupper(__('To Employer')) }}</th>
                                <th>{{ strtoupper(__('Contact Person')) }}</th>
                                <th>{{ strtoupper(__('Project')) }}</th>
                                <th>{{ strtoupper(__('Application Number')) }}</th>
                                <th>{{ strtoupper(__('Period Ending')) }}</th>
                                <th>{{ strtoupper(__('Contact Work')) }}</th>
                                <th>{{ strtoupper(__('Conract No')) }}</th>

                                <th>{{ strtoupper(__('action')) }}</th>
                            </tr>
                            </thead>
                            <tbody>


                                @foreach ($Paymentform as $Paymentform)
                             <tr>
                                 <th scope="row">{{ $Paymentform->id }}</th>
                                   <td>{{ $Paymentform->Employer }}</td>
                                   <td>{{ $Paymentform->Person }}</td>
                                   <td>{{ $Paymentform->Project }}</td>
                                   <td>{{ $Paymentform->Number }}</td>
                                   <td>{{ $Paymentform->Period }}</td>
                                   <td>{{ $Paymentform->Work }}</td>
                                   <td>{{ $Paymentform->Contract }}</td>


                                    </form>
                                   </td>

                               </tr>
                               @endforeach

                            </tbody>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
