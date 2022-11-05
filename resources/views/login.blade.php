@extends('layouts.web.app')
@section('page_title', 'Ebala Ji Services')

@section('content')
<div class="inner-banner">
<div class="container">
<div class="inner-title text-center">
<h3>Log In</h3>
<ul>
<li>
<a href="index.html">Home</a>
</li>
<li>
<i class='bx bx-chevrons-right'></i>
</li>
<li>Log In</li>
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
<h2>Log In</h2>
<form>
<div class="row">
<div class="col-lg-12 ">
<div class="form-group">
<input type="text" class="form-control" required data-error="Please enter your Username or Email" placeholder="Username or Email">
</div>
</div>
<div class="col-12">
<div class="form-group">
<input class="form-control" type="password" name="password" placeholder="Password">
</div>
</div>
<div class="col-lg-12 form-condition">
<div class="agree-label">
<input type="checkbox" id="chb1">
<label for="chb1">
Remember Me <a class="forget" href="forget-password.html">Forgot My Password?</a>
</label>
</div>
</div>
<div class="col-lg-12 ">
<button type="submit" class="default-btn btn-bg-two">
Log In Now
</button>
</div>
<div class="col-12">
<p class="account-desc">
Not a Member?
<a href="{{url('/register')}}" >Register Now</a>
</p>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection