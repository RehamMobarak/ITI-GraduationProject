<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mindmap;

class MindmapsController extends Controller
{
    
 
    public function mindmap()
    {
        return view('mindmaps.mindmaps',[
            'mindmaps'=>Mindmap::all(),
        ]);
    }

   public function index()
   {
      $mindmap = Mindmap::all();
    //  dd($mindmap);
      return view('mindmaps.index',[
          'mindmaps'=>Mindmap::all(),
      ]);
   }


   public function add()
   {
       return view('mindmaps.add');
   }

 
   public function store(Request $request)
   {
       
           $path = $request->file('image')->store('images');
           $request->image->move(public_path('images'), $path);
       

           Mindmap::create([
           'name' => $request->name,
           'image' => $path,
       ]);

       return redirect()->route('mindmap.index')->with('AddMindmapMsg', $request->name . " " . 'Mindmap added !!');
   }

   public function edit($id)
    {
        return view('mindmaps.edit',[
            'mindmap'=>Mindmap::find($id),
        ]);  
           
    }

    public function update(Request $request,$id)
    {   

        $row=Mindmap::find($id);
        if (!isset($request->image)) {
            $path =$row->image;
        } else {
        $path = $request->file('image')->store('images');
        $request->image->move(public_path('images'), $path);
        }
        Mindmap::where('id',$id)
        ->update([
            'name'=>$request->name,
            'image' => $path,
            ]);
        return redirect()->route('mindmap.index')->with('UpdateMindmapMsg','Mindmap Updated Successfully !!');
    }

 

    Public function delete($id)
    {
       $row = Mindmap::find($id);
       $row->delete();
       return redirect()->back()->with('deleteMindmapmessage','mindmap deleted successfully !!');
 
    }
   


}
