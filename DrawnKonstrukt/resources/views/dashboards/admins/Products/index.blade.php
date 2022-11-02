
@extends('dashboards.admins.layouts.admin-dash-layout')

@section('title', 'Time and Material Invoice')

@section('content')
    <section>
        <div class="section-body">
            <div class="card">
                <div class="card-head">
                    <header class="text-capitalize">Time and Material Invoice</header>
                    <div class="tools">
                        <a class="btn btn-primary ink-reaction" href="{{ route('Products.create') }}" >
                            <i class="md md-add"></i>
                            Add
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="Products-datatable">
                            <thead>
                            <tr>
                                <th>{{ strtoupper(__('id')) }}</th>
                                <th>{{ strtoupper(__('name')) }}</th>
                                <th>{{ strtoupper(__('Product')) }}</th>
                                <th>{{ strtoupper(__('Quantity')) }}</th>
                                <th>{{ strtoupper(__('CostPerItem')) }}</th>
                                <th>{{ strtoupper(__('Total')) }}</th>
                                <th>{{ strtoupper(__('GrandTotal')) }}</th>
                                <th>{{ strtoupper(__('Notes')) }}</th>

                                <th>{{ strtoupper(__('action')) }}</th>
                            </tr>
                            </thead>
                            <tbody>


                                @foreach ($Products as $Products)
                             <tr>
                                 <th scope="row">{{ $Products->id }}</th>
                                   <td>{{ $Products->name }}</td>
                                   <td>{{ $Products->Product }}</td>
                                   <td>{{ $Products->Quantity }}</td>
                                   <td>{{ $Products->CostPerItem }}</td>
                                   <td>{{ $Products->Total }}</td>
                                   <td>{{ $Products->GrandTotal }}</td>
                                   <td>{{ $Products->Notes }}</td>

                                <td> <a class="btn btn-success"  href="{{ route('admins.edit',['id'=>$Products->id]) }}"> edit </a></td>
                                <td>  <form action="/delete/{{ $Products->id }}" method="post">
                                    <button class="btn btn-outline-danger" onclick="return confirm('Are you sure?');" type="submit">Delete</button>
                                    @csrf
                                    @method('delete')
                                </form></td>
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
