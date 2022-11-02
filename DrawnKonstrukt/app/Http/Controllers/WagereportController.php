<?php

namespace App\Http\Controllers;

use App\Models\Wagereport;
use App\Http\Requests\StoreWagereportRequest;
use App\Http\Requests\UpdateWagereportRequest;
use Encore\Admin\Form\Field\Id;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class WagereportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('dashboards.manager.Wage');
    }
    public function Wagerepo()
    {
        $wagereport = Wagereport::all();
        return view('dashboards.admins.Wagerepo')->with('Wagereport',$wagereport);

    }

    public function view($id)
    {

        $wagereports=Wagereport::findOrFail($id);

        return view('dashboards.admins.view')->with('Wagereports',[$wagereports]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWagereportRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWagereportRequest $request)
    {
        DB::transaction(function () use ($request)
        {
            $data = $request->data();

            $wagereport = Wagereport::create($data);


        });

        return redirect()->route('manager.Wage')->withSuccess(trans('messages.create_success', ['entity' => 'WageReport']));

    }
    public function datatable()
    {
        return Datatables::eloquent(Wagereport::query())->make(true);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wagereport  $wagereport
     * @return \Illuminate\Http\Response
     */
    public function show(Wagereport $wagereport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wagereport  $wagereport
     * @return \Illuminate\Http\Response
     */
    public function edit(Wagereport $wagereport)

    {

        return view('dashboards.manager.forms.edit',compact('wagereport'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWagereportRequest  $request
     * @param  \App\Models\Wagereport  $wagereport
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWagereportRequest $request, Wagereport $wagereport)
    {

        DB::transaction(function () use ($request, $wagereport)
        {
            $data = $request->data();

            $wagereport->update($data);


        });

        return redirect()->route('admin.Products')->withSuccess(trans('messages.update_success', [ 'entity' => 'Staff' ]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wagereport  $wagereport
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wagereport $wagereport)
    {
        //
    }
}
