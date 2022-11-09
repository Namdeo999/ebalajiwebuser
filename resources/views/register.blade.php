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


<div class="container  pt-100 pb-70">
    <div class="card text-center">
        <div class="card-header">
            <h4 class="card-title"> User Registeration</h4>
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#mob">Mobile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#otp">Otp Verification</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#user">User Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#pay">Payment</a>
                </li>
            </ul> 
            <div class="tab-content">
                <div class="tab-pane container active pt-50 pb-50" id="mob">
                    <div class="user-area">
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
                                            <h2>Mobile Number</h2>
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-12 ">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" required data-error="Please enter your Username or Email" placeholder="Enter mobile no.">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 ">
                                                        <button type="submit" class="default-btn btn-bg-two">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
                <div class="tab-pane container active pt-50 pb-50" id="otp">
                    <div class="user-area">
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
                                            <h2>OTP Verification</h2>
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-12 ">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" required data-error="Please enter your Username or Email" placeholder="Enter 6-digit otp">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 ">
                                                        <button type="submit" class="default-btn btn-bg-two">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
                <div class="tab-pane container fade" id="user">This is a user info tab.</div>
                <div class="tab-pane container fade" id="pay">This is a payment tab.</div>
            </div>
        </div>
    </div>
</div>

@endsection