<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Show;
use App\Models\backend\Slider;
use App\Models\backend\Agency;
use App\Models\Team;
use App\Models\Features;
use App\Models\price;
use App\Models\Projects;
use App\Models\Testimonial;
use App\Models\contact;
class ShowController extends Controller
{
   //index Method__//
       public function index(){
        $Service = Service::all();
        $Slider = Slider::all();
        $Agency = Agency::all();
        $Team = Team::all();
        $Features = Features::all();
        $price = price::all();
        $Projects = Projects::all();
        $Testimonial = Testimonial::all();
        $contact = contact::all();

      //   dd($Testimonial);
                return view('frontend.index',compact('Service','Slider','Agency','Team','Features','price','Projects','Testimonial','contact'));
   }
   
}

