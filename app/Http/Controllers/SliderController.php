<?php

namespace App\Http\Controllers;

use App\Models\backend\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    
        //index Method__//
        public function index(){
          $data = Slider::all();
          return view('Details.Slider.index', compact('data'));
      }
      //__create Method__//
         public function create(){
         return view('Details.Slider.create');
            }
    //__Store Method__//
public function store(Request $request){

    $request->validate([
        'description' => 'required',
        'long_description' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
    ]);
    $Slider=new Slider;
    $Slider->description = $request->description;
    $Slider->long_description = $request->long_description;
    // image code start
    $image= time().'.'. $request->image->extension();
    $request->image->move(public_path('Slider'), $image);
    $path = "/Slider/".$image;
    $Slider->image = $path;
    // image code End
    $Slider->save();
    return redirect()->back();
  }
//__ Edit Method__//
public function edit($id){
    $data=Slider::find($id);
    return view('Details.Slider.edit', compact('data'));
    }
        //_Update Method__//
        public function update(Request $request, $id)
        {
            $request->validate([
                'description' => 'required',
                'long_description' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            ]);
            $Slider = Slider::find($id);
            $Slider->description = $request->description;
            $Slider->long_description = $request->long_description;

            // Image code start
            if ($request->hasFile('image')) {
                $image = time().'.'. $request->image->extension();
                $request->image->move(public_path('Slider'), $image);
                $path = "/Slider/".$image;
                $Slider->image = $path;
            }
            // Image code end

            $Slider->save();

            return redirect()->back();
        }

   //__Delete Method__//
   public function destroy($id)
   {

    Slider::destroy($id);
       return redirect()->back();
   }
}
