<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class LoginController extends Controller
{
    function login_view(){
        return view('backend.login');
    }

    function login_post( Request $request )
    {
        // return $request->input();
        $request->validate([
            'email'=>'email | required',
            'password'=>'required'
        ]);

        $data = DB::table('admin')->get()->first();

        if( $request->password != $data->admin_password )
            return back()->with( 'fail', 'holonA' );

        $request->session()->put('LoggedUser',$data->admin_id);
        return back()->with( 'success', 'hye gche' );
    }
}

