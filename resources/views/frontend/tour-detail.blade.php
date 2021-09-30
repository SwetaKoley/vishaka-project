<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- CSS & BS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick-theme.min.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css')}}">
</head>
<body>

    <!-- Nav -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="#"><img src="{{ asset('frontend/img/logo.png')}}" alt="" class="img-fluid"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
              <li class="nav-item">
                <a class="nav-link" href="tour-list.html">Tour</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Destination
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="destination-1.html">Goa</a>
                  <a class="dropdown-item" href="destination-1.html">Kolkata</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Category
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="tour-list.html">Adventure Tour</a>
                  <a class="dropdown-item" href="tour-list.html">Couple Tour</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.html"><i class="far fa-user-circle fa-lg user"></i></a>
              </li>
          </ul>
        </div>
    </nav>

<section class="hero-cnt">
    <h1>Tour Details</h1>
</section>

  <!-- Tour Detail -->
    <section class="detail">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 col-12 name">
                    <h3>{{ $package->package_name }}</h3>
                    <p><span>₹{{ $package->price_for_adult }}</span> / Per Person</p>
                    <p><span>₹{{ $package->price_for_children }}</span> / Per Child</p>
                </div>
                <div class="col-md-7 col-12 tour-ul">
                    <ul>
                        <li title="National Park 2 Days Tour"><i class="far fa-clock tour-ul-icon"></i> &nbsp <p><span>Duration</span><br>{{ $package->number_of_days }} days</p></li>
                        <li><i class="fas fa-plane-arrival tour-ul-icon"> &nbsp </i><p><span>Tour Type</span><br>{{ $package->tour_category_name }}</p></li>
                        <li><i class="fas fa-map-pin tour-ul-icon"></i> &nbsp <p><span>Location</span><br> {{ $package->destination_name }}</p></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container my-3">
            <div class="row">
                <div class="col-md-2 col-12 bor">
                    <p><i class="far fa-clock tour-ul-icon"></i> &nbsp Posted 2 days ago</p>
                </div>
                <div class="col-md-8 col-12 px-4">
                    <p><i class="fas fa-star text-warning tour-ul-icon"></i><i class="fas fa-star text-warning tour-ul-icon"></i><i class="fas fa-star text-warning tour-ul-icon"></i><i class="fas fa-star text-warning tour-ul-icon"></i><i class="fas fa-star text-warning tour-ul-icon"></i> &nbsp </p>
                </div>
                <div class="col-md-2 col-12">
                    <button type="button" class="share"><i class="fas fa-share"></i> Share</button>
                </div>
            </div>
        </div>
        <hr>
    </section>

    <!-- Main section -->
    <Section class="tour-dee">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12 tour-para">
                    <h4>Overview</h4>
                    <p>{{ $package->package_description }}</p>
                    <h5>Included/Exclude</h5>
                    <div class="row">
                        <div class="col-md-8 col-12 in-ul">
                            {{ $package->includes }}
                            <!-- <ul>
                                <li><i class="fas fa-check in-icon"></i> &nbsp Pick and Drop Services</li>
                                <li><i class="fas fa-check in-icon"></i> &nbsp  Insurance</li>
                                <li><i class="fas fa-check in-icon"></i> &nbsp Cruise Dinner & Music Event</li>
                                <li><i class="fas fa-check in-icon"></i> &nbsp Visit 7 Best Places in the City With Group</li>
                            </ul> -->
                        </div>
                        <div class="col-md-4 col-12 in-ul">
                            {{ $package->excludes }}
                            <!-- <ul>
                                <li><i class="fas fa-times ex-icon"></i> &nbsp Additional Services</li>
                                <li><i class="fas fa-times ex-icon"></i> &nbsp 1 Meal Per Day</li>
                                <li><i class="fas fa-times ex-icon"></i> &nbsp Food & Drinks</li>
                                <li><i class="fas fa-times ex-icon"></i> &nbsp Tickets</li>
                            </ul> -->
                        </div>
                    </div>
                    <hr>
                    </div>
                    <div class="col-md-4 col-12">
                        <button class="book-now" data-toggle="modal" data-target="#bookModal">Click Here for Booking</button>

                        <!-- Book Now Modal -->

