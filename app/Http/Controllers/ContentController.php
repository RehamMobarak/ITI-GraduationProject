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
            'categories' => $category,


        ]);
    }

    public function view($content)
    {

        return view('contents.view', [
            'course' => Content::find($content),

        ]);
    }
    public function ModifyContent(Request $request)
    {
        if (!isset($request->con_id)) {

            return redirect()->route('ModifyMain')
                ->with('NoSelectedContentError', 'There is no selected content to modify!');
        } else { 
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


            if (!isset($request->content_name) && !isset($request->content_details) && !isset($request->links) && !isset($request->image)) {
                return redirect()->route('ModifyMain')
                    ->with('modifyContentError', 'Nothing has changed to modify!');
            } else {
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
    }

    //delete the content
    public function DeleteIndex()
    {
        return view('admin.control.delete.delete_content_index', [
            'contents' => Content::all(),
        ]);
    }

    public function delete($content_id)
    {
        $row = Content::find($content_id);
        $row->delete();
        return redirect()->back()->with('deleteContentmessage', $row['content_name'] . "" . 'deleted Successfully !');
    }
}
