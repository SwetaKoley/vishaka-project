<?php
namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class BookingController extends Controller
{
     public function booking_view( Request $request )
     {
        $data = array();
        $data =  $request->session()->all();
        $id = $data['id'];

        $package = DB::table( 'package' )
                   ->leftJoin( 'destination', 'package.destination', '=', 'destination.destination_id' )
                   ->where( 'package_id', $id )
                   ->get()->first();

        $total_price = ( $package->price_for_adult * $data['adult'] ) + ( $package->price_for_children * $data['children'] );
        $arrival_date = date('M j, Y', strtotime($package->arrival_date));
        $departure_date = date('M j, Y', strtotime($package->arrival_date.' + '.$package->number_of_days.' days'));

        $name = $package->package_name;
        $destination = $package->destination_name;

        return view('frontend.booking', 
            ['data'=>$data, 
              'total_price'=>$total_price,
              'adult_price'=>$package->price_for_adult,
              'children_price'=>$package->price_for_children,
              'arrival_date'=>$arrival_date,
              'departure_date'=>$departure_date,
              'name'=>$name,
              'destination'=>$destination,
          ]);
     }

    function book_post( Request $request )
    {
    $request->validate([
        'id'=>'required',
        'name'=>'required',
        'phone'=>'required | min:10 | max:10 | regex:/[0-9]/',
        'email'=>'required | email',
        'city'=>'required',
        'children'=>'required',
        'adult'=>'required'
    ]);

    $data = array();
    $data['id'] = $request->id;
    $data['name'] = $request->name;
    $data['phone'] = $request->phone;
    $data['email'] = $request->email;
    $data['city'] = $request->city;
    $data['children'] = $request->children;
    $data['adult'] = $request->adult;

    $request->session()->put( $data );
    return redirect()->route( 'frontend.booking_view' );
    }
}
