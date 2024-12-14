@extends('master')
@section('content')

  <style>


    .about-section {
        background-color: #fff;
        padding: 60px 0;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .about-section h2 {
        font-size: 36px;
        color: #333;
        font-weight: bold;
        text-align: center;
        margin-bottom: 20px;
    }

    .about-section p {
        font-size: 18px;
        color: #555;
        line-height: 1.6;
        text-align: center;
        max-width: 800px;
        margin: 0 auto 40px;
    }

    .mission {
        font-size: 20px;
        color: #333;
        margin-top: 40px;
        text-align: center;
    }

    .features-list {
        list-style-type: none;
        padding-left: 0;
        text-align: center;
        margin-top: 30px;
    }

    .features-list li {
        font-size: 18px;
        margin: 10px 0;
        color: #555;
    }

    .features-list li::before {
        content: "✔";
        color: #28a745;
        margin-right: 10px;
    }

    .contact-info {
        background-color: #28a745;
        color: white;
        padding: 40px 0;
        text-align: center;
        margin-top: 40px;
        border-radius: 8px;
        margin-bottom: 40px;
    }

    .contact-info h3 {
        font-size: 30px;
        margin-bottom: 20px;
    }

    .contact-info p {
        font-size: 18px;
    }

    .contact-info strong {
        font-size: 20px;
    }

    .btn-contact {
        background-color: #ffffff;
        color: #28a745;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 18px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-contact:hover {
        background-color: #218838;
        color: white;
    }

    @media (max-width: 767px) {
        .about-section h2 {
            font-size: 28px;
        }

        .about-section p {
            font-size: 16px;
        }

        .contact-info p {
            font-size: 16px;
        }
    }
</style>


<body>

    <nav class="navbar navbar-expand-lg navbar-white bg-white p-3 fs-4 shadow-sm p-3 mb-5 bg-white rounded">
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


            <div class="container about-section">
                <h2>About Us</h2>
                <p>"Welcome to EDM Cozy Apartments, where comfort and convenience meet. Our system offers a seamless experience for renting
                     fully furnished apartments designed to feel like home. Whether you're staying for
                     a short getaway or a long-term residence, EDM Cozy Apartments ensures a cozy,
                      hassle-free living experience with all the amenities you need."</p>

                <div class="mission">
                    <h3>Our Mission</h3>
                    <p>To provide affordable, comfortable, and convenient housing solutions that meet the diverse needs of our tenants. We aim to make apartment hunting hassle-free and ensure a seamless living experience for everyone.</p>
                </div>

                <h3 class="text-center">Why Choose Us?</h3>
                <ul class="features-list">
                    <li>Affordable Rent Rates</li>
                    <li>Fully Furnished Apartments</li>
                    <li>Prime Locations</li>
                    <li>24/7 Customer Support</li>
                    <li>Flexible Lease Terms</li>
                </ul>
            </div>

            <div class="container contact-info">
                <h3>Contact Us</h3>
                <p>If you have any questions or would like to inquire about available rooms, feel free to reach out to us. We’re here to help you find the perfect apartment!</p>
                <p>Email: <strong>info@apartmentrental.com</strong></p>
                <p>Phone: <strong>(123) 456-7890</strong></p>
                <button class="btn-contact">Contact Us</button>
            </div>

            <footer class="bg-dark text-white text-center py-3">
                <p>&copy; 2024 Room Apartments. All Rights Reserved.</p>
            </footer>

</body>

@endsection
