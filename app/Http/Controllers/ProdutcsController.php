<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProdutcsRequest;
use App\Http\Requests\UpdateProdutcsRequest;
use App\Models\Produtcs;

class ProdutcsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreProdutcsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProdutcsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produtcs  $produtcs
     * @return \Illuminate\Http\Response
     */
    public function show(Produtcs $produtcs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produtcs  $produtcs
     * @return \Illuminate\Http\Response
     */
    public function edit(Produtcs $produtcs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProdutcsRequest  $request
     * @param  \App\Models\Produtcs  $produtcs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProdutcsRequest $request, Produtcs $produtcs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produtcs  $produtcs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produtcs $produtcs)
    {
        //
    }
}
