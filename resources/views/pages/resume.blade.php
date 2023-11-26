@extends('layouts.app')

@section('content')

<main id="main">
<!-- ======= My Resume Section ======= -->
    <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <span>My Resume</span>
        <h2>My Resume</h2>
        <p>
          <a href="{{ asset('assets/file/SANOWAR.pdf') }}" download="SANOWAR.pdf" class="btn btn-primary">
            <i class="fas fa-download"></i> Download Resume
          </a>
          
      </p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          {{-- <h3 class="resume-title">Summary</h3>
          <div class="resume-item pb-0">
            <h4>Alice Barkley</h4>
            <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
            <p>
            <ul>
              <li>Portland par 127,Orlando, FL</li>
              <li>(123) 456-7891</li>
              <li>alice.barkley@example.com</li>
            </ul>
            </p>
          </div> --}}
          <h3 class="resume-title">Education</h3>
          <div class="resume-item">
            <h4>B.Sc. in Computer Science and
              Engineering</h4>
            <h5>2018 - 2022</h5>
            <p><em>American International University Bangladesh (AIUB) </em></p>
            <p>CGPA:3.55 out of 4</p>
          </div>
          <div class="resume-item">
            <h4>HSC(Science)</h4>
            <h5>2014 - 2016</h5>
            <p><em>
              Chattogram Cantonment Public College-(CCPC)</em></p>
            <p> GPA: 5 out of 5 </p>
          </div>
          <div class="resume-item">
            <h4>SSC(Science)</h4>
            <h5>2012 - 2014</h5>
            <p><em>Chattogram Cantonment Board High School </em></p>
            <p> GPA: 5 out of 5 </p>
          </div>
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">Experience</h3>
          <div class="resume-item">
            <h4>LARAVEL Framwork</h4>
            <h5>2023 - Present</h5>
            <p><em>OSTAD TEAM</em></p>
            <p>
            <ul>
              <li>Better understand laravel command</li>
            </ul>
            </p>
          </div>
          <div class="resume-item">
            <h4>E-Commerce Website</h4>
            <p>
            <ul>
              <li> This project developed by HTML, JAVA Script and CSS. This project is fully
                responsible and it is only fronted part. Here I create about, cart, product list, products details and also
                contact page.</li>
              </ul>
            </p>
          </div>
          <div class="resume-item">
            <h4>Internship</h4>
            <p>
            <ul>
              <li> I have done my Salesforce training in Inovi Solution and learn Salesforce Developer and
                Salesforce Administrator. Also I have completed many Super Badges.</li>
              </ul>
            </p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End My Resume Section -->


</main>

@endsection