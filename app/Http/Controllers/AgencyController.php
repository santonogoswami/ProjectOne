<?php

namespace App\Http\Controllers;

use App\Models\backend\Agency;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
     //index Method__//
     public function index(){
        $data = Agency::all();
        return view('Details.Agency.index', compact('data'));
    }
    //__create Method__//
public function create(){
    return view('Details.Agency.create');
}

//__Store Method__//
public function store(Request $request){
    $request->validate([
        'Agency_name' => 'required',
        'description' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
    ]);
    $Agency=new Agency;
    $Agency->Agency_name = $request->Agency_name;
    $Agency->description = $request->description;
    // image code start
    $image= time().'.'. $request->image->extension();
    $request->image->move(public_path('Agency'), $image);
    $path = "/Agency/".$image;
    $Agency->image = $path;
    // image code End
    $Agency->save();
    return redirect()->back();
  }
  //__ Edit Method__//
public function edit($id){
    $data=Agency::find($id);
    return view('Details.Agency.edit', compact('data'));
    }
    //__Update Method__//
public function update(Request $request,$id){
    $request->validate([
        'Agency_name' => 'required',
        'description' => 'required',
         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
    ]);
    $Agency=Agency::find($id);
    $Agency->Agency_name = $request->Agency_name;
    $Agency->description = $request->description;
   
            
            // Image code start
            if ($request->hasFile('image')) {
                $image = time().'.'. $request->image->extension();
                $request->image->move(public_path('Agency'), $image);
                $path = "/Agency/".$image;
                $Agency->image = $path;
            }
            // Image code end
    $Agency->save();
    return redirect()->back();
  }
   //__Delete Method__//
   public function destroy($id)
   {
    Agency::destroy($id);
       return redirect()->back();
   }
}
