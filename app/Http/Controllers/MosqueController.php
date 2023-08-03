<?php

namespace App\Http\Controllers;

use App\Models\Mosque;
use App\Http\Requests\StoreMosqueRequest;
use App\Http\Requests\UpdateMosqueRequest;

class MosqueController extends Controller
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
     * @param  \App\Http\Requests\StoreMosqueRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMosqueRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mosque  $mosque
     * @return \Illuminate\Http\Response
     */
    public function show(Mosque $mosque)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mosque  $mosque
     * @return \Illuminate\Http\Response
     */
    public function edit(Mosque $mosque)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMosqueRequest  $request
     * @param  \App\Models\Mosque  $mosque
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMosqueRequest $request, Mosque $mosque)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mosque  $mosque
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mosque $mosque)
    {
        //
    }
}
