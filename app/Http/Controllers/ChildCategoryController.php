<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Category;
use App\Models\ChildCategory;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Requests\StoresubcategoryRequest;

class ChildCategoryController extends Controller
{
    static $NO_IAMGE = 'public/images/childcategories/no_image_available.png';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['Categories'] = Category::all();
        $data['subCategories'] = SubCategory::all();
        $data['childCategories'] = ChildCategory::all();
        return view('backend.childcategory.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] = Category::all();
        $data['subCategories'] = SubCategory::all();
        $data['childCategories'] = ChildCategory::all();
        $data['no_image'] = self::$NO_IAMGE;
        return view('backend.childcategory.create', $data);
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
     * @param  \App\Models\ChildCategory  $childcategory
     * @return \Illuminate\Http\Response
     */
    public function show(ChildCategory $childcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChildCategory  $childcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ChildCategory $childcategory)
    {
        $data['Categories'] = Category::all();
        $data['subCategories'] = SubCategory::all();
        $data['childCategories'] = ChildCategory::all();
        return view('backend.childcategory.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ChildCategory  $childcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChildCategory $childcategory)
    {
        if ($request->hasFile('image')) {
            $uploaded_file_name = $request->file('image')->getClientOriginalName();

            $image_name = pathinfo($uploaded_file_name, PATHINFO_FILENAME)
                . Carbon::now()->format('YmdHis')
                . '.'
                . pathinfo($uploaded_file_name, PATHINFO_EXTENSION);

            $image_path = $request->file('image')->storeAs('public/images/childcategories', $image_name);
        } else {
            $image_path = self::$NO_IAMGE;
        }

        SubCategory::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'image' => $image_path,
            'sub_category_id' => $request->sub_category_id,
        ]);

        // session()->flash('success', 'Category created successfully!');

        Toastr::success('Child-Category created successfully!', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChildCategory  $childcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChildCategory $childcategory)
    {
        try {
            $childcategory = ChildCategory::findOrFail($childcategory->id);
            $childcategory->delete();

            Toastr::success('Child-Category deleted successfully!', 'Success', ["positionClass" => "toast-top-right"]);

            return redirect()->route('auth.childcategory.index');
        } catch (\Throwable $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