<!-- Modal -->
<div class="modal fade" id="bookModal" tabindex="-1" role="dialog" aria-labelledby="bookModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="bookModalLabel">BOOK NOW!!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
        <form class="tour-list" method="post" action="{{ route( 'frontend.book_post' ) }}">
            @csrf
            <input type="hidden" name="id" value="{{$id}}">
          <h4 class="pb-4">Book Tour</h4>
        <div class="row align-items-end">
            <div class="col-6">
                    <div class="inputs-filed mt-30">
                        <input type="text" placeholder="Name" name="name"
                            id="arrival-date">
                    </div>
                    <span class="text-danger">@error('name'){{$message}}@enderror</span>
                    </div>
                    <div class="col-6">
                      <div class="inputs-filed mt-30">
                          <input type="tel" placeholder="Phone Number" name="phone"
                              id="arrival-date">
                      </div>
                      <span class="text-danger">@error('phone'){{$message}}@enderror</span>
                      </div>      
                    <div class="col-6">
                    <div class="inputs-filed mt-30">
                        <input type="email" placeholder="E-mail Address" name="email"
                            id="departure-date">
                    </div>
                    <span class="text-danger">@error('email'){{$message}}@enderror</span>
                  </div>
                      <div class="col-6">
                        <div class="inputs-filed mt-30">
                            <input type="text" placeholder="City" name="city"
                                id="arrival-date">
                        </div>
                        <span class="text-danger">@error('city'){{$message}}@enderror</span>
                        </div>
                    <div class="col-6">
                    <div class="inputs-filed mt-30">
                        <input type="text" placeholder="No. of Children" name="children"
                                  id="arrival-date">  
                    </div>
                    <span class="text-danger">@error('children'){{$message}}@enderror</span>
                    </div>
                    <div class="col-6">
                      <div class="inputs-filed mt-30">
                          <input type="text" placeholder="No. of Adult" name="adult"
                                  id="arrival-date"> 
                      </div>
                      <span class="text-danger">@error('adult'){{$message}}@enderror</span>
                      </div>
                    <div class="inputs-filed  ml-3 mt-2">
                        <button type="submit">Book Now</button>
                    </div>
            </div>
      </form>
      </div>
    </div>
  </div>
