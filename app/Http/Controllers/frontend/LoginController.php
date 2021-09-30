<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class LoginController extends Controller
{
    function login()
    {
        return view( 'frontend.login' );
    }

    function register( Request $request )
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required | email',
            'password'=>'required',
            'confirm_pass'=>'required'
        ]);

        if( $request->password != $request->confirm_pass )
            return back()->with( 'fail', 'passwords didnot match' );

        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = Carbon::now();
        $query = DB::table('user')->insert($data);

        if( $query )
            return back()->with( 'success', 'Successfully registered' );
        else
            return back()->with( 'fail', 'Something went wrong' );
    }
}
