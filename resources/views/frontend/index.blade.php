@extends('frontend.master')
@section('content')

      <!-- Hero Section -->
        <section class="banner-area">
                <div class="all-banner-slide owl-carousel">
                    @foreach($slider as $slider)
                    <div class="single-banner-slide">
                      <img src="{{ asset('frontend/img/'.$slider->slider_image)}}" alt=""  class="img-fluid position-relative">
                      <div class="position-absolute shifft">
                        <span>{{$slider->slider_title}}</span>
                        <h2>{{$slider->slider_heading}}</h2>
                        <p>{{$slider->slider_content}}</p>
                        <a href="#" class="btn-1">Discover Now</a>
                      </div>
                    </div>
                    @endforeach
                </div>
        </section>
        
        <!-- form-->
        <section class="booking-form boxed-layout">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-11">
                        <div class="booking-form-inner">
                            <form action="#">
                                <div class="row align-items-end">
                                    <div class="col-lg-3 col-md-6">
                                        <div class="inputs-filed mt-30">
                                            <label for="arrival-date">Where to</label>
                                            <div class="icon"><i class="fas fa-search-location"></i></div>
                                            <input type="text" placeholder="Australia" name="arrival-date"
                                                id="arrival-date">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="inputs-filed mt-30">
                                            <label for="departure-date">When</label>
                                            <div class="icon"><i class="fas fa-calendar-alt"></i></div>
                                            <input type="date" placeholder="30th march 2020" name="departure-date"
                                                id="departure-date">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="inputs-filed mt-30">
                                            <label for="guests">Type</label>
                                            <select name="guests" id="guests">
                                                <option value="" disabled selected>Select From Here</option>
                                                <option value="1">Adventure</option>
                                                <option value="2">Wildlife</option>
                                                <option value="4">Sightseeing</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="inputs-filed mt-30">
                                            <button type="submit">check availability</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Category -->
        <section class="Category">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 m-0 p-0">
                        <div class="d-flex">
                        <div class="col-4 p-0 m-0">
                            <div class="icon-bg">
                                <i class="fas fa-tags icon-cat"></i>
                            </div>
                        </div>
                        <div class="col-8 cat-para">
                            <h6>Competetive Pricing</h6>
                            <p class="p-0 m-0">With 500+ suppliers and the purchasing power of 300 million members</p>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4 col-md-12 m-0 p-0">
                        <div class="d-flex">
                        <div class="col-4 p-0 m-0">
                            <div class="icon-bg">
                                <i class="fas fa-award icon-cat"></i>
                            </div>
                        </div>
                        <div class="col-8 cat-para">
                            <h6>Award Winning Service</h6>
                            <p class="p-0 m-0">Fabulous Travel worry free knowing that we're here if you need us, 24 hours a day</p>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4 col-md-12 m-0 p-0">
                        <div class="d-flex">
                        <div class="col-4 p-0 m-0">
                            <div class="icon-bg">
                                <i class="fas fa-globe-americas icon-cat"></i>
                            </div>
                        </div>
                        <div class="col-8 cat-para">
                            <h6>Worldwide Coverage</h6>
                            <p class="p-0 m-0">1,200,000 hotels in more than 200 countries and regions & flights to over 5,000 citites.</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>

        
        <!-- service -->
        <section class="service">
            <p>Destination lists</p>
            <h2>Go Exotic Places</h2>
            <div class="container">
                <div class="row">
                <div class="col-md-3 col-12 my-2">
                    <div class="box5">
                        <img src="img/destination-1-1.png" alt="" class="img-fluid">
                        <div class="box-content">
                            <h3 class="title">AUSTRALIA</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 my-2">
                    <div class="box5">
                        <img src="img/destination-1-2.png" alt="" class="img-fluid">
                        <div class="box-content">
                            <h3 class="title">SPAIN</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12 my-2">
                    <div class="box5">
                        <img src="img/destination-1-3.png" alt="" class="img-fluid">
                        <div class="box-content">
                            <h3 class="title">THAILAND</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 my-2">
                    <div class="box5">
                        <img src="img/destination-1-4.png" alt="" class="img-fluid">
                        <div class="box-content">
                            <h3 class="title">AFRICA</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 my-2">
                    <div class="box5">
                        <img src="img/destination-1-5.png" alt="" class="img-fluid">
                        <div class="box-content">
                            <h3 class="title">SWTZERLAND</h3>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>


    <!--About-->
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <img src="img/about-us-1.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-1"></div>
                <div class="col-lg-5 col-md-12 mt-md-5 mt-0">
                    <h6>Get to know us</h6>
                    <h2>Plan Your Trip with Trevily</h2>
                    <p>There are many variations of passages of available but the majority have suffered alteration in some form, by injected hum randomised words which don't look even slightly.</p>
                    <ul>
                        <li><i class="fas fa-check-circle icon-abt"></i>Invest in your simply neighborhood</li>
                        <li><i class="fas fa-check-circle icon-abt"></i>Support people in free text extreme need</li>
                        <li><i class="fas fa-check-circle icon-abt"></i>Largest global industrial business community</li>
                    </ul>
                    <a href="#" class="abt-btn">Book Now</a>
                </div>
            </div>
        </div>
    </section>


          <!-- Blog -->
          <section class="bloog">
            <p class="bloog-para">Featured Tour</p>
            <h2>Most Popular Tours</h2>
          <div class="wrapper">
              <div class="carousel">
                <div>
                  <div class="card">
                    <div class="card-header">
                      <img src="img/popular-tours__img-1.jpg">
                    </div>
                    <div class="card-body">
                      <div class="card-content">
                          <ul type="none">
                              <li><i class="fas fa-star text-warning"></i>&nbsp 8.0 superb</li>
                          </ul>
                          <h6>Discover Depth Of Beach</h6>
                          <p><span>₹1860</span> / Per Person</p>
                          <div class="btn-card">
                              <ul>
                                  <li>3 Days</li>
                                  <li>12+</li>
                                  <li>LOS ANGELES</li>
                              </ul>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>    
                <div>
                  <div class="card">
                    <div class="card-header">
                      <img src="img/popular-tours__img-2.jpg">
                    </div>
                    <div class="card-body">
                        <div class="card-content">
                            <ul type="none">
                                <li><i class="fas fa-star text-warning"></i>&nbsp 8.0 superb</li>
                            </ul>
                            <h6>Discover Depth Of Beach</h6>
                            <p><span>₹1860</span> / Per Person</p>
                            <div class="btn-card">
                                <ul>
                                    <li>3 Days</li>
                                    <li>12+</li>
                                    <li>LOS ANGELES</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="card">
                    <div class="card-header">
                      <img src="img/popular-tours__img-3.jpg">
                    </div>
                    <div class="card-body">
                        <div class="card-content">
                            <ul type="none">
                                <li><i class="fas fa-star text-warning"></i>&nbsp 8.0 superb</li>
                            </ul>
                            <h6>Discover Depth Of Beach</h6>
                            <p><span>₹1860</span> / Per Person</p>
                            <div class="btn-card">
                                <ul>
                                    <li>3 Days</li>
                                    <li>12+</li>
                                    <li>LOS ANGELES</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                  </div>  
                </div>
                <div>
                  <div class="card">
                    <div class="card-header">
                      <img src="img/popular-tours__img-4.jpg">
                    </div>
                    <div class="card-body">
                        <div class="card-content">
                            <ul type="none">
                                <li><i class="fas fa-star text-warning"></i>&nbsp 8.0 superb</li>
                            </ul>
                            <h6>Discover Depth Of Beach</h6>
                            <p><span>₹1860</span> / Per Person</p>
                            <div class="btn-card">
                                <ul>
                                    <li>3 Days</li>
                                    <li>12+</li>
                                    <li>LOS ANGELES</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                  </div> 
                </div>
                <div>
                  <div class="card">
                    <div class="card-header">
                      <img src="img/slide4.jpg">
                    </div>
                    <div class="card-body">
                        <div class="card-content">
                            <ul type="none">
                                <li><i class="fas fa-star text-warning"></i>&nbsp 8.0 superb</li>
                            </ul>
                            <h6>Discover Depth Of Beach</h6>
                            <p><span>₹1860</span> / Per Person</p>
                            <div class="btn-card">
                                <ul>
                                    <li>3 Days</li>
                                    <li>12+</li>
                                    <li>LOS ANGELES</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>  
              </div>
              </div>
            </section>


        <!-- Booking -->       
          <section class="book-bg">
              <div class="container">
                  <div class="row mt-5">
                      <div class="col-md-8 col-12">
                        <a id="play-video" class="video-play-button" href="#">
                            <span></span>
                          </a>
                          <div id="video-overlay" class="video-overlay">
                            <a class="video-overlay-close">&times;</a>
                          </div>
                        <h6 class="book-head ">Are you ready to travel?</h6>
                        <p class="book-para">Tevily is a World Leading Online Tour Booking Platform</p>
                      </div>
                      <div class="col-md-4 col-12">
                        <div class="row">
                            <div class="col-6">
                                <div class="item-book">
                                    <div class="text-center">
                                    <i class="fas fa-parachute-box item-icon"></i>
                                    </div>
                                    <h6>Paragliding Tours</h6>
                                </div>
                            </div>
                              <div class="col-6">
                                <div class="item-book">
                                    <div class="text-center">
                                        <i class="fas fa-paw item-icon"></i>
                                    </div>
                                    <h6>Wildlife Tours</h6>
                                </div>
                              </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-6">
                                <div class="item-book">
                                    <div class="text-center">
                                        <i class="fas fa-hiking item-icon"></i>
                                        </div>
                                    <h6>Adventure Tours</h6>
                                </div>
                            </div>
                               <div class="col-6">
                                <div class="item-book">
                                    <div class="text-center">
                                        <i class="fas fa-swimmer item-icon"></i>
                                        </div>
                                    <h6>Underwater Tours</h6>
                                </div>
                               </div>
                        </div>
                      </div>
                  </div>
              </div>
          </section>

          <!-- Our Partner -->
          <section class="partners">
              <div class="shape" style="background-image: url(./img/brand-one-shape.png);"></div>
              <div class="container">
                  <div class="row">
                      <div class="col-md-3 col-12 title-partner">
                          <h6>Our Partners</h6>
                      </div>
                      <div class="col-md-1"></div>
                      <div class="col-md-8">
                        <section class="client">
                            <div class="container">
                                <div class="row">
                                    <div class="carousel-client">
                                        @foreach( $partners as $partner )
                                        <div class="slide"><img src="{{ asset( 'frontend/img/'.$partner->partner_image ) }}"></div>
                                        @endforeach
                                        <div class="slide"><img src="./img/logo-02.png"></div>
                                        <div class="slide"><img src="./img/logo-03.png"></div>
                                        <div class="slide"><img src="./img/logo-04.png"></div>
                                        <div class="slide"><img src="./img/logo-05.png"></div>
                                        <div class="slide"><img src="./img/logo-06.png"></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                      </div>
                  </div>
              </div>
          </section>


          <!-- Testimonial -->
          <section class="test">
            <p class="test-para">Testimonials & reviews</p>
            <h2>What They’re Saying</h2>
            <div class="testimonials">
                <!-- CARD 1 START-->
                @foreach($testimonials as $testimonial)
                <div class="card">
                  <div class="layer"></div>
                  <div class="content">
                    <p>
                        {{$testimonial->testimonials_comment}}</p>
                    <div class="image">
                      <img src="{{ asset('frontend/img/'.$testimonial->testimonials_image)}}" alt="">
                    </div>
                    <div class="details">
                      <h2>
                        {{$testimonial->testimonials_name}}<br>
                        <span>{{$testimonial->testimonials_designation}}</span>            
                      </h2>
                    </div>
                  </div>
                </div>
                @endforeach
                <!-- CARD 1 end-->
                
                <!-- CARD 2 START-->
              <!--  -->
              </div>
          </section>


        <!-- Why -->
        <section class="why">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-12 m-0 p-0 hide">
                        <img src="img/why-choose-left-bg.jpg" alt="" class="img-fluid img-width">
                    </div>
                    <div class="col-lg-6 col-md-12 m-0 p-0">
                        <div class="why-right">
                            <div class="right" style="background-image: url(./img/why-choose-right-map.png);"></div>
                            <h6 class="right-para">Our benefit lists</h6>
                            <h2>Why Choose Tevily</h2>
                            <p>There are many variations of passages of Lorem Ipsum is simply free text available in the market for you, but the majority have suffered alteration in some form.</p>
                            <div class="d-flex mt-5">
                                <div class="col-2">
                                 <i class="fas fa-helicopter item-icon"></i>
                                </div>
                                <div class="col-10">
                                    <h5>Professional and Certified</h5>
                                    <p class="para-descrip"> Lorem ipsum is simply free text dolor sit but the majority have suffered amet, consectetur notted.</p>
                                </div>
                            </div>
                            <div class="d-flex mt-5">
                                <div class="col-2">
                                 <i class="fas fa-map-marked-alt item-icon"></i>
                                </div>
                                <div class="col-10">
                                    <h5>Get Instant Tour Bookings</h5>
                                    <p class="para-descrip"> Lorem ipsum is simply free text dolor sit but the majority have suffered amet, consectetur notted.</p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- News -->
        <section class="news">
            <p class="news-para">From the blog post</p>
            <h2>News & Articles</h2>
            <div class="container">
                <div class="row mt-5 mb-5">
                  
                  <!-- card 1 -->
                  <div class="col-xs-12 col-sm-12 col-md-4 d-flex align-items-stretch mb-3">
                    <div class="caard">
               <img class="card-img" src="https://i.imgur.com/R1JoEnD.jpeg">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 449">
                          <path
                            d="M-6.84 362.89c28.01-16.38 76.91-39.23 136.86-38.95 14.79.07 54.58.26 97.9 16.84 11.73 4.49 21.07 9.17 40 14.74 13.84 4.07 35.91 10.42 64.22 11.58 21.61.89 38.04-1.61 62.11-5.26 12.27-1.86 27.49-4.66 54.74-8.42 8.4-1.16 17.9-2.4 30.53-2.11 11.83.28 21.61 1.79 28.42 3.16l1.05 96.85-519-1.05c1.06-29.13 2.12-58.25 3.17-87.38z"
                            fill="#fafafa" /></svg>
                      <div class="card-content">
                        <h4>Journeys are Best Measured in New Friends</h4>
                        <span>by Riya Sinha</span>
                        <p>Nulla quis sem at nibh elementum ibh elementum  imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue
                          semper porta. Mauris massa. </p>
                        <a href="#" class="abt-btn">Read Full Article</a>
                      </div>
                    </div>
                  </div>
              
                  <!-- card 2 -->
                  <div class="col-xs-12 col-sm-12 col-md-4 d-flex align-items-stretch mb-3">
                    <div class="caard">
               <img class="card-img" src="https://i.imgur.com/tJFNRg9.jpg">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 449">
                          <path
                            d="M-6.84 362.89c28.01-16.38 76.91-39.23 136.86-38.95 14.79.07 54.58.26 97.9 16.84 11.73 4.49 21.07 9.17 40 14.74 13.84 4.07 35.91 10.42 64.22 11.58 21.61.89 38.04-1.61 62.11-5.26 12.27-1.86 27.49-4.66 54.74-8.42 8.4-1.16 17.9-2.4 30.53-2.11 11.83.28 21.61 1.79 28.42 3.16l1.05 96.85-519-1.05c1.06-29.13 2.12-58.25 3.17-87.38z"
                            fill="#fafafa" /></svg>
                      <div class="card-content">
                        <h4>Things to See and Do When Visiting Japan</h4>
                        <span>by Joe Barodiya</span>
                        <p> Mattis enim ut tellus elementum sagittis vitae. Elementum eu facilisis sed odio. Commodo viverra maecenas accumsan lacus
                          vel facilisis. Duis sagittis ipsum.</p>
                        <a href="#" class="abt-btn">Read Full Article</a>
                      </div>
                    </div>
                  </div>
              
                  <!-- card 3 -->
                  <div class="col-xs-12 col-sm-12 col-md-4 d-flex align-items-stretch mb-3">
                    <div class="caard">
                 <img class="card-img" src="https://i.imgur.com/wRsKD0E.jpg">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 449">
                          <path
                            d="M-6.84 362.89c28.01-16.38 76.91-39.23 136.86-38.95 14.79.07 54.58.26 97.9 16.84 11.73 4.49 21.07 9.17 40 14.74 13.84 4.07 35.91 10.42 64.22 11.58 21.61.89 38.04-1.61 62.11-5.26 12.27-1.86 27.49-4.66 54.74-8.42 8.4-1.16 17.9-2.4 30.53-2.11 11.83.28 21.61 1.79 28.42 3.16l1.05 96.85-519-1.05c1.06-29.13 2.12-58.25 3.17-87.38z"
                            fill="#fafafa" /></svg>
                      <div class="card-content">
                        <h4>Travel the Most Beautiful Places in the World</h4>
                        <span>by Shanaya Sen</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Purus
                          non enim praesent elementum.</p>
                        <a href="#" class="abt-btn">Read Full Article</a>
                      </div>
                    </div>
                  </div>
              
                </div>
              </div>
        </section>
@endsection