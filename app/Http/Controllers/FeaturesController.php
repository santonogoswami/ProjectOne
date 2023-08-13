<?php

namespace App\Http\Controllers;

use App\Models\Features;
use Illuminate\Http\Request;

class FeaturesController extends Controller
{  //index Method__//
     public function index(){
        $data = Features::all();
        return view('Details.Features.index', compact('data'));
    }
    //__create Method__//
public function create(){
    return view('Details.Features.create');
}

//__Store Method__//
public function store(Request $request){
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'link' => 'required',
    ]);
    $Features=new Features;
    $Features->name = $request->name;
    $Features->description = $request->description;
    $Features->link = $request->link;
    $Features->save();
    return redirect()->back();
  }
  //__ Edit Method__//
public function edit($id){
    $data=Features::find($id);
    return view('Details.Features.edit', compact('data'));
    }
    //__Update Method__//
public function update(Request $request,$id){
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'link' => 'required',
    ]);
    $Features=Features::find($id);
    $Features->name = $request->name;
    $Features->description = $request->description;
    $Features->link = $request->link;
    $Features->save();
    return redirect()->back();
  }
   //__Delete Method__//
   public function destroy($id)
   {
    Features::destroy($id);
       return redirect()->back();
   }
}
