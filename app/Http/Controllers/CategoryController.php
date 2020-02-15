<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category; 
use App\Content;
use App\Career;
use App\category_content;



class CategoryController extends Controller
{


    public function index($career_id)
    {
        $career = Career::find($career_id);
        return view('categories.index', [
            'categories' => $career->categories


        ]);
    }
    public function ModifyCategory(Request $request)
    {
        if (!isset($request->cat_id)) {

            return redirect()->route('ModifyMain')
                ->with('NoSelectedCategoryError', 'There is no selected category to modify!');
        } else {
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
            } else {
                $category->update(
                    [
                        'category_name' => $categoryName,
                        'image' => $path
                    ]
                );

                return redirect()->route('ModifyMain')->with('categorymodifymessage', 'Category Modified Successfully !');
            }
        }
    }
    public function deleteContentIndex()
    {
        return view('admin.control.modify.modify_category_assignments_index', [
            'categories' => Category::all(),
        ]);
    }

 
    public function deleteContentRelation($categoryId)
    {

        $contentsArray = category_content::where('category_id', '=', $categoryId)->get();

        $contentNamesArray = [];
        $rowID;
        foreach ($contentsArray as $key => $value) {
            $rowID = $value['id'];
            $contentNamesArray[$rowID] = Content::find($value['content_id'])->content_name;
        }


        return view('admin.control.modify.modify_category_assignments', [

            'content_names' => $contentNamesArray,

        ]);
    }


    public function deleteCategoryContent($rowId)
    {
        $row = category_content::find($rowId);
        $row->delete();
        return redirect()->back()->with('deleteAssignedContentmessage', 'Record deleted Successfully !');
    }


    //delete the category
    public function DeleteIndex()
    {
        return view('admin.control.delete.delete_category_index', [
            'categories' => Category::all(),
        ]);
    }

    public function delete($category_id)
    {
        $row = Category::find($category_id);
        $row->delete();  
        return redirect()->back()->with('deleteCategorymessage', $row['category_name'] . " " . ' deleted Successfully !');
    }
}
