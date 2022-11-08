@extends('layouts.web.app')
@section('page_title', 'Ebala Ji Services')

@section('content')
<div class="inner-banner">
<div class="container">
<div class="inner-title text-center">
<h3>Register</h3>
<ul>
<li>
<a href="index.html">Home</a>
</li>
<li>
<i class='bx bx-chevrons-right'></i>
</li>
<li>Register</li>
</ul>
</div>
</div>
<div class="inner-shape">
<img src="assets/images/shape/inner-shape.png" alt="Images">
</div>
</div>



<div class="user-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="user-img">
                    <img src="assets/images/user-img.jpg" alt="Images">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="user-form">
                    <div class="contact-form">
                    <div style="margin-bottom: 30px;">
                    <div class="container shadow py-5">
                        <div class="container network_wrapper col-sm p-2 ">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">User Registration</h5>
                                        <ul class="nav nav-tabs card-header-tabs" data-bs-tabs="tabs">
                                            <li class="nav-item">
                                                <a class="nav-link active" aria-current="true" data-bs-toggle="tab" href="#mobile">Mobile</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" aria-current="true" data-bs-toggle="tab" href="#otp">Otp Verify</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" aria-current="true" data-bs-toggle="tab" href="#user_info">User Info</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#payment">Payment</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <form class="card-body tab-content">
                                        <div class="tab-pane active py-4" id="mobile">
                                        <div class="row">
                                            <div class="col-lg-12 ">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" required data-error="Please enter your Mobile No" placeholder="Enter Your Mobile No">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 ">
                                                <button type="submit" class="default-btn btn-bg-two">Submit</button>
                                            </div>
                                            <div class="col-12">
                                                <p class="account-desc">Already have an account?<a href="log-in.html">Log In</a></p>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="tab-pane" id="otp">
                                        <div class="row">
                                            <div class="col-lg-12 ">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" required data-error="Enter otp" placeholder="Enter Otp">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 ">
                                                <button type="submit" class="default-btn btn-bg-two">Submit</button>
                                            </div>
                                            
                                        </div>
                                        </div>
                                        <div class="tab-pane" id="user_info">
                                            <p class="card-text">user info</p>
                                        </div>
                                        <div class="tab-pane" id="payment">
                                            <p class=" card-text">payment</p>
                                        </div>
                    
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- <h2>Register Now</h2>
                            <form>
                                <div class="row">
                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <input type="text" class="form-control" required data-error="Please enter your Mobile No" placeholder="Enter Your Mobile No">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 ">
                                        <button type="submit" class="default-btn btn-bg-two">Register Now</button>
                                    </div>
                                    <div class="col-12">
                                        <p class="account-desc">Already have an account?<a href="log-in.html">Log In</a></p>
                                    </div>
                                </div>
                            </form> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection