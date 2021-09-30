<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class TourController extends Controller
{
     public function package_view() {
         return view('frontend.package');
     }

     public function tour_detail_view($id) {
         $package_detail = DB::table('package_details')
            ->where('package_id',$id)
            ->get();

        $package = DB::table('package')
            ->leftJoin('destination', 'package.destination', '=', 'destination.destination_id')
            ->leftJoin('tour_category', 'package.tour_category', '=', 'tour_category.tour_category_id')
            ->where('package_id',$id)
            ->get()->first();
           
        $reviews = DB::table('reviews')
                   ->where('package_id', $id)
                   ->where('reviews_active', 1)
                   ->orderBy( 'reviews_id', 'desc' )
                   ->get();

            return view('frontend.tour-detail', ['package'=>$package, 'package_detail'=>$package_detail, 'id'=>$id, 'reviews'=>$reviews, 'id'=>$id]);
     }



      function review(Request $request)
    {
        //validate
        $request->validate([
            'id'=>'required',
           'name'=>'required',
           'email'=>'required|email',
            'rate'=>'required',
            'title'=>'required',
           'comment'=>'required'
        ]);

        $data = array();
        $data['package_id'] = $request->id;
        $data['reviews_name'] = $request->name;
        $data['reviews_email'] = $request->email;
        $data['reviews_title'] = $request->title;
        $data['reviews_rate'] = $request->rate;
        $data['reviews_comment'] = $request->comment;
        $data['reviews_active'] = 0;
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = Carbon::now();

        $insert = DB::table('reviews')->insert( $data );
        
        return redirect()->back()->with('success','review submitted successfuly');
}
}
