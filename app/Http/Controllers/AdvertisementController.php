<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\Category;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
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
        // $data['categories'] = Category::get();
        return view('ads.create');
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
     * @param  \App\Models\Advertisement  $adv
     * @return \Illuminate\Http\Response
     */
    public function show(Advertisement $adv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Advertisement  $adv
     * @return \Illuminate\Http\Response
     */
    public function edit(Advertisement $adv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Advertisement  $adv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Advertisement $adv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Advertisement  $adv
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advertisement $adv)
    {
        //
    }
}
