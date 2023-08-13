<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
class ServiceController extends Controller
{
     //index Method__//
     public function index(){
        $data = Service::all();
        return view('Details.Service.index', compact('data'));
    }
    //__create Method__//
public function create(){
    return view('Details.Service.create');
}

//__Store Method__//
public function store(Request $request){
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'link' => 'required',
    ]);
    $service=new Service;
    $service->name = $request->name;
    $service->description = $request->description;
    $service->link = $request->link;
    $service->save();
    return redirect()->back();
  }
  //__ Edit Method__//
public function edit($id){
    $data=Service::find($id);
    return view('Details.Service.edit', compact('data'));
    }
    //__Update Method__//
public function update(Request $request,$id){
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'link' => 'required',
    ]);
    $service=Service::find($id);
    $service->name = $request->name;
    $service->description = $request->description;
    $service->link = $request->link;
    $service->save();
    return redirect()->back();
  }
   //__Delete Method__//
   public function destroy($id)
   {
    Service::destroy($id);
       return redirect()->back();
   }
}