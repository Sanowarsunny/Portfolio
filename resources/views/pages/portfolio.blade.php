
@extends('layouts.app')

@section('content')
<main id="main">
    
    <!-- ======= My Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">
  
          <div class="section-title">
            <span>My Projects</span>
            <h2>My Projects</h2>
            {{-- <p> </p> --}}
          </div>
  
          <ul id="portfolio-flters" class="d-flex justify-content-center">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
          </ul>
  
          <div class="row portfolio-container">
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-img"><img src="{{ asset('assets/img/portfolio') }}/portfolio-1.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <a href="{{ asset('assets/img/portfolio') }}/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-img"><img src="{{ asset('assets/img/portfolio') }}/portfolio-2.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <a href="{{ asset('assets/img/portfolio') }}/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-img"><img src="{{ asset('assets/img/portfolio') }}/portfolio-3.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <a href="{{ asset('assets/img/portfolio') }}/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-img"><img src="{{ asset('assets/img/portfolio') }}/portfolio-4.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <a href="{{ asset('assets/img/portfolio') }}/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-img"><img src="{{ asset('assets/img/portfolio') }}/portfolio-5.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <a href="{{ asset('assets/img/portfolio') }}/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-img"><img src="{{ asset('assets/img/portfolio') }}/portfolio-6.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <a href="{{ asset('assets/img/portfolio') }}/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-img"><img src="{{ asset('assets/img/portfolio') }}/portfolio-7.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <a href="{{ asset('assets/img/portfolio') }}/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-img"><img src="{{ asset('assets/img/portfolio') }}/portfolio-8.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <a href="{{ asset('assets/img/portfolio') }}/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-img"><img src="{{ asset('assets/img/portfolio') }}/portfolio-9.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <a href="{{ asset('assets/img/portfolio') }}/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
  
          </div>
  
        </div>
      </section>
      <!-- End My Portfolio Section -->

      <!-- ======= Pricing Section ======= -->
    {{-- <section id="pricing" class="pricing">
        <div class="container">
  
          <div class="section-title">
            <span>Pricing</span>
            <h2>Pricing</h2>
            <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
          </div>
  
          <div class="row">
  
            <div class="col-lg-3 col-md-6">
              <div class="box">
                <h3>Free</h3>
                <h4><sup>$</sup>0<span> / month</span></h4>
                <ul>
                  <li>Aida dere</li>
                  <li>Nec feugiat nisl</li>
                  <li>Nulla at volutpat dola</li>
                  <li class="na">Pharetra massa</li>
                  <li class="na">Massa ultricies mi</li>
                </ul>
                <div class="btn-wrap">
                  <a href="#" class="btn-buy">Buy Now</a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
              <div class="box featured">
                <h3>Business</h3>
                <h4><sup>$</sup>19<span> / month</span></h4>
                <ul>
                  <li>Aida dere</li>
                  <li>Nec feugiat nisl</li>
                  <li>Nulla at volutpat dola</li>
                  <li>Pharetra massa</li>
                  <li class="na">Massa ultricies mi</li>
                </ul>
                <div class="btn-wrap">
                  <a href="#" class="btn-buy">Buy Now</a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
              <div class="box">
                <h3>Developer</h3>
                <h4><sup>$</sup>29<span> / month</span></h4>
                <ul>
                  <li>Aida dere</li>
                  <li>Nec feugiat nisl</li>
                  <li>Nulla at volutpat dola</li>
                  <li>Pharetra massa</li>
                  <li>Massa ultricies mi</li>
                </ul>
                <div class="btn-wrap">
                  <a href="#" class="btn-buy">Buy Now</a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
              <div class="box">
                <span class="advanced">Advanced</span>
                <h3>Ultimate</h3>
                <h4><sup>$</sup>49<span> / month</span></h4>
                <ul>
                  <li>Aida dere</li>
                  <li>Nec feugiat nisl</li>
                  <li>Nulla at volutpat dola</li>
                  <li>Pharetra massa</li>
                  <li>Massa ultricies mi</li>
                </ul>
                <div class="btn-wrap">
                  <a href="#" class="btn-buy">Buy Now</a>
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
      </section>
      <!-- End Pricing Section --> --}}


    
    </main>
  @endsection