</div>


                        <div class="update my-5">
                            <h4 class="pb-4">Last Minute</h4>


                              <div class="bor-update row">
                                <div class="col-4">
                                    <img src="img/tours-list-img-1.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-8">
                                    <p><span>₹20000</span> <br> Africa 2 Days Tour</p>
                                </div>
                              </div>
                              <hr>
                              

                              <div class="bor-update row my-3">
                                <div class="col-4">
                                    <img src="img/tours-list-img-2.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-8">
                                    <p><span>₹20000</span> <br> Africa 2 Days Tour</p>
                                </div>
                              </div>
                              <hr>
                              <div class="bor-update row">
                                <div class="col-4">
                                    <img src="img/tours-list-img-3.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-8">
                                    <p><span>₹20000</span> <br> Africa 2 Days Tour</p>
                                </div>
                              </div>
                            </div>
                    </div>
            </div>
            <h4>Tour Plan</h4>
            <div class="tab-wrap">
                @foreach( $package_detail as $package_detail )
                <div class="tab-item-wrap">
                  <div class="title">
                    <span>Day {{ $package_detail->day_number }} {{ $package_detail->heading }}</span>
                    <i class="fas fa-minus-circle"></i>
                  </div>
                  <div class="content">
                   <p>{{ $package_detail->content }}</p>
                   <h6>{{ $package_detail->includes }}</h6>
                  </div>
                </div>
                @endforeach

              </div>
              <h4 class="my-5">Tour Map</h4>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d471218.38560188503!2d88.04952746944409!3d22.676385755547646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f882db4908f667%3A0x43e330e68f6c2cbc!2sKolkata%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1632225499228!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              <h4 class="my-5">Tour Plan</h4>
              <div class="row">
                  <div class="col-md-4 col-12">
                    <div class="card">
                        <div class="card-header">
                          <img src="img/popular-tours__img-1.jpg" alt="" class="img-fluid">
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
              <div class="col-md-4 col-12">
                <div class="card">
                    <div class="card-header">
                      <img src="img/popular-tours__img-3.jpg" alt="" class="img-fluid">
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
              <div class="col-md-4 col-12">
                <div class="card">
                    <div class="card-header">
                      <img src="img/popular-tours__img-2.jpg" alt="" class="img-fluid">
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
            <h4 class="my-5">Review Scores</h4>
            <div class="revieew">
                <div class="row">
                    <div class="col-md-4 col-12 rating">
                        <h1>7.0</h1>
                        <p><i class="fas fa-star text-warning"></i>&nbsp Super</p>
                    </div>
                    <div class="col-md-8 col-12 py-3">
                        <h6 class="my-2">Service</h6>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                          </div>
                          <h6 class="my-2">Location</h6>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 87%;" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100">87%</div>
                          </div>
                          <h6 class="my-2">Amenities</h6>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 77%;" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100">77%</div>
                          </div>
                          <h6 class="my-2">Price</h6>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 69%;" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100">69%</div>
                          </div>
                          <h6 class="my-2">Food</h6>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                          </div>
                    </div>
                </div>
            </div>
            @foreach( $reviews as $review )
            <div class="row tour-rev mt-5">
                <div class="col-2">
                    <img src="{{asset( 'frontend/img/tour-review.png')}}" alt="" width="120px" class="img-fluid">
                </div>
                <div class="col-10">
                    <h6>{{ $review->reviews_name }}<br> <span>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($review->created_at))->diffForHumans() }}</span></h6>
                </div>
                <h5>{{ $review->reviews_title }}</h5>
                    <p>{{ $review->reviews_comment }}</p>
                </div>
                    <div class=" row">
                        <div class="col-md-4 col-12 tour-rating">
                            <p>
                                <?php
                                $count = 1;
                                $rate = $review->reviews_rate;
                                while( $count <= 5 )
                                {
                                    echo $rate > 0 ? '<i class="fas fa-star text-warning tour-ul-icon"></i>' : '<i class="fas fa-star tour-ul-icon"></i>' ;
                                    $count++;
                                    $rate--;
                                }
                                ?>
                            </p>
                            <!-- <p><i class="fas fa-star text-warning tour-ul-icon"></i><i class="fas fa-star text-warning tour-ul-icon"></i><i class="fas fa-star  tour-ul-icon"></i><i class="fas fa-star  tour-ul-icon"></i><i class="fas fa-star  tour-ul-icon"></i></p> -->
                        </div>
                </div>
                    <hr>
                    @endforeach
                            <h4 class="my-5">Write A Review</h4>     
                            <form class="tour-list" method="POST" action="{{route('frontend.review')}}">
                                  @if(session()->has('success'))
                                  <div class = "alert alert-success">
                                  {{session()->get('success')}}
                                  </div>
                                  @endif

                                  @if(session()->has('fail'))
                                  <div class = "alert alert-danger">
                                  {{session()->get('fail')}}
                                  </div>
                                  @endif
                                @csrf
                                <input type="hidden" name="id" value="{{ $id }}">
                            <div class="row">
                           <div class="col-12">
                             <div class="row align-items-center">
                               <div class="col-md-1 col-12 p-0">
                             <h6 class="rate">Rate Us:</h6>
                               </div>
                               <div class="col-md-2 col-12 p-0">  
                                <div class="rate" name="rate">
                              <input type="radio" id="star5" name="rate" value="5" />
                              <label for="star5" title="text">5 stars</label>
                              <input type="radio" id="star4" name="rate" value="4" />
                              <label for="star4" title="text">4 stars</label>
                              <input type="radio" id="star3" name="rate" value="3" />
                              <label for="star3" title="text">3 stars</label>
                              <input type="radio" id="star2" name="rate" value="2" />
                              <label for="star2" title="text">2 stars</label>
                              <input type="radio" id="star1" name="rate" value="1" />
                              <label for="star1" title="text">1 star</label>
                            </div>
                                 </div>
                             </div>
                             <span class="text-danger">@error('rate'){{$message}}@enderror</span>
                           </div>
                                <div class="col-12">
                                    <div class="row align-items-end">
                                        <div class="col-12">
                                                <div class="inputs-filed mt-30">
                                                    <input type="text" placeholder="Your Name" name="name"
                                                        id="arrival-date">
                                                        <span class="text-danger">@error('name'){{$message}}@enderror</span>
                                                </div>
                                                
                                                </div>
                                                <div class="col-12">
                                                <div class="inputs-filed mt-30">
                                                    <input type="email" placeholder="Email Address" name="email"
                                                        id="departure-date">
                                                        <span class="text-danger">@error('email'){{$message}}@enderror</span>
                                                </div>
                                                
                                                </div>
                                                <div class="col-12">
                                                  <div class="inputs-filed mt-30">
                                                      <input type="text" placeholder="Review Title" name="title"
                                                          id="departure-date">
                                                          <span class="text-danger">@error('title'){{$message}}@enderror</span>
                                                  </div>
                                                  
                                                  </div>
                                </div>
                            </div>
                                          <div class="col-12">
                                            <textarea id="w3review" name="comment" rows="4" cols="50" placeholder="Write Comment"></textarea>
                                            <span class="text-danger">@error('comment'){{$message}}@enderror</span>
                                          </div>
                                         
                                          <div class="inputs-filed  ml-3 mt-2">
                                              <button type="submit">Submit Review</button>
                                          </div>
                                  </div>
                            </form>  
        </div>
    </Section>
