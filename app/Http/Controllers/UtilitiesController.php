<?php

namespace App\Http\Controllers;

use App\Models\ChildCategory;
use App\Models\City;
use App\Models\State;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class UtilitiesController extends Controller
{
    /**
     * Find the subcategories per a category.
     *
     * @param int $category_id
     * @return collection
     */
    public function get_subcategories_per_category($category_id)
    {
        return SubCategory::where('category_id', $category_id)->get();
    }


    /**
     * Find the childcategories per a subcategory.
     *
     * @param int $sub_category_id
     * @return collection
     */
    public function get_childcategories_per_subcategory($sub_category_id)
    {
        return ChildCategory::where('sub_category_id', $sub_category_id)->get();
    }


    /**
     * Find the childcategories per a subcategory.
     *
     * @param int $country_id
     * @return collection       of states
     */
    public function get_states_per_country($country_id)
    {
        return State::where('country_id', $country_id)->get();
    }


    /**
     * Find the childcategories per a subcategory.
     *
     * @param int $state_id
     * @return collection       of cities
     */
    public function get_cities_per_state($state_id)
    {
        return City::where('state_id', $state_id)->get();
    }
}
