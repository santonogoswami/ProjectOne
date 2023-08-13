<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
     //index Method__//
     public function index(){
        $data = Projects::all();
        return view('Details.Projects.index', compact('data'));
    }
    //__create Method__//
public function create(){
    return view('Details.Projects.create');
}

//__Store Method__//
public function store(Request $request){
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
    ]);
    $Projects=new Projects;
    $Projects->name = $request->name;
    $Projects->description = $request->description;
    // image code start
    $image= time().'.'. $request->image->extension();
    $request->image->move(public_path('Projects'), $image);
    $path = "/Projects/".$image;
    $Projects->image = $path;
    // image code End
    $Projects->save();
    return redirect()->back();
  }
  //__ Edit Method__//
public function edit($id){
    $data=Projects::find($id);
    return view('Details.Projects.edit', compact('data'));
    }
    //__Update Method__//
public function update(Request $request,$id){
    $request->validate([
        'name' => 'required',
        'description' => 'required',
         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
    ]);
    $Projects=Projects::find($id);
    $Projects->name = $request->name;
    $Projects->description = $request->description;
   
            
            // Image code start
            if ($request->hasFile('image')) {
                $image = time().'.'. $request->image->extension();
                $request->image->move(public_path('Projects'), $image);
                $path = "/Projects/".$image;
                $Projects->image = $path;
            }
            // Image code end
    $Projects->save();
    return redirect()->back();
  }
   //__Delete Method__//
   public function destroy($id)
   {
    Projects::destroy($id);
       return redirect()->back();
   }
}
