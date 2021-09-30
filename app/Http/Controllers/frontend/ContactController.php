<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ContactController extends Controller
{
     public function contact_view() {
         return view('frontend.contact');
     }
     function save(Request $request)
    {
        //validate
        $request->validate([
           'name'=>'required',
           'email'=>'required',
          
           'message'=>'required'
        ]);

            $data = array();
    $data['contact_name'] = $request->name;
    $data['contact_email'] = $request->email;
     $data['contact_message'] = $request->message;

       $insert = DB::table('contact')->insert( $data );

       
        return redirect()->back()->with('success','form submitted successfuly');
}
}