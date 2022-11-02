@extends('dashboards.admins.layouts.admin-dash-layout')

@section('title', 'Wage and Hour report')

@section('content')
    <section>
        <div class="section-body">
            <div class="card">
                <div class="card-head">
                    <header class="text-capitalize">Wage and Hour report</header>
                    <div class="tools">

                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="Products-datatable">
                            <thead>
                            <tr>
                                <th>{{ strtoupper(__('id')) }}</th>
                                <th>{{ strtoupper(__('name')) }}</th>
                                <th>{{ strtoupper(__('code')) }}</th>
                                <th>{{ strtoupper(__('Location')) }}</th>
                                <th>{{ strtoupper(__('SiteManager')) }}</th>
                                <th>{{ strtoupper(__('ContractNo')) }}</th>
                                <th>{{ strtoupper(__('Payroll')) }}</th>


                                <th>{{ strtoupper(__('action')) }}</th>
                            </tr>
                            </thead>
                            <tbody>


                                @foreach ($Wagereport as $Wagereport)
                             <tr>
                                 <th scope="row">{{ $Wagereport->WagereportId }}</th>
                                   <td>{{ $Wagereport->name }}</td>
                                   <td>{{ $Wagereport->code }}</td>
                                   <td>{{ $Wagereport->Manager }}</td>
                                   <td>{{ $Wagereport->Location }}</td>
                                   <td>{{ $Wagereport->SiteManager }}</td>
                                   <td>{{ $Wagereport->Payroll }}</td>


                                    <td> <a class="btn btn-default"  href="{{ route('admins.view',['id'=>$Wagereport->WagereportId]) }}"> edit </a></td>
                                    <td> <a class="btn btn-default"  href="{{ route('admins.view',['id'=>$Wagereport->WagereportId]) }}"> view </a></td>
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
