<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomizedSubCategoriesSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        $subCategories = array(
            0 =>
            array(
                'category_id' => 1,
                'name' => 'Audio & HiFi',
                'slug' => 'audio-hifi',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            1 =>
            array(
                'category_id' => 1,
                'name' => 'Camera & Photo',
                'slug' => 'camera-photo',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            2 =>
            array(
                'category_id' => 1,
                'name' => 'Electronics Accessories',
                'slug' => 'electronics-accessories',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            3 =>
            array(
                'category_id' => 1,
                'name' => 'Phones & Accessories',
                'slug' => 'phones-accessories',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            4 =>
            array(
                'category_id' => 1,
                'name' => 'Sat Nav & Car Electronics',
                'slug' => 'sat-nav-car-electronics',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            5 =>
            array(
                'category_id' => 1,
                'name' => 'Tablets',
                'slug' => 'tablets',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            6 =>
            array(
                'category_id' => 1,
                'name' => 'TV & Home Cinema',
                'slug' => 'tv-home-cinema',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            7 =>
            array(
                'category_id' => 2,
                'name' => 'Shoes',
                'slug' => 'shoes',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            8 =>
            array(
                'category_id' => 2,
                'name' => 'Sweatshirts',
                'slug' => 'sweatshirts',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            9 =>
            array(
                'category_id' => 2,
                'name' => 'Trousers',
                'slug' => 'trousers',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            10 =>
            array(
                'category_id' => 3,
                'name' => 'Furniture',
                'slug' => 'furniture',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            11 =>
            array(
                'category_id' => 3,
                'name' => 'Home Accessories',
                'slug' => 'home-accessories',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            12 =>
            array(
                'category_id' => 3,
                'name' => 'Kitchen',
                'slug' => 'kitchen',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            13 =>
            array(
                'category_id' => 4,
                'name' => 'Cars',
                'slug' => 'cars',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            14 =>
            array(
                'category_id' => 4,
                'name' => 'Motorcycles',
                'slug' => 'motorcycles',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            15 =>
            array(
                'category_id' => 4,
                'name' => 'Other vehicles',
                'slug' => 'other-vehicles',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            16 =>
            array(
                'category_id' => 4,
                'name' => 'Scooters',
                'slug' => 'scooters',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            17 =>
            array(
                'category_id' => 4,
                'name' => 'Spare parts',
                'slug' => 'spare-parts',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            18 =>
            array(
                'category_id' => 5,
                'name' => 'For Rent: Houses & Apartments',
                'slug' => 'for-rent-houses-apartments',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            19 =>
            array(
                'category_id' => 5,
                'name' => 'For Rent: Shops & Offices',
                'slug' => 'for-rent-shops-offices',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            20 =>
            array(
                'category_id' => 5,
                'name' => 'For Sale: Houses & Apartments',
                'slug' => 'for-sale-houses-apartments',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            21 =>
            array(
                'category_id' => 5,
                'name' => 'For Sale: Shops & Offices',
                'slug' => 'for-sale-shops-offices',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            22 =>
            array(
                'category_id' => 5,
                'name' => 'Lands & Plots',
                'slug' => 'lands-plots',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            23 =>
            array(
                'category_id' => 6,
                'name' => 'Camping & Hiking',
                'slug' => 'camping-hiking',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            24 =>
            array(
                'category_id' => 6,
                'name' => 'Cycling',
                'slug' => 'cycling',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            25 =>
            array(
                'category_id' => 6,
                'name' => 'Fitness',
                'slug' => 'fitness',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            26 =>
            array(
                'category_id' => 6,
                'name' => 'Outdoor Clothing',
                'slug' => 'outdoor-clothing',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            27 =>
            array(
                'category_id' => 6,
                'name' => 'Outdoor Shoes',
                'slug' => 'outdoor-shoes',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            28 =>
            array(
                'category_id' => 6,
                'name' => 'Sports Technology',
                'slug' => 'sports-technology',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            29 =>
            array(
                'category_id' => 7,
                'name' => 'Dogs & Puppies',
                'slug' => 'dogs-puppies',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            30 =>
            array(
                'category_id' => 7,
                'name' => 'Cats & Kittens',
                'slug' => 'cats-kittens',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            31 =>
            array(
                'category_id' => 7,
                'name' => 'Birds',
                'slug' => 'birds',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            32 =>
            array(
                'category_id' => 7,
                'name' => 'Fish & Reptile Pets',
                'slug' => 'fish-reptile-pets',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            33 =>
            array(
                'category_id' => 7,
                'name' => 'Horses & Ponies',
                'slug' => 'horses-ponies',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            34 =>
            array(
                'category_id' => 7,
                'name' => 'Other Pets',
                'slug' => 'other-pets',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            35 =>
            array(
                'category_id' => 7,
                'name' => 'Pet Services & Stores',
                'slug' => 'pet-services-stores',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            36 =>
            array(
                'category_id' => 7,
                'name' => 'Pet Supplies',
                'slug' => 'pet-supplies',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            37 =>
            array(
                'category_id' => 7,
                'name' => 'Pets Lost & Found',
                'slug' => 'pets-lost-found',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            38 =>
            array(
                'category_id' => 7,
                'name' => 'Pets Shelters',
                'slug' => 'pets-shelters',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            39 =>
            array(
                'category_id' => 7,
                'name' => 'Pets Wanted',
                'slug' => 'pets-wanted',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            40 =>
            array(
                'category_id' => 8,
                'name' => 'Automotive Services',
                'slug' => 'automotive-services',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            41 =>
            array(
                'category_id' => 8,
                'name' => 'Beauty & Salon Services',
                'slug' => 'beauty-salon-services',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            42 =>
            array(
                'category_id' => 8,
                'name' => 'Caregivers & Baby Sitting',
                'slug' => 'caregivers-baby-sitting',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            43 =>
            array(
                'category_id' => 8,
                'name' => 'Cleaning Services',
                'slug' => 'cleaning-services',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            44 =>
            array(
                'category_id' => 8,
                'name' => 'Construction & Remodeling',
                'slug' => 'construction-remodeling',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            45 =>
            array(
                'category_id' => 8,
                'name' => 'Financial Services',
                'slug' => 'financial-services',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            46 =>
            array(
                'category_id' => 8,
                'name' => 'Health & Wellness',
                'slug' => 'health-wellness',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            47 =>
            array(
                'category_id' => 8,
                'name' => 'Home Services',
                'slug' => 'home-services',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            48 =>
            array(
                'category_id' => 9,
                'name' => 'Accounting & Bookkeeping Jobs',
                'slug' => 'accounting-bookkeeping-jobs',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            49 =>
            array(
                'category_id' => 9,
                'name' => 'Business Opportunities',
                'slug' => 'business-opportunities',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            50 =>
            array(
                'category_id' => 9,
                'name' => 'Cleaning Jobs',
                'slug' => 'cleaning-jobs',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            51 =>
            array(
                'category_id' => 9,
                'name' => 'Construction Work',
                'slug' => 'construction-work',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            52 =>
            array(
                'category_id' => 9,
                'name' => 'Creative Jobs',
                'slug' => 'creative-jobs',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            53 =>
            array(
                'category_id' => 9,
                'name' => 'Educational Jobs',
                'slug' => 'educational-jobs',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            54 =>
            array(
                'category_id' => 9,
                'name' => 'Financial & Real Estate Jobs',
                'slug' => 'financial-real-estate-jobs',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            55 =>
            array(
                'category_id' => 9,
                'name' => 'Internships',
                'slug' => 'internships',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            56 =>
            array(
                'category_id' => 9,
                'name' => 'IT Jobs',
                'slug' => 'it-jobs',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
            57 =>
            array(
                'category_id' => 9,
                'name' => 'Labor Jobs',
                'slug' => 'labor-jobs',
                'image' => 'public/images/subcategories/no_image_available.png',
            ),
        );


        // DB::table('sub_categories')->delete();

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('sub_categories')->truncate();

        DB::table('sub_categories')->insert($subCategories);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
