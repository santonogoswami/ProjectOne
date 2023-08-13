<?php

namespace App\Http\Controllers;

use App\Models\Pricing;
use Illuminate\Http\Request;

class PricingController extends Controller
{
  //index Method__//
     public function index(){
        $data = Pricing::all();
        return view('Details.price.index', compact('data'));
    }
    //__create Method__//
public function create(){
    return view('Details.price.create');
}

//__Store Method__//
public function store(Request $request){
    $request->validate([
        'price' => 'required',
        'month' => 'required',
        'text' => 'required',
    ]);
    $Pricing=new Pricing;
    $Pricing->price = $request->price;
    $Pricing->month = $request->month;
    $Pricing->text = $request->text;
    $Pricing->save();
    return redirect()->back();
  }
  //__ Edit Method__//
public function edit($id){
    $data=Pricing::find($id);
    return view('Details.price.edit', compact('data'));
    }
    //__Update Method__//
public function update(Request $request,$id){
    $request->validate([
        'price' => 'required',
        'month' => 'required',
        'text' => 'required',
    ]);
    $Pricing=Pricing::find($id);
    $Pricing->price = $request->price;
    $Pricing->month = $request->month;
    $Pricing->text = $request->text;
    $Pricing->save();
    return redirect()->back();
  }
   //__Delete Method__//
   public function destroy($id)
   {
    Pricing::destroy($id);
       return redirect()->back();
   }
}
