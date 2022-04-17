<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Destinasi;
use App\Models\Akomodasi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $obj = json_decode($Destinasi::where('isIcon', 1)->take(1)->get(), true);
        // foreach ($obj['geometry'] as $key => $value) {
        //     $lat = $value['location']['lat'];
        // }
        $data = Destinasi::whereIn('isIcon', [1])->get();

        return view('pages.home')
        ->with('akomodasi', Akomodasi::latest()->take(6)->get())
        ->with('akomodasiSize', Akomodasi::count())
        ->with('destinasiSize', Destinasi::count())
        ->with('destinasiIcon', $data)
        // ->with('destinasiIcon', Destinasi::where('isIcon', 1)->take(1)->get())
        ->with('destinasi', Destinasi::latest()->take(6)->get());
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
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        //
    }
}
