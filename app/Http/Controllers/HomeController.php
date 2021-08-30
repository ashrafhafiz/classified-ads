<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ChildCategory;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['categories'] = Category::get();
        // $data['subcategories'] = SubCategory::get();
        // $data['childcategories'] = ChildCategory::get();
        return view('index', $data);
    }
}
