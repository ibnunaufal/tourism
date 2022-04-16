<?php

namespace App\Http\Controllers;

use App\Models\Fasum;
use Illuminate\Http\Request;

class FasumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.fasum.index');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fasum  $fasum
     * @return \Illuminate\Http\Response
     */
    public function show(Fasum $fasum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fasum  $fasum
     * @return \Illuminate\Http\Response
     */
    public function edit(Fasum $fasum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fasum  $fasum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fasum $fasum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fasum  $fasum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fasum $fasum)
    {
        //
    }
}