<!-- Footer -->
        <div class="pg-footer">
            <footer class="footer">
              <svg class="footer-wave-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 100" preserveAspectRatio="none">
                <path class="footer-wave-path" d="M851.8,100c125,0,288.3-45,348.2-64V0H0v44c3.7-1,7.3-1.9,11-2.9C80.7,22,151.7,10.8,223.5,6.3C276.7,2.9,330,4,383,9.8 c52.2,5.7,103.3,16.2,153.4,32.8C623.9,71.3,726.8,100,851.8,100z"></path>
              </svg>
              <div class="footer-content">
                <div class="footer-content-column">
                  <div class="footer-logo">
                    <a class="footer-logo-link" href="#">
                      <span class="hidden-link-text">LOGO</span>
                     <img src="img/footer-logo.png" alt="">
                    </a>
                  </div>
                  <div class="footer-menu">
                    <h2 class="footer-menu-name"> Get Started</h2>
                    <ul id="menu-get-started" class="footer-menu-list">
                      <li class="menu-item menu-item-type-post_type menu-item-object-product">
                        <a href="#">Start</a>
                      </li>
                      <li class="menu-item menu-item-type-post_type menu-item-object-product">
                        <a href="#">Documentation</a>
                      </li>
                      <li class="menu-item menu-item-type-post_type menu-item-object-product">
                        <a href="#">Installation</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="footer-content-column">
                  <div class="footer-menu">
                    <h2 class="footer-menu-name"> Company</h2>
                    <ul id="menu-company" class="footer-menu-list">
                      <li class="menu-item menu-item-type-post_type menu-item-object-page">
                        <a href="#">Contact</a>
                      </li>
                      <li class="menu-item menu-item-type-taxonomy menu-item-object-category">
                        <a href="#">News</a>
                      </li>
                      <li class="menu-item menu-item-type-post_type menu-item-object-page">
                        <a href="#">Careers</a>
                      </li>
                    </ul>
                  </div>
                  <div class="footer-menu">
                    <h2 class="footer-menu-name"> Legal</h2>
                    <ul id="menu-legal" class="footer-menu-list">
                      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-170434">
                        <a href="#">Privacy Notice</a>
                      </li>
                      <li class="menu-item menu-item-type-post_type menu-item-object-page">
                        <a href="#">Terms of Use</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="footer-content-column">
                  <div class="footer-menu">
                    <h2 class="footer-menu-name"> Quick Links</h2>
                    <ul id="menu-quick-links" class="footer-menu-list">
                      <li class="menu-item menu-item-type-custom menu-item-object-custom">
                        <a target="_blank" rel="noopener noreferrer" href="#">Support Center</a>
                      </li>
                      <li class="menu-item menu-item-type-custom menu-item-object-custom">
                        <a target="_blank" rel="noopener noreferrer" href="#">Service Status</a>
                      </li>
                      <li class="menu-item menu-item-type-post_type menu-item-object-page">
                        <a href="#">Security</a>
                      </li>
                      <li class="menu-item menu-item-type-post_type menu-item-object-page">
                        <a href="#">Blog</a>
                      </li>
                      <li class="menu-item menu-item-type-post_type_archive menu-item-object-customer">
                        <a href="#">Customers</a></li>
                      <li class="menu-item menu-item-type-post_type menu-item-object-page">
                        <a href="#">Reviews</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="footer-content-column">
                  <div class="footer-call-to-action">
                    <h2 class="footer-call-to-action-title"> Let's Chat</h2>
                    <p class="footer-call-to-action-description"> Have a support question?</p>
                    <a class="footer-btn button" href="#" target="_self"> Get in Touch </a>
                  </div>
                  <div class="footer-call-to-action">
                    <h2 class="footer-call-to-action-title"> You Call Us</h2>
                    <p class="footer-call-to-action-link-wrapper"> <a class="footer-call-to-action-link" href="tel:0124-64XXXX" target="_self"> 0124-64XXXX </a></p>
                  </div>
                </div>
                <div class="footer-social-links"> <svg class="footer-social-amoeba-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 236 54">
                    <path class="footer-social-amoeba-path" d="M223.06,43.32c-.77-7.2,1.87-28.47-20-32.53C187.78,8,180.41,18,178.32,20.7s-5.63,10.1-4.07,16.7-.13,15.23-4.06,15.91-8.75-2.9-6.89-7S167.41,36,167.15,33a18.93,18.93,0,0,0-2.64-8.53c-3.44-5.5-8-11.19-19.12-11.19a21.64,21.64,0,0,0-18.31,9.18c-2.08,2.7-5.66,9.6-4.07,16.69s.64,14.32-6.11,13.9S108.35,46.5,112,36.54s-1.89-21.24-4-23.94S96.34,0,85.23,0,57.46,8.84,56.49,24.56s6.92,20.79,7,24.59c.07,2.75-6.43,4.16-12.92,2.38s-4-10.75-3.46-12.38c1.85-6.6-2-14-4.08-16.69a21.62,21.62,0,0,0-18.3-9.18C13.62,13.28,9.06,19,5.62,24.47A18.81,18.81,0,0,0,3,33a21.85,21.85,0,0,0,1.58,9.08,16.58,16.58,0,0,1,1.06,5A6.75,6.75,0,0,1,0,54H236C235.47,54,223.83,50.52,223.06,43.32Z"></path>
                  </svg>
                  <a class="footer-social-link linkedin" href="#" target="_blank">
                    <span class="hidden-link-text">Linkedin</span>
                    <svg class="footer-social-icon-svg" xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 30 30">
                      <path class="footer-social-icon-path" d="M9,25H4V10h5V25z M6.501,8C5.118,8,4,6.879,4,5.499S5.12,3,6.501,3C7.879,3,9,4.121,9,5.499C9,6.879,7.879,8,6.501,8z M27,25h-4.807v-7.3c0-1.741-0.033-3.98-2.499-3.98c-2.503,0-2.888,1.896-2.888,3.854V25H12V9.989h4.614v2.051h0.065 c0.642-1.18,2.211-2.424,4.551-2.424c4.87,0,5.77,3.109,5.77,7.151C27,16.767,27,25,27,25z"></path>
                    </svg>
                  </a>
                  <a class="footer-social-link twitter" href="#" target="_blank">
                    <span class="hidden-link-text">Twitter</span>
                    <svg class="footer-social-icon-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26">
                      <path class="footer-social-icon-path" d="M 25.855469 5.574219 C 24.914063 5.992188 23.902344 6.273438 22.839844 6.402344 C 23.921875 5.75 24.757813 4.722656 25.148438 3.496094 C 24.132813 4.097656 23.007813 4.535156 21.8125 4.769531 C 20.855469 3.75 19.492188 3.113281 17.980469 3.113281 C 15.082031 3.113281 12.730469 5.464844 12.730469 8.363281 C 12.730469 8.773438 12.777344 9.175781 12.867188 9.558594 C 8.503906 9.339844 4.636719 7.246094 2.046875 4.070313 C 1.59375 4.847656 1.335938 5.75 1.335938 6.714844 C 1.335938 8.535156 2.261719 10.140625 3.671875 11.082031 C 2.808594 11.054688 2 10.820313 1.292969 10.425781 C 1.292969 10.449219 1.292969 10.46875 1.292969 10.492188 C 1.292969 13.035156 3.101563 15.15625 5.503906 15.640625 C 5.0625 15.761719 4.601563 15.824219 4.121094 15.824219 C 3.78125 15.824219 3.453125 15.792969 3.132813 15.730469 C 3.800781 17.8125 5.738281 19.335938 8.035156 19.375 C 6.242188 20.785156 3.976563 21.621094 1.515625 21.621094 C 1.089844 21.621094 0.675781 21.597656 0.265625 21.550781 C 2.585938 23.039063 5.347656 23.90625 8.3125 23.90625 C 17.96875 23.90625 23.25 15.90625 23.25 8.972656 C 23.25 8.742188 23.246094 8.515625 23.234375 8.289063 C 24.261719 7.554688 25.152344 6.628906 25.855469 5.574219 "></path>
                    </svg>
                  </a>
                  <a class="footer-social-link youtube" href="#" target="_blank">
                    <span class="hidden-link-text">Youtube</span>
                    <svg class="footer-social-icon-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                      <path class="footer-social-icon-path" d="M 15 4 C 10.814 4 5.3808594 5.0488281 5.3808594 5.0488281 L 5.3671875 5.0644531 C 3.4606632 5.3693645 2 7.0076245 2 9 L 2 15 L 2 15.001953 L 2 21 L 2 21.001953 A 4 4 0 0 0 5.3769531 24.945312 L 5.3808594 24.951172 C 5.3808594 24.951172 10.814 26.001953 15 26.001953 C 19.186 26.001953 24.619141 24.951172 24.619141 24.951172 L 24.621094 24.949219 A 4 4 0 0 0 28 21.001953 L 28 21 L 28 15.001953 L 28 15 L 28 9 A 4 4 0 0 0 24.623047 5.0546875 L 24.619141 5.0488281 C 24.619141 5.0488281 19.186 4 15 4 z M 12 10.398438 L 20 15 L 12 19.601562 L 12 10.398438 z"></path>
                    </svg>
                  </a>
                  <a class="footer-social-link github" href="#" target="_blank">
                    <span class="hidden-link-text">Github</span>
                    <svg class="footer-social-icon-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                      <path class="footer-social-icon-path" d="M 16 4 C 9.371094 4 4 9.371094 4 16 C 4 21.300781 7.4375 25.800781 12.207031 27.386719 C 12.808594 27.496094 13.027344 27.128906 13.027344 26.808594 C 13.027344 26.523438 13.015625 25.769531 13.011719 24.769531 C 9.671875 25.492188 8.96875 23.160156 8.96875 23.160156 C 8.421875 21.773438 7.636719 21.402344 7.636719 21.402344 C 6.546875 20.660156 7.71875 20.675781 7.71875 20.675781 C 8.921875 20.761719 9.554688 21.910156 9.554688 21.910156 C 10.625 23.746094 12.363281 23.214844 13.046875 22.910156 C 13.15625 22.132813 13.46875 21.605469 13.808594 21.304688 C 11.144531 21.003906 8.34375 19.972656 8.34375 15.375 C 8.34375 14.0625 8.8125 12.992188 9.578125 12.152344 C 9.457031 11.851563 9.042969 10.628906 9.695313 8.976563 C 9.695313 8.976563 10.703125 8.65625 12.996094 10.207031 C 13.953125 9.941406 14.980469 9.808594 16 9.804688 C 17.019531 9.808594 18.046875 9.941406 19.003906 10.207031 C 21.296875 8.65625 22.300781 8.976563 22.300781 8.976563 C 22.957031 10.628906 22.546875 11.851563 22.421875 12.152344 C 23.191406 12.992188 23.652344 14.0625 23.652344 15.375 C 23.652344 19.984375 20.847656 20.996094 18.175781 21.296875 C 18.605469 21.664063 18.988281 22.398438 18.988281 23.515625 C 18.988281 25.121094 18.976563 26.414063 18.976563 26.808594 C 18.976563 27.128906 19.191406 27.503906 19.800781 27.386719 C 24.566406 25.796875 28 21.300781 28 16 C 28 9.371094 22.628906 4 16 4 Z "></path>
                    </svg>
                  </a>
                </div>
              </div>
              <div class="footer-copyright">
                <div class="footer-copyright-wrapper">
                  <p class="footer-copyright-text">
                    <a class="footer-copyright-link" href="#" target="_self"> ©2021 | Designed By: AchieveX | All rights reserved. </a>
                  </p>
                </div>
              </div>
            </footer>
          </div>
    <!-- JS -->
    
    <script src="{{ asset('frontend/js/jquery.min.js')}}"></script>
    <script>
        $(function () {
  const $tabWrap = $(".tab-wrap");
  $tabWrap.each(function () {
    $(this)
      .find(".tab-item-wrap")
      .first()
      .find(".content")
      .show()
      .parent().addClass('active');
    var title = $(this).find(".title"),
      $content = $(this).find(".content");
    title.on("click", function () {
      $(this).parent().find(".content").toggle();
    });

    $(this)
      .find(".tab-item-wrap")
      .find(".title")
      .on("click", function () {
        $(this).parent().addClass('active').siblings().removeClass('active').find('i').attr('class', 'fas fa-plus-circle');
      
      $(this).find('i').attr('class', 'fas fa-minus-circle');
        $(this)
          .parents(".tab-item-wrap")
          .siblings()
          .find(".content")
          .hide()
          .parents(".tab-item-wrap")
      });
  });
});

    </script>
    <script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery-3.2.1.slim.min.js')}}"></script>
    <script src="{{ asset('frontend/js/popper.min.js')}}"></script>
    <script src="{{ asset('frontend/js/all.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.bxslider.js')}}"></script>
    <script src="{{ asset('frontend/js/main.js')}}"></script>
</body>
</html>
