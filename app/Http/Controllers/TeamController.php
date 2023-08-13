<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
   
        //index Method__//
        public function index(){
          $data = Team::all();
          return view('Details.Team.index', compact('data'));
      }
      //__create Method__//
         public function create(){
         return view('Details.Team.create');
            }
    //__Store Method__//
public function store(Request $request){

    $request->validate([
        'name' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
       'designation' => 'required', 
       'link' => 'required',
    ]);
    $Team=new Team;
    $Team->name = $request->name;
    // image code start
    $image= time().'.'. $request->image->extension();
    $request->image->move(public_path('Team'), $image);
    $path = "/Team/".$image;
    $Team->image = $path;
    // image code End
    
    $Team->designation = $request->designation;
    $Team->link = $request->link;
    $Team->save();
    return redirect()->back();
  }
//__ Edit Method__//
public function edit($id){
    $data=Team::find($id);
    return view('Details.Team.edit', compact('data'));
    }
        //_Update Method__//
        public function update(Request $request, $id)
        {
            $request->validate([
                'name' => 'required',
               'designation' => 'required', 
               'link' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            ]);
            $Team = Team::find($id);
        $Team->name = $request->name;
       $Team->designation = $request->designation;
       $Team->link = $request->link;

            // Image code start
            if ($request->hasFile('image')) {
                $image = time().'.'. $request->image->extension();
                $request->image->move(public_path('Team'), $image);
                $path = "/Team/".$image;
                $Team->image = $path;
            }
            // Image code end

            $Team->save();

            return redirect()->back();
        }

   //__Delete Method__//
   public function destroy($id)
   {

    Team::destroy($id);
       return redirect()->back();
   }
}
