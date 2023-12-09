@extends('layouts.app')

@section('content')

<main id="main">
<!-- ======= Contact Me Section ======= -->
    <section id="contact" class="contact">

        <div class="container">

        <div class="section-title">
            <span>Contact Me</span>
            <h2>Contact Me</h2>
            {{-- <p></p> --}}
        </div>

        <div class="row">

            <div class="col-lg-6">

            <div class="row">
                <div class="col-md-12">
                <div class="info-box">
                    <i class="bx bx-share-alt"></i>
                    <h3>Social Profiles</h3>
                    <div class="social-links">
                    <a href="{{ url('https://twitter.com/i/flow/signup') }}" target="_new" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="{{ url('https://www.facebook.com') }}" target="_new" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="{{ url('https://www.instagram.com/') }}" target="_new" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="{{ url('https://github.com/Sanowarsunny') }}" target="_new" class="google-plus"><i class="bi bi-github"></i></a>
                    <a href="{{ url('https://www.linkedin.com/') }}" target="_new" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                <div class="info-box mt-4">
                    <i class="bx bx-envelope"></i>
                    <h3>Email Me</h3>
                    <p>sanowarhossain3843@gmail.com</p>
                </div>
                </div>
                <div class="col-md-6">
                <div class="info-box mt-4">
                    <i class="bx bx-phone-call"></i>
                    <h3>Call Me</h3>
                    <p>+8801990-879856</p>
                </div>
                </div>
            </div>

            </div>

            <div class="col-lg-6">
            <form action="{{ route('contact.submit') }}" method="post" role="form" class="php-email-form">

                @csrf
                
                <div class="row">
                <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
                </div>
                <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message">
                    
                </div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
            </div>

        </div>

        </div>
    </section>
    <!-- End Contact Me Section -->

</main>

  @endsection