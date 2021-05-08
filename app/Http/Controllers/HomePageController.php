<?php

namespace App\Http\Controllers;

use App\Models\Aboutu;
use App\Models\Blog;
use App\Models\Category;
use App\Models\ContactMessage;
use App\Models\MachineryCategory;
use App\Models\Slider;
use Illuminate\Http\Request;
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

    // getting about us page

    public function aboutUs() {
        $categories = Category::with(['media'])->get();
        $about = Aboutu::orderBy('id','desc')->limit(1)->get();
        return view('homepage.about-us',compact('categories','about'));
    }

    // display blogs list
    public function blogList() {
        $categories = Category::with(['media'])->get();
        $blogs = Blog::with(['blog_category', 'created_by', 'tags', 'media'])->get();
        return view('homepage.blogs',compact('blogs','categories'));
    }

    // preview blog details
    public function blogDetails($id) {
        $categories = Category::with(['media'])->get();
        $blog = Blog::findOrFail($id);
        $blogs = Blog::orderBy("id","desc")->with(['blog_category', 'created_by', 'tags', 'media'])->limit(4)->get();
        return view('homepage.blog-details',compact('blog','categories','blogs'));
    }

    // contact us
    public function contactUs() {
        $categories = Category::with(['media'])->get();
        return view('homepage.contact-us',compact('categories'));
    }

    // add contact messages
    public function contactAdd(Request $request) {
        $contact = ContactMessage::create($request->all());
        return redirect()->back()->with("success","Message sent successfully");
    }
}
