<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
      //index Method__//
        public function index(){
          $data = Testimonial::all();
          return view('Details.Testimonial.index', compact('data'));
      }
      //__create Method__//
         public function create(){
         return view('Details.Testimonial.create');
            }
    //__Store Method__//
public function store(Request $request){

    $request->validate([
        'name' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
       'designation' => 'required', 
       'description' => 'required',
    ]);
    $Testimonial=new Testimonial;
    $Testimonial->name = $request->name;
    // image code start
    $image= time().'.'. $request->image->extension();
    $request->image->move(public_path('Testimonial'), $image);
    $path = "/Testimonial/".$image;
    $Testimonial->image = $path;
    // image code End
    
    $Testimonial->designation = $request->designation;
    $Testimonial->description = $request->description;
    $Testimonial->save();
    return redirect()->back();
  }
//__ Edit Method__//
public function edit($id){
    $data=Testimonial::find($id);
    return view('Details.Testimonial.edit', compact('data'));
    }
        //_Update Method__//
        public function update(Request $request, $id)
        {
            $request->validate([
                'name' => 'required',
               'designation' => 'required', 
               'description' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            ]);
            $Testimonial = Testimonial::find($id);
        $Testimonial->name = $request->name;
       $Testimonial->designation = $request->designation;
       $Testimonial->description = $request->description;

            // Image code start
            if ($request->hasFile('image')) {
                $image = time().'.'. $request->image->extension();
                $request->image->move(public_path('Testimonial'), $image);
                $path = "/Testimonial/".$image;
                $Testimonial->image = $path;
            }
            // Image code end

            $Testimonial->save();

            return redirect()->back();
        }

   //__Delete Method__//
   public function destroy($id)
   {

    Testimonial::destroy($id);
       return redirect()->back();
   }
}
