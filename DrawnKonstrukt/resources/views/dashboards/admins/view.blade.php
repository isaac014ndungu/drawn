@extends('dashboards.admins.layouts.admin-dash-layout')

@section('title', 'Staff')

@section('content')
    <section>

        <div class="container">
            <div class="row">
                <div class=" col-md-12">

                    <div class="card-body">
                        <h6 class="mb-0">PayRolls</h6>
                        <a href="" class="btn btn-success float-right">Generate Payroll</a>
                    </div>
                </div>

            </div>
            <div class="brand-section">
                <div class="row">
                    <div class="col-6">
                        <h1 class="text-white"> <DrawnKonstrukt/h1>
                    </div>
                    <div class="col-6">
                        <div class="company-details">
                            <p class="text-white">DrawnKonstrukt LIMITED</p>
                            <p class="text-white">KAYOLE</p>
                            <p class="text-white">0708112014</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="body-section">
                <div class="row">
                    <div class="col-6">
                        @foreach ($Wagereports as $Wagereport)
                        <h2 class="heading">NO.:{{ $Wagereport->WagereportId  }}</h2>
                        <p class="sub-heading">Payroll Number:{{ $Wagereport->Payroll }}</p>
                        <p class="sub-heading">Contract Number: {{ $Wagereport->ContractNo }} </p>
                        <p class="sub-heading">Project And Location:{{ $Wagereport->Location }} </p>
                        <p class="sub-heading">Order Date: {{ $Wagereport->Start }} </p>

                    </div>
                    <div class="col-6">
                        <p class="sub-heading">Nameof contractor:{{ $Wagereport->name }} </p>
                        <p class="sub-heading">Nameof Project Manager:{{ $Wagereport->Manager }} </p>
                        <p class="sub-heading">Nameof Project Site Manager: {{ $Wagereport->SiteManager }}</p>
                        <p class="sub-heading">Week Ending:{{ $Wagereport->Week }}  </p>
                        <p class="sub-heading">Address:{{ $Wagereport->code }}  </p>

                    </div>
                </div>
            </div>

            <div class="body-section">
                <h3 class="heading">Details</h3>
                <br>
                <table class="table-bordered">
                    <thead>
                        <tr>

                            <th class="w-20">Nmaes Of Employee</th>
                            <th class="w-20">Work Classification</th>
                            <th class="w-20">Start Date</th>
                            <th class="w-20">End Date</th>
                            <th class="w-20">Total Hours</th>


                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th scope="row">{{ $Wagereport->Names }}</th>
                              <td>{{ $Wagereport->Work }}</td>
                              <td>{{ $Wagereport->Start }}</td>
                              <td>{{ $Wagereport->End }}</td>
                              <td>{{ $Wagereport->Total }}</td>


                              <td></td>

                    </tbody>

                </table>
                <br>

            <div class="body-section">
                <h3 class="heading">Hours Per Week</h3>
                <br>
                <table class="table-bordered">
                    <thead>
                        <tr>

                            <th class="w-20">Monday</th>
                            <th class="w-20">Tuesday</th>
                            <th class="w-20">Wednesday</th>
                            <th class="w-20">Thursday</th>
                            <th class="w-20">Friday</th>
                            <th class="w-20">Sartaday</th>
                            <th class="w-20">Sunday</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <tr>

                                <th scope="row">{{ $Wagereport->Mon }}</th>
                                <td>{{ $Wagereport->Tue }}</td>
                                  <td>{{ $Wagereport->Wed }}</td>
                                  <td>{{ $Wagereport->Thr }}</td>
                                  <td>{{ $Wagereport->Fri }}</td>
                                  <td>{{ $Wagereport->Sat }}</td>
                                  <td>{{ $Wagereport->Sun }}</td>
                                  <td></td>
                        </tr>



                    </tbody>
                </table>

            </div>
            <div class="body-section">
                <h3 class="heading">Pay</h3>
                <br>
                <table class="table-bordered">
                    <thead>
                        <tr>

                            <th class="w-20">Rate Of Pay</th>
                            <th class="w-20">Gross Amount Earned</th>
                            <th class="w-20">NHIF</th>
                            <th class="w-20">NSSF</th>
                            <th class="w-20">Other</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <th scope="row">{{ $Wagereport->Rate }}</th>
                            <td>{{ $Wagereport->Gross }}</td>
                              <td>{{ $Wagereport->Nhif }}</td>
                              <td>{{ $Wagereport->Nssf }}</td>
                              <td>{{ $Wagereport->Other }}</td>


                        </tr>



                    </tbody>
                </table>
                <br>
                <h3 class="heading">Grand Total: {{ $Wagereport->GrandTotal }}</h3>
                <h3 class="heading">Net Amount: {{ $Wagereport->Net }}</h3>
            </div>
            <div class="body-section">
                <h5>Important Notes</h5>
                <p>
                    <td>{{ $Wagereport->Note }}</td>
                </p>
            </div>
            <div class="body-section">
                <p>&copy; Copyright 2021 - Fabcart. All rights reserved.
                    <a href="https://www.drawnkonstrukt.com/" class="float-right">www.drawnkonstrukt.com</a>
                </p>
            </div>
            @endforeach
        </div>
        <style>
            body{
                background-color: #F6F6F6;
                margin: 0;
                padding: 0;
            }
            h1,h2,h3,h4,h5,h6{
                margin: 0;
                padding: 0;
            }
            p{
                margin: 0;
                padding: 0;
            }
            .container{
                width: 80%;
                margin-right: auto;
                margin-left: auto;
            }
            .brand-section{
               background-color: #0d1033;
               padding: 10px 40px;
            }
            .logo{
                width: 50%;
            }

            .row{
                display: flex;
                flex-wrap: wrap;
            }
            .col-6{
                width: 50%;
                flex: 0 0 auto;
            }
            .text-white{
                color: #fff;
            }
            .company-details{
                float: right;
                text-align: right;
            }
            .body-section{
                padding: 16px;
                border: 1px solid gray;
            }
            .heading{
                font-size: 20px;
                margin-bottom: 08px;
            }
            .sub-heading{
                color: #262626;
                margin-bottom: 05px;
            }
            table{
                background-color: #fff;
                width: 100%;
                border-collapse: collapse;
            }
            table thead tr{
                border: 1px solid #111;
                background-color: #f2f2f2;
            }
            table td {
                vertical-align: middle !important;
                text-align: center;
            }
            table th, table td {
                padding-top: 08px;
                padding-bottom: 08px;
            }
            .table-bordered{
                box-shadow: 0px 0px 5px 0.5px gray;
            }
            .table-bordered td, .table-bordered th {
                border: 1px solid #dee2e6;
            }
            .text-right{
                text-align: end;
            }
            .w-20{
                width: 20%;
            }
            .float-right{
                float: right;
            }
        </style>
    </section>

    @stop
