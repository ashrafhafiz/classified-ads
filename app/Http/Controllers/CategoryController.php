<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoryRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Brian2694\Toastr\Facades\Toastr;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['categories'] = Category::all();
        return view('backend.category.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['no_image'] = 'public/images/categories/no_image_available.png';
        return view('backend.category.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        if ($request->hasFile('image')) {

            $uploaded_file_name = $request->file('image')->getClientOriginalName();

            $image_name =  pathinfo($uploaded_file_name, PATHINFO_FILENAME)
                . Carbon::now()->format('YmdHis')
                . '.'
                . pathinfo($uploaded_file_name, PATHINFO_EXTENSION);

            $image_path = $request->file('image')->storeAs('public/images/categories', $image_name);
        } else {
            $image_path = 'public/images/categories/no_image_available.png';
        }

        Category::create([
            'name' => $request->name,
            'slug' => \Str::slug($request->name),
            'image' => $image_path,
        ]);

        // session()->flash('success', 'Category created successfully!');

        Toastr::success('Category created successfully!', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $data['category'] = $category;
        return view('backend.category.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategoryRequest $request, Category $category)
    {
        if ($request->hasFile('image')) {

            // Delete previous image
            Storage::delete($category->image);

            $uploaded_file_name = $request->file('image')->getClientOriginalName();

            $image_name =  pathinfo($uploaded_file_name, PATHINFO_FILENAME)
                . Carbon::now()->format('YmdHis')
                . '.'
                . pathinfo($uploaded_file_name, PATHINFO_EXTENSION);

            $image_path = $request->file('image')->storeAs('public/images/categories', $image_name);
            $category->image = $image_path;
            session()->flash('success', 'Category updated successfully!');
        }

        if ($category->name != $request->name) {
            // dd();
            $category->name = $request->name;
            $category->slug = \Str::slug($request->name);
            session()->flash('success', 'Category updated successfully!');
        }

        $category->save();

        Toastr::success('Category updated successfully!', 'Success', ["positionClass" => "toast-top-right"]);

        // return redirect()->route('auth.category.index')->with('status', 'Category updated successfully!');
        return redirect()->route('auth.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        try {
            $category = Category::findOrFail($category->id);
            $category->delete();

            Toastr::success('Category deleted successfully!', 'Success', ["positionClass" => "toast-top-right"]);

            return redirect()->route('auth.category.index');
        } catch (\Throwable $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
