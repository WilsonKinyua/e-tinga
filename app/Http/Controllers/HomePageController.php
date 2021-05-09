<?php

namespace App\Http\Controllers;

use App\Models\Aboutu;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\ContactMessage;
use App\Models\CustomerReview;
use App\Models\MachineryCategory;
use App\Models\Slider;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use AfricasTalking\SDK\AfricasTalking;
use App\Models\Booking;
use App\Models\Farmer;
use DateTime;

class HomePageController extends Controller
{

    public function homepage() {

        $sliders = Slider::with(['media'])->get();
        $categories = Category::with(['media'])->get();
        $reviews = CustomerReview::all();
        $blogs = Blog::orderBy('id','desc')->with(['media'])->limit(3)->get();
        $top_machinery = MachineryCategory::orderBy('id','asc')->limit(5)->get();
        return view('welcome',compact('sliders','categories','reviews','blogs','top_machinery'));
    }

    // select all machineries with certain categories
    public function categoryMachinery($id) {

        $machineries = DB::table('machinery_categories')->where('category_id',"=",$id)->get();
        // print_r(json_encode($machineries));
        // $machineries->with(['category', 'media'])->get();

        $category = Category::findOrFail($id);
        $category->with(['media'])->get();
        $categories = Category::with(['media'])->get();
        $top_machinery = MachineryCategory::orderBy('id','asc')->limit(5)->get();
        return view("homepage.machineries-list", compact('machineries','category','categories','top_machinery'));
    }

    // getting single machinery details

    public function machineryDetails($id) {

        $categories = Category::with(['media'])->get();

        $machineryCategory = MachineryCategory::findOrFail($id);
        $machineryCategory->with(['category','media'])->get();
        $top_machinery = MachineryCategory::orderBy('id','asc')->limit(5)->get();
        return view('homepage.machinery-details',compact('categories','machineryCategory','top_machinery'));
    }

    // getting about us page

    public function aboutUs() {
        $categories = Category::with(['media'])->get();
        $about = Aboutu::orderBy('id','desc')->limit(1)->get();
        $top_machinery = MachineryCategory::orderBy('id','asc')->limit(5)->get();
        return view('homepage.about-us',compact('categories','about','top_machinery'));
    }

    // display blogs list
    public function blogList() {
        $categories = Category::with(['media'])->get();
        $blogs = Blog::with(['blog_category', 'created_by', 'tags', 'media'])->get();
        $top_machinery = MachineryCategory::orderBy('id','asc')->limit(5)->get();
        return view('homepage.blogs',compact('blogs','categories','top_machinery'));
    }

    // preview blog details
    public function blogDetails($id) {
        $categories = Category::with(['media'])->get();
        $blog = Blog::findOrFail($id);
        $blogs = Blog::orderBy("id","desc")->with(['blog_category', 'created_by', 'tags', 'media'])->limit(4)->get();
        $comments = Comment::where('blog_id',"=", $id)->get();
        $top_machinery = MachineryCategory::orderBy('id','asc')->limit(5)->get();
        return view('homepage.blog-details',compact('blog','categories','blogs','comments','top_machinery'));
    }

    // add comment
    public function addComment(Request $request) {
        $comment = Comment::create($request->all());
        return redirect()->back()->with('success','Comment added successfully');
    }

    // contact us
    public function contactUs() {
        $categories = Category::with(['media'])->get();
        $top_machinery = MachineryCategory::orderBy('id','asc')->limit(5)->get();
        return view('homepage.contact-us',compact('categories','top_machinery'));
    }

    // add contact messages
    public function contactAdd(Request $request) {
        $contact = ContactMessage::create($request->all());
        return redirect()->back()->with("success","Message sent successfully");
    }

    // adding subscribers for newsletter
    public function addNewsletter(Request $request) {
        Subscriber::create($request->all());
        return redirect()->back()->with("success","You have been successfully added to our mailing list!!");
    }

    // search
    public function search(Request $request) {
         // Get the search value from the request
         $search = $request->input('q');

         // Search in the name and description columns from the products table
         $machineries = MachineryCategory::query()
             ->where('name', 'LIKE', "%{$search}%")
             ->orWhere('description', 'LIKE', "%{$search}%")
             ->orWhere('brand', 'LIKE', "%{$search}%")
             ->orWhere('model', 'LIKE', "%{$search}%")
             ->orWhere('manufacturer', 'LIKE', "%{$search}%")
             ->orWhere('rated_power', 'LIKE', "%{$search}%")
             ->orWhere('pressure_to_the_ground', 'LIKE', "%{$search}%")
             ->get();
        
        $categories = Category::with(['media'])->get();
        $top_machinery = MachineryCategory::orderBy('id','asc')->limit(5)->get();
        return view('homepage.search',compact('categories','machineries','top_machinery'));
    }

    // create bookings together with the farmer details
    public function createBooking(Request $request) {

        // know which machinery it is
        $machinery = MachineryCategory::findOrFail($request->id);

        // create farmer details
        $data1 = [
            "name" => $request->name,
            "phone" => $request->phone,
            "email" => $request->email,
            "address" => $request->address,
            "id_number" => $request->id_number
        ];
        $farmer = Farmer::create($data1);

        // calculating total cost

            $fdate = $request->order_start_date;
            $tdate = $request->order_end_date;
            $datetime1 = new DateTime($fdate);
            $datetime2 = new DateTime($tdate);
            $interval = $datetime1->diff($datetime2);
            $days = $interval->format('%a');//now do whatever you like with $days

            // total cost

            $cost = ($machinery->cost_per_day * $days);
            // create bookings
            $datab = [
                "customer" => $request->name,
                "phone" => $request->phone,
                "address" => $request->address,
                "equipment" => $machinery->name,
                "order_start_date" => $request->order_start_date,
                "order_end_date" => $request->order_end_date,
                "total_cost" => $cost,
            ];

            $booking = Booking::create($datab);
        // send sms to both the farmer and company
        // send to farmer
        $username = 'developernancy'; // use 'sandbox' for development in the test environment
        $apiKey   = ''; // use your sandbox app API key for development in the test environment
        $AT       = new AfricasTalking($username, $apiKey);

        // Get one of the services
        $sms      = $AT->sms();

        // Use the service
        $result1   = $sms->send([
            'to'      => "+". $request->phone,
            'message' => 'Hello, ' . $request->name . ". Thank you for booking with us. Total cost will be Ksh " . $cost . " for the equipment. Further communication will be done shortly to verify it."
        ]);

        // Use the service to send alert sms to admin
        $result2   = $sms->send([
            'to'      => '+254714852909',
            'message' => 'Hello Admin. ' . "A new booking has been made by '" . $request->name . "' for equipment '" . $machinery->name . "' Having a total of Ksh " . $cost ." Kindly login to the admin panel to approve it."
        ]);

      
        return redirect()->back()->with("success", "A new booking has been proceed successfully. Shortly you will be contacted on approval.");

    }
}
