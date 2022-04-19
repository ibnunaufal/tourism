<?php

namespace App\Http\Controllers;

use App\Models\Akomodasi;
use Illuminate\Http\Request;

class AkomodasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.akomodasi.index');
    }
    public function admin()
    {
        //
        $akomodasi = Akomodasi::paginate(10);
        return view('pages.akomodasi.admin',['akomodasi' => $akomodasi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.akomodasi.create');
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
        $request->validate([
            'tName'=>'required',
            'tDesc'=> 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'tVideo' => 'required',
            'tAddress' => 'required',
            'tLong' => 'required',
            'tLat' => 'required',
            'tAddress' => 'required',
            'tTiket' => 'required',
            'addMoreInputFields.*.subject' => 'required'
        ]);
        // $path = $request->file('image')->store('public/images');

        $image = $request->file('image');
        $request->image = $image->getClientOriginalName();
        $image->move(public_path('img/akomodasi'), $image->getClientOriginalName());
        $path = $image->getClientOriginalName();
        $post = new Akomodasi;
        $post->name = $request->get('tName');
        $post->desc = $request->get('tDesc');
        $post->foto = $path;
        $post->long = $request->get('tLong');
        $post->lat = $request->get('tLat');
        $post->address = $request->get('tAddress');
        $post->video = $request->get('tVideo');
        $post->price = $request->get('tVideo');
        $post->ticket = $request->get('tTiket');
        $post->days = json_encode($request->input('days'));
        // $post->days = "Setiap Hari";
        $post->hours = json_encode($request->input('days'));
        if($request->get('cHeadline') == 1){
            $post->isHeadline = $request->get('cHeadline');
        }else{
            $post->isHeadline = 0;
        }
        if($request->get('cIcon') == 2){
            $post->isIcon = 1;
        }else{
            $post->isIcon = 0; 
        }
        $post->save();
        return redirect('/admin')->with('success', 'gallery has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Akomodasi  $akomodasi
     * @return \Illuminate\Http\Response
     */
    public function show(Akomodasi $akomodasi)
    {
        //
        return view('pages.akomodasi.detail',compact('akomodasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Akomodasi  $akomodasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Akomodasi $akomodasi)
    {
        //
        return view('pages.akomodasi.edit',compact('akomodasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Akomodasi  $akomodasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //
        $akomodasi = Akomodasi::find($id);
        $akomodasi->name = $request->get('tName');
        $akomodasi->desc = $request->get('tDesc');
        $akomodasi->video = $request->get('tVideo');
        $akomodasi->long = $request->get('tLong');
        $akomodasi->lat = $request->get('tLat');
        $akomodasi->address = $request->get('tAddress');
        $akomodasi->price = $request->get('tTicket');
        $akomodasi->ticket = $request->get('tTicket');
        $akomodasi->days = json_encode($request->input('days'));
        $akomodasi->hours = json_encode($request->input('days'));
        if($request->get('cHeadline') == 1){
            $akomodasi->isHeadline = $request->get('cHeadline');
        }else{
            $akomodasi->isHeadline = 0;
        }
        if($request->get('cIcon') == 1){
            $akomodasi->isIcon = 1;
        }else{
            $akomodasi->isIcon = 0; 
        }
        // if($request->hasFile('image')){
        if($request->image != "" && $request->image != null){
            error_log('has image.');
            $image = $request->file('image');
            $request->image = $image->getClientOriginalName();
            $image->move(public_path('img/akomodasi'), $image->getClientOriginalName());
            // $path = public_path('img/logo').'/'.$image->getClientOriginalName();
            $path = $image->getClientOriginalName();
            $akomodasi->image = $path;
        }
        $akomodasi->update();
        return redirect('/admin')->with('success', 'gallery updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Akomodasi  $akomodasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Akomodasi $akomodasi)
    {
        //
    }
}
