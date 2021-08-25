<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Requests\StoresubcategoryRequest;

class subcategoryController extends Controller
{
    static $NO_IAMGE = 'public/images/subcategories/no_image_available.png';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['subCategories'] = SubCategory::orderBy('category_id')->get();
        return view('backend.subcategory.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] = Category::all();
        $data['no_image'] = 'public/images/subcategories/no_image_available.png';
        return view('backend.subcategory.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresubcategoryRequest $request)
    {
        // dd($request);
        if ($request->hasFile('image')) {
            $uploaded_file_name = $request->file('image')->getClientOriginalName();

            $image_name = pathinfo($uploaded_file_name, PATHINFO_FILENAME)
                . Carbon::now()->format('YmdHis')
                . '.'
                . pathinfo($uploaded_file_name, PATHINFO_EXTENSION);

            $image_path = $request->file('image')->storeAs('public/images/subcategories', $image_name);
        } else {
            $image_path = 'public/images/subcategories/no_image_available.png';
        }

        SubCategory::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'image' => $image_path,
            'category_id' => $request->category_id,
        ]);

        // session()->flash('success', 'Category created successfully!');

        Toastr::success('Category created successfully!', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubCategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subcategory)
    {
        $data['categories'] = Category::all();
        $data['subcategory'] = $subcategory;
        return view('backend.subcategory.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubCategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subcategory)
    {
        if ($request->hasFile('image')) {

            // Delete previous image
            if ($subcategory->image != self::$NO_IAMGE) {
                Storage::delete($subcategory->image);
            }

            $uploaded_file_name = $request->file('image')->getClientOriginalName();

            $image_name =  pathinfo($uploaded_file_name, PATHINFO_FILENAME)
                . Carbon::now()->format('YmdHis')
                . '.'
                . pathinfo($uploaded_file_name, PATHINFO_EXTENSION);

            $image_path = $request->file('image')->storeAs('public/images/categories', $image_name);
            $subcategory->image = $image_path;
        }

        if ($subcategory->name != $request->name) {
            $subcategory->name = $request->name;
            $subcategory->slug = Str::slug($request->name);
        }

        if ($subcategory->category_id != $request->category_id) {
            $subcategory->category_id = $request->category_id;
        }


        session()->flash('success', 'Category updated successfully!');

        $subcategory->save();

        Toastr::success('Sub-Category updated successfully!', 'Success', ["positionClass" => "toast-top-right"]);

        // return redirect()->route('auth.category.index')->with('status', 'Category updated successfully!');
        return redirect()->route('auth.subcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subcategory)
    {
        try {
            $subcategory = SubCategory::findOrFail($subcategory->id);
            $subcategory->delete();

            Toastr::success('Category deleted successfully!', 'Success', ["positionClass" => "toast-top-right"]);

            return redirect()->route('auth.subcategory.index');
        } catch (\Throwable $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
