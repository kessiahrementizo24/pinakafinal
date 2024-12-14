@extends('master')
@section('title', 'Home')
@section('content')

<link rel="stylesheet" href="{{ asset('css/my.css') }}">


 <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-white bg-white p-3 fs-4">
        <div class="container">
            <a class="navbar-brand fs-4" href="/">
                EDM Cozy Apartment
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/rooms/all">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary" href="/login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<!-- Hero Section -->
<div class="container-fluid hero-section">
    <div class="row">
      <div class="col-md-12">
        <div class="image-container">

          <img src="{{asset('images/room1.jpg')}}" alt="Background" class="background-image">


          <div class="overlay"></div>


          <div class="hero-content">
            <h1>Welcome to EDM Cozy Apartment</h1>
            <p>Experience luxury and comfort like never before!</p>
            <a href="#rooms" class="btn btn-secondary">Explore Our Rooms</a>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- About Section -->
<section id="about" class="container about-section my-5">
     <div class="about-title">About</div>
    <div class="row align-items-center">
        <div class="col-md-6">
            <h2> EDM Cozy Apartment</h2>
            <p>  EDM Cozy Apartment System is a modern, innovative residential complex designed to cater to
                the diverse needs of urban dwellers. This system integrates state of the art amenities,
                sustainable living practices, and community-centric spaces to create a harmonious
                 living environment
            </p>
        </div>
        <div class="col-md-6">
            <img src="{{asset('images/room1.jpg')}}" alt="Background" class="background-image">
        </div>
    </div>
</section>

<!-- Amenities Section -->
<section id="amenities" class="container amenities">
    <h2 class="text-center mb-4">Our Rooms</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="{{asset('images/family-room.jpg')}}" alt="Family Room" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Family Room</h5>
                    <p class="card-text">
                        Experience comfort and elegance in our spacious Family Room, designed for relaxation and quality time
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="{{asset('images/suite-room.jpg')}}" alt="Suite Room" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Suite Room</h5>
                    <p class="card-text">Relax and unwind by our state-of-the-art swimming pool.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="{{asset('images/luxury-room.jpg')}}" alt="Suite Room" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Luxury Room</h5>
                    <p class="card-text">Stay in shape with our fully equipped gym facilities.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Contact Form Section -->
<section id="contact" class="container my-5">
    <h2 class="text-center mb-4">Contact Us</h2>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form class="contact-form">
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="3" placeholder="Your message" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 Room Apartments. All Rights Reserved.</p>
</footer>





@endsection
