<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use App\Category;


class ContentController extends Controller
{    
    public function index($cat_id)
    {
         $category = Category::find($cat_id);
         
        return view('contents.index', [
            'contents' => $category->contents,
            'categories' =>$category,
              
           
        ]);
    }

    public function view($content)
    { 

        return view('contents.view',[
            'course'=> Content::find($content),
            
        ]);
    }

     //delete the content
     public function DeleteIndex()
     {
       return view('admin.control.delete.delete_content_index',[
          'contents'=> Content::all(),
          ]);   
  
     }
  
     public function delete($content_id)
     {
        $row = Content::find($content_id);
        $row->delete();
        return redirect()->back()->with('deleteContentmessage',$row['content_name']."".'deleted Successfully !');
  
     }
    

}
