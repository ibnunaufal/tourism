<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DestinasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $destinasi = Destinasi::all();
        return view('pages.destinasi.index', compact('destinasi', 'destinasi'));
        // return view('pages.destinasi.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        //
        // $destinasi = Destinasi::all();
        // return view('pages.destinasi.admin', compact('destinasi', 'destinasi'));
        $destinasi = Destinasi::paginate(10);
        return view('pages.destinasi.admin',['destinasi' => $destinasi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.destinasi.create');
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
        // $string = "";
        // $comma = "=";
        // $temp = [];
        // // $string=implode(",",$your_array);
        // foreach ($request->addMoreInputFields as $key => $value) {
        //     $temp=implode(",",$value);
        //     error_log($temp);
        //     // Student::create($value);
        // }
        // Log::info(json_encode($request->get('addMoreInputFields'))); 

        // error_log(implode(",",$request->get('addMoreInputFields')));
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
        $image->move(public_path('img/destinasi'), $image->getClientOriginalName());
        // $path = public_path('img/logo').'/'.$image->getClientOriginalName();
        $path = $image->getClientOriginalName();
        // time().'.'.$request->file->getClientOriginalExtension();
            
        // $imageName = time().'.'.$request->image->getClientOriginalExtension();
        // $request->file->move(public_path('/images/gallert/'), $imageName);

        $post = new Destinasi;
        $post->name = $request->get('tName');
        $post->desc = $request->get('tDesc');
        $post->foto = $path;
        $post->long = $request->get('tLong');
        $post->lat = $request->get('tLat');
        $post->address = $request->get('tAddress');
        $post->video = $request->get('tVideo');
        // $post->merge([ 
        //     'ticket' => implode(',', (array) $request->get('dynamicAddRemove'))
        // ]);
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
     * @param  \App\Models\Destinasi  $destinasi
     * @return \Illuminate\Http\Response
     */
    public function show(Destinasi $destinasi)
    {
        //
        return view('pages.destinasi.detail',compact('destinasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Destinasi  $destinasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Destinasi $destinasi)
    {
        //
        return view('pages.destinasi.edit',compact('destinasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Destinasi  $destinasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $destinasi = Destinasi::find($id);
        $destinasi->name = $request->get('tName');
        $destinasi->desc = $request->get('tDesc');
        $destinasi->video = $request->get('tVideo');
        $destinasi->long = $request->get('tLong');
        $destinasi->lat = $request->get('tLat');
        $destinasi->address = $request->get('tAddress');
        $destinasi->price = $request->get('tTicket');
        $destinasi->ticket = $request->get('tTicket');
        $destinasi->days = json_encode($request->input('days'));
        $destinasi->hours = json_encode($request->input('days'));
        if($request->get('cHeadline') == 1){
            $destinasi->isHeadline = $request->get('cHeadline');
        }else{
            $destinasi->isHeadline = 0;
        }
        if($request->get('cIcon') == 1){
            $destinasi->isIcon = 1;
        }else{
            $destinasi->isIcon = 0; 
        }
        // if($request->hasFile('image')){
        if($request->image != "" && $request->image != null){
            error_log('has image.');
            $image = $request->file('image');
            $request->image = $image->getClientOriginalName();
            $image->move(public_path('img/destinasi'), $image->getClientOriginalName());
            // $path = public_path('img/logo').'/'.$image->getClientOriginalName();
            $path = $image->getClientOriginalName();
            $destinasi->image = $path;
        }
        $destinasi->update();
        return redirect('/admin')->with('success', 'gallery updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Destinasi  $destinasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destinasi $destinasi)
    {
        //
        $destinasi->delete();
        return redirect('/destinasi/admin')->with('success', 'destinasi deleted successfully');
    }
}
