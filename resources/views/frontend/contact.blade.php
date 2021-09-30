@extends('frontend.master')
@section('content')
<!-- Hero section -->
<section class="hero-cnt">
    <h1>Contact</h1>
</section>

<!-- breadcrumb -->
<div class="bread">
    <p>Home<span> / Contact</span></p>
</div>
  <hr>


  <!-- Form -->
  <section class="form-cnt">
      <div class="container">
          <div class="row">
              <div class="col-md-4 col-12 form-left">
                <p>Talk with our team</p>
                <h2>Any Question? Feel Free to Contact</h2>
                <div class="social-menu">
        <ul>
            <li><a href="" target="blank"><i class="fab fa-github"></i></i></a></li>
            <li><a href="" target="blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="" target="blank"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href=""><i class="fab fa-codepen" target="blank"></i></a></li>
        </ul>
    </div>
              </div>
              <div class="col-md-8 col-12">
                <form class="c-form" method="POST" action="/frontend/save">
                  @csrf
                    <div>
                    <img src="https://cdn4.iconfinder.com/data/icons/basic-user-interface-elements/700/mail-letter-offer-256.png" alt="icon">
                     </div>
                    <div class="submit-msg">
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
                </div>
                    <input type="text" placeholder="Your name" name="name" required>
                     <span class="text-danger">@error('name'){{$message}}@enderror</span>
                    <input type="email" placeholder="Email address" name="email" required>
                     <span class="text-danger">@error('email'){{$message}}@enderror</span>
                    <textarea placeholder="Write Comment" name="message" required></textarea>
                     <span class="text-danger">@error('message'){{$message}}@enderror</span>
                    <input type="submit" value="Send">
                  </form>
            </div>
          </div>
      </div>
  </section>

  
  <!-- Contact-Detail -->
  <div class="container-cnt">
    <div class="cnt-card">
      <i class="fas fa-envelope cnt-icon"></i>
      <h2 class="card-title">Email</h2>
      <p class="card-info">
        needhelp@tevily.com</p>
    </div>
    <div class="cnt-card">
      <i class="fas fa-phone cnt-icon"></i>
      <h2 class="card-title">Phone number</h2>
      <p class="card-info">+92 666 888 0000</p>
    </div>
    <div class="cnt-card">
      <i class="fas fa-map-marker-alt cnt-icon"></i>
      <h2 class="card-title">Location</h2>
      <p class="card-info">
        88 Broklyn Street
        Road New York. USA</p>
    </div>
  </div>

  <!-- map -->
  <section class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d471218.38560188503!2d88.04952746944407!3d22.676385755547642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f882db4908f667%3A0x43e330e68f6c2cbc!2sKolkata%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1631796617975!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </section>
       @endsection