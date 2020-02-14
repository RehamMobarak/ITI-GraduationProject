<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profiles.index');
    }    


    
    public function edit()
    {
          return view('profiles.edit');
           
    }
    
    
    public function update(Request $request)
    {   
        $user_id =  Auth::id();
        $user_profile = User::find($user_id);

        if (!isset($request->image)) {
            $image =$user_profile->image;
        }else{
        $image = $request->file('image')->store('images');
        $request->image->move(public_path('images'), $image); 
        }

        if (!isset($request->background_img)) {
            $background =$user_profile->background_img;
        }else{
        $background = $request->file('background_img')->store('images');
        $request->background_img->move(public_path('images'), $background); 
        }

        
        $user_profile->update([
           'first_name'=>$request->first_name,
           'last_name'=>$request->last_name,
           'email'=>$request->email,
           'country'=>$request->country,
           'birthdate'=>$request->birthdate,
           'image'=>$image,
           'background_img'=>$background,
           'gender'=>$request->gender
           ]);

           $request->user()->fill([
            'password' => Hash::make($request->password)
           ])->save();

        return redirect()->route('profiles.index')->with('UpdateProfileImg','profile updated successfully !!');
    }



}