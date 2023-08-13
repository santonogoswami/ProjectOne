<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
 //index Method__//
     public function index(){
        $data = contact::all();
        return view('Details.Contact.index', compact('data'));
    }
    //__create Method__//
public function create(){
    return view('Details.Contact.create');
}

//__Store Method__//
public function store(Request $request){
    $request->validate([
        'number' => 'required',
        'email' => 'required',
        'address' => 'required' ,
    ]);
    $contact=new contact;
    $contact->number = $request->number;
    $contact->email = $request->email;
    $contact->address = $request->address;

    $contact->save();
    return redirect()->back();
  }
  //__ Edit Method__//
public function edit($id){
    $data=contact::find($id);
    return view('Details.Contact.edit', compact('data'));
    }
    //__Update Method__//
public function update(Request $request,$id){
    $request->validate([
        'number' => 'required',
        'email' => 'required',
        'address' => 'required',

    ]);
    $contact=contact::find($id);
    $contact->number = $request->number;
    $Projects->email = $request->email;
    $Projects->address = $request->address;
   
    $contact->save();
    return redirect()->back();
  }
   //__Delete Method__//
   public function destroy($id)
   {
    contact::destroy($id);
       return redirect()->back();
   }
}
