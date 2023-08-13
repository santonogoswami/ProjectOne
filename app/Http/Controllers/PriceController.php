<?php

namespace App\Http\Controllers;

use App\Models\price;
use Illuminate\Http\Request;


class PriceController extends Controller
{
  //index Method__//
     public function index(){
        $data = price::all();
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
        'text1' => 'required',
        'text2' => 'required',
        'text3' => 'required',
        'text4' => 'required',
        'text5' => 'required',
        'text6' => 'required',
        'text7' => 'required',
        'text8' => 'required',
    ]);
    $price=new price;
    $price->price = $request->price;
    $price->month = $request->month;
    $price->text1 = $request->text1;
    $price->text2 = $request->text2;
    $price->text3 = $request->text3;
    $price->text4 = $request->text4;
    $price->text5 = $request->text5;
    $price->text6 = $request->text6;
    $price->text7 = $request->text7;
    $price->text8 = $request->text8;
    $price->save();
    return redirect()->back();
  }
  //__ Edit Method__//
public function edit($id){
    $data=price::find($id);
    return view('Details.price.edit', compact('data'));
    }
    //__Update Method__//
public function update(Request $request,$id){
    $request->validate([
        'price' => 'required',
        'month' => 'required',
        'text1' => 'required',
        'text2' => 'required',
        'text3' => 'required',
        'text4' => 'required',
        'text5' => 'required',
        'text6' => 'required',
        'text7' => 'required',
        'text8' => 'required',
    ]);
    $price=price::find($id);
    $price->price = $request->price;
    $price->month = $request->month;
    $price->text1 = $request->text1;
    $price->text2 = $request->text2;
    $price->text3 = $request->text3;
    $price->text4 = $request->text4;
    $price->text5 = $request->text5;
    $price->text6 = $request->text6;
    $price->text7 = $request->text7;
    $price->text8 = $request->text8;
    $price->save();
    return redirect()->back();
  }
   //__Delete Method__//
   public function destroy($id)
   {
    price::destroy($id);
       return redirect()->back();
   }
}
