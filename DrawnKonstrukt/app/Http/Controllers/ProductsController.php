<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        return view('dashboards.admins.Products.index')->with('Products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboards/admins/Products/create');
    }
    public function Productcreate()
    {
        return view('dashboards.manager.Wage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductsRequest $request)
    {
        DB::transaction(function () use ($request)
        {
            $data = $request->data();

            $Products = Products::create($data);


        });

        return redirect()->route('products.index')->withSuccess(trans('messages.create_success', ['entity' => 'Products']));
    }
    public function datatable()
    {
        return Datatables::eloquent(Products::query())->make(true);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $Products)
    {

        return view('dashboards.admins.Products.edit', compact('Products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductsRequest  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductsRequest $request, Products $products)
    {
        DB::transaction(function () use ($request, $products)
        {
            $data = $request->data();

            $products->update($data);


        });

        return redirect()->route('admin.Products')->withSuccess(trans('messages.update_success', [ 'entity' => 'Staff' ]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products=Products::findOrFail($id);
        $products->delete();
         return back();


    }
}
