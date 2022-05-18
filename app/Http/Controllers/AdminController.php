<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Destinasi;
use App\Models\Akomodasi;
use App\Models\Kuliner;
use App\Models\Acara;
use App\Models\Fasum;
use App\Models\Category;
use App\Models\Tempat;
use App\Models\Headline;
use App\Models\Review;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $destinasi = Destinasi::all();
        if(Auth::check()){
            $destinasi = Destinasi::paginate(5);
            $akomodasi = Akomodasi::paginate(5);
            $kuliner = Kuliner::paginate(5);
            $acara = Acara::paginate(5);
            $fasum = Fasum::paginate(5);
            $headline = Headline::paginate(5);
            // $category = Category::paginate(5);
            // $tempat = Tempat::paginate(5);
            $category = Category::paginate(5, ['*'], 'category');
            $tempat = Tempat::paginate(5, ['*'], 'tempat');
            $review = Review::paginate(5, ['*'], 'review');
            $subcategory = SubCategory::all();
            return view('pages.admin.index', compact('destinasi', 'destinasi'))
            ->with('acara', $acara)->with('fasum', $fasum)
            ->with('akomodasi', $akomodasi)
            ->with('kuliner', $kuliner)
            ->with('tempat', $tempat)
            ->with('review', $review)
            ->with('category', $category)
            ->with('headline', $headline)
            ->with('subcategory', $subcategory);
        }else{
            return redirect('/');
        }
        
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
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
