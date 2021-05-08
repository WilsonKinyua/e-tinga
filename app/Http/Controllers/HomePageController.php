<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\MachineryCategory;
use App\Models\Slider;
use Illuminate\Support\Facades\DB;

class HomePageController extends Controller
{

    public function homepage() {

        $sliders = Slider::with(['media'])->get();
        $categories = Category::with(['media'])->get();
        return view('welcome',compact('sliders','categories'));
    }

    // select all machineries with certain categories
    public function categoryMachinery($id) {

        $machineries = DB::table('machinery_categories')->where('category_id',"=",$id)->get();
        // print_r(json_encode($machineries));
        // $machineries->with(['category', 'media'])->get();

        $category = Category::findOrFail($id);
        $category->with(['media'])->get();
        $categories = Category::with(['media'])->get();

        return view("homepage.machineries-list", compact('machineries','category','categories'));
    }

    // getting single machinery details

    public function machineryDetails($id) {

        $categories = Category::with(['media'])->get();

        $machineryCategory = MachineryCategory::findOrFail($id);
        $machineryCategory->with(['category','media'])->get();

        return view('homepage.machinery-details',compact('categories','machineryCategory'));
    }

}
