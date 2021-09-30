@extends('frontend.master')
@section('content')
<!-- Hero section -->
<section class="hero-cnt">
    <h1>Booking</h1>
</section>

<!-- Main Section -->
<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="travel-info">
                  <h4>TRAVEL INFORMATION</h4>
                  <hr>
                 <div class="row">
                   <div class="col-md-3 col-12">
                    <img src="img/destination-1-1.png" alt="" class="img-fluid">
                   </div>
                   <div class="col-md-9 col-12">
                     <h6>{{ $name }}</h6>
                     <p class="travel-name"><i class="fas fa-map-marked-alt"></i>&nbsp {{ $destination }}</p>
                   </div>
                 </div>
                 <div class="arrival-info">
                 <div class="row">
                  <div class="col-md-9 col-12">
                    <div class="row">
                      <div class="col-5">
                        <p>ARRIVAL DATE <br> <span>{{$arrival_date}}</span><br>10:00AM - 2:00PM</p>
                      </div>
                      <Div class="col-2">
                          <i class="fas fa-long-arrow-alt-right arrival-icon"></i>
                      </Div>
                      <div class="col-5">
                        <p>DEPARTURE DATE <br> <span>{{$departure_date}}</span><br>10:00AM - 2:00 PM</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-12 adult-sec">
                      <p class="adults">{{ $data['adult'] }} Adults | {{ $data['children'] }} Childrens</p>
                  </div>
                 </div>
                </div>
                <div class="customer-info">
                  <h5 class="m-0 p-0">BUSINESS CLASS FACILITIES</h5>
                  <p>2 Adults</p>
                  <hr>
                  <h6 class="m-0 p-0">Price Includes :</h6>
                  <div class="mx-4 mt-3">
                  <ul>
                    <li>No meals included</li>
                    <li>CUG_MMTRO</li>
                  </ul>
                </div>
                  <p class="free-cancellation mt-3"><i class="fas fa-exclamation-circle"></i> Free Cancellation till 12 hrs before check in</p>
                </div>
             <div class="customer-info">
              <h5 class="m-0 p-0">IMPORTANT INFORMATION</h5>
              <hr>
              <h6 class="m-0 p-0">Resort Rules :</h6>
              <div class="mx-4 mt-3">
                <ul>
                  <li> Suitable for children</li>
                  <li>Pets are not allowed.</li>
                  <li>Unmarried couples allowed</li>
                  <li>Bachelors allowed</li>
                </ul>
              </div>
            </div>
        
            </div>
            <div class="travel-info gap">
              <form class="tour-list">
                <h4 class="pb-4">Guest Details</h4>
                <hr>
                <div class="row
                        align-items-end">
                  <div class="col-6">
                    <div class="inputs-filed
                        mt-30"> <input type="text" placeholder="Name" id="arrival-date" value="{{ $data['name'] }}" readonly> </div>
                  </div>
                  <div class="col-6">
                    <div class="inputs-filed mt-30">
                      <input type="tel" placeholder="Phone Number" value="{{ $data['phone'] }}" id="arrival-date" readonly> </div>
                  </div>
                  <div class="col-6">
                    <div class="inputs-filed mt-30"> <input type="email" placeholder="E-mail Address" value="{{ $data['email'] }}" id="departure-date" readonly> </div>
                  </div>
                  <div class="col-6">
                    <div class="inputs-filed mt-30"> <input type="text" placeholder="City" value="{{ $data['city'] }}" id="arrival-date" readonly> </div>
                  </div>
                  <div class="col-6">
                    <div class="inputs-filed mt-30"> <input type="text" placeholder="No. of Adults" value="{{ $data['adult'] }}" id="arrival-date" readonly> </div>
                  </div>
                  <div class="col-6">
                    <div class="inputs-filed mt-30"> <input type="text" placeholder="No. of Children"
                        value="{{ $data['children'] }}" id="arrival-date" readonly> </div>
                  </div>
                </div>
              </form>
          </div>
      </div>
      <div class="col-lg-4 col-md-12">
        <div class="travel-info">
          <div class="customer-info">
           <h5 class="m-0 p-0">PRICE BREAK-UP</h5>
           <hr>
            <div class="container">
              <div class="row mt-3">
                <div class="col-8">
                  <p class="pay-info">Price for Adults</p>
                </div>
                <div class="col-4">
                  <p>₹{{ $adult_price }} x {{ $data['adult'] }}</p>
                </div>
              </div>
              <hr class="m-0">
              <div class="row mt-3">
                <div class="col-8">
                  <p class="pay-info">Price for Childrens</p>
                </div>
                <div class="col-4">
                  <p>₹{{ $children_price }} x {{ $data['children'] }}</p>
                </div>
              </div>
            </div>
            <hr>
            <div class="row mt-3">
              <div class="col-8">
                <p class="pay-info"><b>Total Amount</b></p>
              </div>
              <div class="col-4">
                <p class="text-danger"><b>₹{{ $total_price }}</b></p>
              </div>
            </div>
         </div>
         </div>
         <div class="travel-info gap">
          <div class="customer-info">
           <h5 class="m-0 p-0">DEAL CODES</h5>
           <p class="coupon-info">No coupon codes applicable for this property.</p>
           <form class="my-3">
              <input type="text" class="form-control" id="inputPassword2" placeholder="Have a Coupon Code">  
            <button type="submit" class="book-now my-2">Apply</button>
            </div>
          </form>
         </div>
         <div class="travel-info gap">
          <div class="customer-info">
           <h5 class="m-0 p-0">WHY <b>SIGN UP</b> OR <b>LOGIN</b></h5>
           <hr>
           <div class="mx-4 mt-3">
             <ul>
               <li>Get access to Secret Deals</li>
               <li>Book Faster - we’ll save & pre-enter your details</li>
               <li>Manage your bookings from one place</li>
             </ul>
           </div>
         </div>
         </div>
         <div class="travel-info gap">
          <div class="customer-info">
           <h5 class="m-0 p-0">TRAVEL SAFE WITH TRIP INSURANCE</h5>
           <hr>
           <h6 class="m-0 p-0">All-in-one insurance, incl COVID19</h6>
           <div class="mx-4 mt-3">
             <ul>
               <li>₹ 3 lakh hospital expenses cover for any illness including COVID19</li> 
                <li>₹ 1 lakh cover for home burglary during travel.</li>
             </ul>
           </div>
         </div>
         </div>
         </div>
    </div>
      <p class="pay">By proceeding, I agree to MakeMyTrip’s <span>User Agreement, Terms of Service</span> and <span>Cancellation & Property Booking Policies</span></p>
      <div class="row">
        <div class="col-md-6 col-12">
          <button class="book-now">Pay Now</button>
        </div>
        <div class="col-md-6"></div>
     </div>
  </div>
</section>
@endsection