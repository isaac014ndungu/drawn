<?php

namespace App\Http\Controllers;

use App\Models\Paymentform;
use App\Http\Requests\StorePaymentformRequest;
use App\Http\Requests\UpdatePaymentformRequest;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class PaymentformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  $Paymentform = Paymentform::all();
        return view('dashboards.admins.Payments.index')->with('Paymentform',$Paymentform);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboards.admins.Payments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePaymentformRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaymentformRequest $request)
    {
        DB::transaction(function () use ($request)
        {
            $data = $request->data();

            $Paymentform = Paymentform::create($data);


        });

        return redirect()->route('admin.Paymentform')->withSuccess(trans('messages.create_success', ['entity' => 'Paymentform']));
    }

    public function datatable()
    {
        return Datatables::eloquent(Paymentform::query())->make(true);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paymentform  $paymentform
     * @return \Illuminate\Http\Response
     */
    public function show(Paymentform $paymentform)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paymentform  $paymentform
     * @return \Illuminate\Http\Response
     */
    public function edit(Paymentform $paymentform)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentformRequest  $request
     * @param  \App\Models\Paymentform  $paymentform
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymentformRequest $request, Paymentform $paymentform)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paymentform  $paymentform
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paymentform $paymentform)
    {
        //
    }
}
