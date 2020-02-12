<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Career;
use App\Category;
use App\Content;
use App\career_category;
use App\category_content;

class CareerController extends Controller
{
    public function index()
    {
        return view('admin.control.control');
    }

    //////////////////
    //add new career//
    /////////////////


    public function add()
    {
        return view('admin.control.add_career', [
            'jobs' => Career::all(),
            'categories' => Category::all(),
            'contents' => Content::all(),
        ]);
    }

    //store career
    public function storeCareer(Request $request)
    {
        Career::create([
            'job_name' => $request->job_name,
        ]);

        return redirect()->route('control.Add')->with('careermessage', $request->job_name . " " . ' Career added!');
    }


    //store category
    public function storeCategory(Request $request)
    {
        // dd($request->image);
        if (!isset($request->image)) {
            $path = "/images/avatar.png";
        } else {
            $path = $request->file('image')->store('images');
            $request->image->move(public_path('images'), $path);
        }

        Category::create([
            'category_name' => $request->category_name,
            'image' => $path,
        ]);

        return redirect()->route('control.Add')->with('categorymessage', $request->category_name . " " . ' Category added!');
    }



    //store content
    public function storeContent(Request $request)
    {
        if (!isset($request->image)) {
            $path = "/images/avatar.png";
        } else {
            $path = $request->file('image')->store('images');
            $request->image->move(public_path('images'), $path);
        }

        Content::create([
            'content_name' => $request->content_name,
            'content_details' => $request->content_details,
            'image' => $path,
            'links' => $request->links
        ]);

        return redirect()->route('control.Add')->with('contentmessage', $request->content_name . " " . ' Content added!');
    }

    ///////////////////////////////////////
    //assign career - category - content//
    /////////////////////////////////////


    //choose from the drop dwon menu and store in the input

    public function AssignCareerCategory(Request $request)
    {
        //dd($request);
        career_category::create(
            [
                'career_id' => $request->career_id,
                'category_id' => $request->career_category_id,
            ]
        );
        return redirect()->route('control.Add')->with('careercategorymessage', $request->career_id . ' assigned to' . $request->career_category_id);
    }


    public function AssignCategoryContent(Request $request)
    {
        //dd($request);
        category_content::create(
            [
                'category_id' => $request->category_id,
                'content_id' => $request->category_content_id,
            ]
        );
        return redirect()->route('control.Add')->with('categorycontentmessage', $request->category_id . ' assigned to' . $request->category_content_id);
    }


    ////////////////////////////////////////////////////
    //        edit career - category - content       //
    //////////////////////////////////////////////////



    public function edit()
    {
        return view('admin.control.edit');
    }


    public function modifyMainTables()
    {
        return view('admin.control.modify_main_tables', [
            'jobs' => Career::all(),
            'categories' => Category::all(),
            'contents' => Content::all(),
        ]);
    }


    public function ModifyRelationshipTables()
    {
        return view('admin.control.modify_relationship_tables');
    }

    public function ModifyCareer(Request $request)
    {
        $id = $request->job_id;
        $career = Career::find($id);

        if (!isset($request->job_name)) {
            $jobName = $career->job_name;
            return redirect()->route('ModifyMain')
                ->with('modifyCareerError', 'Nothing has changed to modify!');

        }else{
        $career->update(
            ['job_name' => $request->job_name,]
        );

        return redirect()->route('ModifyMain')->with('careerModifymessage', 'Career Modified Successfully !');
        }


    }



    public function ModifyCategory(Request $request)
    {
        $id = $request->cat_id;
        $category = Category::find($id);


        if (!isset($request->category_name)) {
            $categoryName = $category->category_name;
        } else {
            $categoryName = $request->category_name;
        }

        if (!isset($request->image)) {
            $path = $category->image;
        } else {
            $path = $request->file('image')->store('images');
            $request->image->move(public_path('images'), $path);
        }

        if (!isset($request->category_name) && !isset($request->image)) {
            return redirect()->route('ModifyMain')
                ->with('modifyCategoryError', 'Nothing has changed to modify!');
        }else{
            $category->update(
            [
                'category_name' => $categoryName,
                'image' => $path
            ]
        );

        return redirect()->route('ModifyMain')->with('categorymodifymessage', 'Category Modified Successfully !');
        }


        
    }


    public function ModifyContent(Request $request)
    {

        $id = $request->con_id;
        $content = Content::find($id);

        if (!isset($request->content_name)) {
            $contentName = $content->content_name;
        } else {
            $contentName = $request->content_name;
        }

        if (!isset($request->content_details)) {
            $contentDetails = $content->content_details;
        } else {
            $contentDetails = $request->content_details;
        }

        if (!isset($request->links)) {
            $contentLinks = $content->links;
        } else {
            $contentLinks = $request->links;
        }

        if (!isset($request->image)) {
            $path = $content->image;
        } else {
            $path = $request->file('image')->store('images');
            $request->image->move(public_path('images'), $path);
        }


        if (!isset($request->content_name) && !isset($request->content_details)&&!isset($request->links) && !isset($request->image)) {
            return redirect()->route('ModifyMain')
                ->with('modifyContentError', 'Nothing has changed to modify!');
        }else{
            $content->update(
                [
                    'content_name' => $contentName,
                    'content_details' => $contentDetails,
                    'links' => $contentLinks,
                    'image' => $path
                ]
            );
    
            return redirect()->route('ModifyMain')->with('contentmodifymessage', 'Content Modified Successfully !');
       }
    } 
    

    public function deleteCategoryIndex()
    {
        return view('admin.control.modify_career_assignments_index', [
            'jobs' => Career::all()
        ]);
    }



    public function deleteCategoryRelation($careerId)
    {
        $catsArray = career_category::where('career_id', '=', $careerId)->get();

        $catNamesArray = [];
        $rowID;
        foreach ($catsArray as $key => $value) {
            $rowID = $value['id'];
            $catNamesArray[$rowID] = Category::find($value['category_id'])->category_name;
        }


        return view('admin.control.modify_career_assignments', [
            'career_categories' => $catsArray,
            'category_names' => $catNamesArray,

        ]);
    }


    public function deleteCareerCategory($rowId)
    {
        $row = career_category::find($rowId);
        $row->delete();
        return redirect()->back()->with('deleteAssignedCategorymessage', 'Record deleted Successfully !');
    }
    //delete the career
    public function DeleteIndex()
    {
        return view('admin.control.delete.delete_career_index', [
            'jobs' => Career::all()
        ]);
    }

    public function delete($career_id)
    {
        $row = Career::find($career_id);
        $row->delete();
        return redirect()->back()->with('deleteCareermessage', $row['job_name'] . "" . 'deleted Successfully !');
    }
}
