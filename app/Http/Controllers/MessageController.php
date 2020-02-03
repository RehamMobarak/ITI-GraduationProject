<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class messageController extends Controller
{
    public function create(Request $request)
    {
        Message::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,

        ]);
        return redirect()->route('contactus')->with('contactmessage', "Thanks " . $request->first_name . " " . ' Your msg is sent!');
    }


    public function index()
    {
        return view('admin.view_msgs',[
            'msgs'=> Message::all()
            
        ]);
        
    }

    public function show($id)
    {
        Message::find($id);
    }
}