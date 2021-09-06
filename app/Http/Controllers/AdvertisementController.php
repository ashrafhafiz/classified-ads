<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdvertisementRequest;
use App\Models\Advertisement;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Brian2694\Toastr\Facades\Toastr;

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
    public function store(StoreAdvertisementRequest $request)
    {
        $data = $request->all();

        if ($request->hasFile('featureImage')) {
            $uploaded_file_name = $request->file('featureImage')->getClientOriginalName();
            $image_name =  pathinfo($uploaded_file_name, PATHINFO_FILENAME)
                . '_' . Carbon::now()->format('YmdHis') . '.'
                . pathinfo($uploaded_file_name, PATHINFO_EXTENSION);
            $feature_image = $request->file('featureImage')->storeAs('public/images/ads', $image_name);
        } else {
            $feature_image = 'public/images/ads/no_image_available.png';
        }

        if ($request->hasFile('firstImage')) {
            $uploaded_file_name = $request->file('firstImage')->getClientOriginalName();
            $image_name =  pathinfo($uploaded_file_name, PATHINFO_FILENAME)
                . '_' . Carbon::now()->format('YmdHis') . '.'
                . pathinfo($uploaded_file_name, PATHINFO_EXTENSION);
            $first_image = $request->file('firstImage')->storeAs('public/images/ads', $image_name);
        } else {
            $first_image = 'public/images/ads/no_image_available.png';
        }

        if ($request->hasFile('secondImage')) {
            $uploaded_file_name = $request->file('secondImage')->getClientOriginalName();
            $image_name =  pathinfo($uploaded_file_name, PATHINFO_FILENAME)
                . '_' . Carbon::now()->format('YmdHis') . '.'
                . pathinfo($uploaded_file_name, PATHINFO_EXTENSION);
            $second_image = $request->file('secondImage')->storeAs('public/images/ads', $image_name);
        } else {
            $second_image = 'public/images/ads/no_image_available.png';
        }

        $data['first_image'] = $first_image;
        $data['second_image'] = $second_image;
        $data['feature_image'] = $feature_image;
        $data['slug'] = Str::slug($request->name);
        $data['user_id'] = auth()->user()->id;

        Advertisement::create($data);

        Toastr::success('Category created successfully!', 'Success', ["positionClass" => "toast-top-right"]);

        return "Ads created...";
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
