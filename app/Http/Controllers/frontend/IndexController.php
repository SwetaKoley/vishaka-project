<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class IndexController extends Controller
{
     public function index_view() {
        $testimonials = DB::table( 'testimonials' )->get();
        $slider = DB::table( 'slider' )->get();
        $partners = DB::table( 'partners' )->get();
        return view('frontend.index', ['testimonials' => $testimonials, 'slider' => $slider, 'partners' => $partners] );
     }

   
}
