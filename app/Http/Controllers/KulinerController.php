<?php

namespace App\Http\Controllers;

use App\Models\Kuliner;
use Illuminate\Http\Request;

class KulinerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kuliner = Kuliner::all();
        return view('pages.kuliner.index', compact('kuliner', 'kuliner'));
    }
    public function admin()
    {
        //
        // $kuliner = Kuliner::all();
        // return view('pages.kuliner.admin', compact('kuliner', 'kuliner'));
        $kuliner = Kuliner::paginate(10);
        return view('pages.kuliner.admin',['kuliner' => $kuliner]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.kuliner.create');
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
        $image->move(public_path('img/kuliner'), $image->getClientOriginalName());
        // $path = public_path('img/logo').'/'.$image->getClientOriginalName();
        $path = $image->getClientOriginalName();
        // time().'.'.$request->file->getClientOriginalExtension();
            
        // $imageName = time().'.'.$request->image->getClientOriginalExtension();
        // $request->file->move(public_path('/images/gallert/'), $imageName);

        $post = new Kuliner;
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
     * @param  \App\Models\Kuliner  $kuliner
     * @return \Illuminate\Http\Response
     */
    public function show(Kuliner $kuliner)
    {
        //
        return view('pages.kuliner.detail',compact('kuliner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kuliner  $kuliner
     * @return \Illuminate\Http\Response
     */
    public function edit(Kuliner $kuliner)
    {
        //
        return view('pages.kuliner.edit',compact('kuliner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kuliner  $kuliner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kuliner $kuliner)
    {
        //
        $kuliner = Kuliner::find($id);
        $kuliner->name = $request->get('tName');
        $kuliner->desc = $request->get('tDesc');
        $kuliner->video = $request->get('tVideo');
        $kuliner->long = $request->get('tLong');
        $kuliner->lat = $request->get('tLat');
        $kuliner->address = $request->get('tAddress');
        $kuliner->price = $request->get('tTicket');
        $kuliner->ticket = $request->get('tTicket');
        $kuliner->days = json_encode($request->input('days'));
        $kuliner->hours = json_encode($request->input('days'));
        if($request->get('cHeadline') == 1){
            $kuliner->isHeadline = $request->get('cHeadline');
        }else{
            $kuliner->isHeadline = 0;
        }
        if($request->get('cIcon') == 1){
            $kuliner->isIcon = 1;
        }else{
            $kuliner->isIcon = 0; 
        }
        // if($request->hasFile('image')){
        if($request->image != "" && $request->image != null){
            error_log('has image.');
            $image = $request->file('image');
            $request->image = $image->getClientOriginalName();
            $image->move(public_path('img/kuliner'), $image->getClientOriginalName());
            // $path = public_path('img/logo').'/'.$image->getClientOriginalName();
            $path = $image->getClientOriginalName();
            $kuliner->image = $path;
        }
        $kuliner->update();
        return redirect('/admin')->with('success', 'gallery updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kuliner  $kuliner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kuliner $kuliner)
    {
        //
        $kuliner->delete();
        return redirect('/kuliner/admin')->with('success', 'kuliner deleted successfully');
    }
}
