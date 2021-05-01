<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Slider;

class HomePageController extends Controller
{

    public function homepage() {

        $sliders = Slider::with(['media'])->get();
        $categories = Category::with(['media'])->get();
        return view('welcome',compact('sliders','categories'));
    }

}
