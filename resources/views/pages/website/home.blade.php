  @extends('layouts.master_home')

      <!-- About Us -->
      @section('home_content')
      @php
          echo($firstContents[0]);
          $content = $firstContents[0];
          echo $content;
        @endphp
      <div id="slider" class="slider">
        <div class="row">
          <div class="col-md-8 col-12 p-height">
            <div id="carouselExampleIndicators" class="carousel slide carosel-height" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                  aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                  aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                  aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner carosel-height">
                <div class="carousel-item active">
                  <img src="{{ asset('frontend/assets/img/Carousel/carosel-1.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('frontend/assets/img/Carousel/carosel-2.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('frontend/assets/img/Carousel/carosel-2.jpg') }}" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <div class="col-md-4 col-12 mt-2 mt-md-0 p-height c-border">
            <div class="mt-0 mt-md-1">
              <div class="m-0" style="background-color: #47b2e4;">
                <span class="text-white px-md-1 px-2" style="font-size: 1.2rem">Message</span>
              </div>
              <div class="head-image d-inline float-end px-md-3 px-2 pt-md-2 pt-1" style="width: 11rem; height: 12rem;">
                <img src="{{ asset('frontend/assets/img/Chairman.jpg') }}" class="card-img" alt="...">
                <div class="text-center"><small><b>Mr. John</strong></b><br><span>Chairman</span></div>
              </div>
              <!-- <h5 class="mt-2 mt-md-3 mb-1"><span class="bg-primary p-1 text-white">Message</span></h5> -->
              <p class="card-text text-wrap px-2 px-md-0 pt-md-1" style="text-align: justify;">consectetur adipisicing elit. Nam
                doloremque, dolor asperiores ipsa cumque quos,
                delectus vero ipsum quaerat esse at harum. Veritatis dolorem ducimus placeat dolorum. Odio, rerum?
                recusandae. Esse voluptatibus corrupti laboriosam, molestias eos nisi tempore? lorem ipsum dolor sit
                amet consectetur Veritatis dolorem ducimus placeat dolorum. Odio, rerum? recusandae. Esse voluptatibus
                corrupti laboriosam, molestias eos nisi tempore? consectetur Veritatis dolorem ducimus placeat
              </p>
            </div>
          </div>
        </div>
      </div>
      <div id="#about" class="section-welcome my-2 my-md-3 px-3 mx-auto">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12 col-md-6">
              <h2 class="text-center mb-2 mb-md-3 section-heading">Welcome to Our Company</h2>
              <p style="text-align: justify;">pretium, ex diam vehicula dolor, id sagittis ipsum risus id purus. Cras id ante efficitur, fringilla elit non, volutpat nulla. Proin volutpat, felis eu tincidunt rutrum, ligula eros dapibus diam, in mattis ipsum nisl ac arcu. Vestibulum fringilla, mi ac maximus malesuada, libero neque blandit odio, vel iaculis ligula magna elementum risus. Nulla nulla orci, blandit sit amet ligula ultrices, hendrerit vestibulum nisl. In a mauris cursus quam vehicula auctor eu ac metus.</p>    
            </div>
            <div class="col-12 col-md-6">
              <div class="about-img p-md-3 p-lg-5">
                <img src="{{ asset('frontend/assets/img/about/about-1.jpg') }}" alt="About Image">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="service" class="section-services mb-md-5 px-md-3 mx-auto">
        <div class="container">
          <h2 class="text-center mb-2 mb-md-3 section-heading">Services</h2>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 mb-2 mb-md-2 mb-lg-0">
              <div class="card border-0 h-100" style="background-color: transparent;">
                <div class="card-body icon-box">
                  <div class="icon">
                    <i class="fa-solid fa-money-check"></i>
                  </div>
                  <h4><a href="#!">ATM System Providing</a></h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-2 mb-md-2 mb-lg-0">
              <div class="card border-0 h-100" style="background-color: transparent;">
                <div class="card-body icon-box">
                  <div class="icon">
                    <i class="fa-solid fa-book-open"></i>
                  </div>
                  <h4><a href="#!">Online Marketing</a></h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-2 mb-md-2 mb-lg-0">
              <div class="card border-0 h-100" style="background-color: transparent;">
                <div class="card-body icon-box">
                  <div class="icon">
                    <i class="fa-solid fa-code"></i>
                  </div>
                  <h4><a href="#!">Coding, Bug Fixing</a></h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-2 mb-md-2 mb-lg-0">
              <div class="card border-0 h-100" style="background-color: transparent;">
                <div class="card-body icon-box">
                  <div class="icon">
                    <i class="fa-solid fa-table"></i>
                  </div>
                  <h4><a href="#!">Responsive Sites Design</a></h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="product" class="section-portfolio mb-3 mb-md-5 px-md-3 mx-auto">
          <div id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
              <div class="section-title">
                <h2 class="text-center section-heading">Our Product</h2>
              </div>
              <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-card">Card</li>
                <li data-filter=".filter-web">Web</li>
              </ul>
              <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                 <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                   <div class="portfolio-img"><img src="{{ asset('frontend/assets/img/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt=""></div>
                   <div class="portfolio-info">
                     <h4>App 1</h4>
                     <p>App</p>
                     <a href="{{ asset('frontend/assets/img/portfolio/portfolio-1.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="fa-solid fa-plus"></i></a>
                     <a href="portfolio-details.html" class="details-link" title="More Details"><i class="fa-solid fa-link"></i></a>
                   </div>
                 </div>
       
                 <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                   <div class="portfolio-img"><img src="{{ asset('frontend/assets/img/portfolio/portfolio-2.jpg') }}" class="img-fluid" alt="" style="height: 280px;"></div>
                   <div class="portfolio-info">
                     <h4>Web 3</h4>
                     <p>Web</p>
                     <a href="{{ asset('frontend/assets/img/portfolio/portfolio-2.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="fa-solid fa-plus"></i></a>
                     <a href="portfolio-details.html" class="details-link" title="More Details"><i class="fa-solid fa-link"></i></a>
                   </div>
                 </div>
       
                 <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                   <div class="portfolio-img"><img src="{{ asset('frontend/assets/img/portfolio/portfolio-3.jpg') }}" class="img-fluid" alt=""></div>
                   <div class="portfolio-info">
                     <h4>App 2</h4>
                     <p>App</p>
                     <a href="{{ asset('frontend/assets/img/portfolio/portfolio-3.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="fa-solid fa-plus"></i></a>
                     <a href="portfolio-details.html" class="details-link" title="More Details"><i class="fa-solid fa-link"></i></a>
                   </div>
                 </div>
       
                 <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                   <div class="portfolio-img"><img src="{{ asset('frontend/assets/img/portfolio/portfolio-4.jpg') }}" class="img-fluid" alt=""></div>
                   <div class="portfolio-info">
                     <h4>Card 2</h4>
                     <p>Card</p>
                     <a href="{{ asset('frontend/assets/img/portfolio/portfolio-4.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="fa-solid fa-plus"></i></a>
                     <a href="portfolio-details.html" class="details-link" title="More Details"><i class="fa-solid fa-link"></i></a>
                   </div>
                 </div>
       
                 <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                   <div class="portfolio-img"><img src="{{ asset('frontend/assets/img/portfolio/portfolio-5.jpg') }}" class="img-fluid" alt=""></div>
                   <div class="portfolio-info">
                     <h4>Web 2</h4>
                     <p>Web</p>
                     <a href="{{ asset('frontend/assets/img/portfolio/portfolio-5.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="fa-solid fa-plus"></i></a>
                     <a href="portfolio-details.html" class="details-link" title="More Details"><i class="fa-solid fa-link"></i></a>
                   </div>
                 </div>
       
                 <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                   <div class="portfolio-img"><img src="{{ asset('frontend/assets/img/portfolio/portfolio-6.jpg') }}" class="img-fluid" alt=""></div>
                   <div class="portfolio-info">
                     <h4>App 3</h4>
                     <p>App</p>
                     <a href="{{ asset('frontend/assets/img/portfolio/portfolio-6.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="fa-solid fa-plus"></i></a>
                     <a href="portfolio-details.html" class="details-link" title="More Details"><i class="fa-solid fa-link"></i></a>
                   </div>
                 </div>
       
                 <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                   <div class="portfolio-img"><img src="{{ asset('frontend/assets/img/portfolio/portfolio-7.jpg') }}" class="img-fluid" alt=""></div>
                   <div class="portfolio-info">
                     <h4>Card 1</h4>
                     <p>Card</p>
                     <a href="{{ asset('frontend/assets/img/portfolio/portfolio-7.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="fa-solid fa-plus"></i></a>
                     <a href="portfolio-details.html" class="details-link" title="More Details"><i class="fa-solid fa-link"></i></a>
                   </div>
                 </div>
       
                 <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                   <div class="portfolio-img"><img src="{{ asset('frontend/assets/img/portfolio/portfolio-8.jpg') }}" class="img-fluid" alt=""></div>
                   <div class="portfolio-info">
                     <h4>Card 3</h4>
                     <p>Card</p>
                     <a href="{{ asset('frontend/assets/img/portfolio/portfolio-8.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="fa-solid fa-plus"></i></a>
                     <a href="portfolio-details.html" class="details-link" title="More Details"><i class="fa-solid fa-link"></i></a>
                   </div>
                 </div>
       
                 <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                   <div class="portfolio-img"><img src="{{ asset('frontend/assets/img/portfolio/portfolio-9.jpg') }}" class="img-fluid" alt=""></div>
                   <div class="portfolio-info">
                     <h4>Web 3</h4>
                     <p>Web</p>
                     <a href="{{ asset('frontend/assets/img/portfolio/portfolio-9.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="fa-solid fa-plus"></i></a>
                     <a href="portfolio-details.html" class="details-link" title="More Details"><i class="fa-solid fa-link"></i></a>
                   </div>
                 </div>
               </div>
            </div>
        
            </div><!-- End Portfolio Section -->
      </div>
      <div id="team" class="section-ourTeam mb-3 mb-md-5 px-md-3 mx-auto">
        <div class="container">
          <h2 class="text-center mb-2 mb-md-3 section-heading">Our Team</h2>
          <div class="row">
            <div class="col-lg-3 col-md-6 mb-2 mb-md-2 mb-lg-0">
              <div class="card">
                <div class="team-img">
                  <img src="{{ asset('frontend/assets/img/team/team-1.jpg')}}" class="card-img-top" alt="...">
                </div>
                <div class="card-body text-center">
                  <h5 class="card-title team-name">Walter White</h5>
                  <h6 class="team-designation">Chief Executive Officer</h6>
                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                  <div class="social">
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-2 mb-md-2 mb-lg-0">
              <div class="card">
                <div class="team-img">
                  <img src="{{ asset('frontend/assets/img/team/team-2.jpg')}}" class="card-img-top" alt="...">
                </div>
                <div class="card-body text-center">
                  <h5 class="card-title team-name">Sarah Jhonson</h5>
                  <h6 class="team-designation">Product Manager</h6>
                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                  <div class="social">
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-2 mb-md-2 mb-lg-0">
              <div class="card">
                <div class="team-img">
                  <img src="{{ asset('frontend/assets/img/team/team-3.jpg')}}" class="card-img-top" alt="...">
                </div>
                <div class="card-body text-center">
                  <h5 class="card-title team-name">William Anderson</h5>
                  <h6 class="team-designation">CTO</h6>
                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                  <div class="social">
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-2 mb-md-2 mb-lg-0">
              <div class="card">
                <div class="team-img">
                  <img src="{{ asset('frontend/assets/img/team/team-4.jpg')}}" class="card-img-top" alt="...">
                </div>
                <div class="card-body text-center">
                  <h5 class="card-title team-name">Amanda Jepson</h5>
                  <h6 class="team-designation">Accountant</h6>
                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                  <div class="social">
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="gallery" class="section-gallery mb-3 mb-md-5 px-md-3 mx-auto">
        <div class="container">
          <h2 class="text-center mb-2 mb-md-3 section-heading">Gallery</h2>
            <div class="row">
              <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card mod-card">
                  <a href="{{ asset('frontend/assets/img/Gallery/thumb/gallery-1.jpg') }}" data-gallery="imageGallery" class="portfolio-lightbox preview-link" title="picture-1">
                  <!-- <a href="/assets/img/Gallery/gallery-1.jpg" data-gallery="imageGallery" class="portfolio-lightbox preview-link" title="picture-1"> -->
                    <img src="{{ asset('frontend/assets/img/Gallery/thumb/gallery-1.jpg') }}" class="card-img-top gallery-image-top" alt="...">
                  </a>
                  <div class="card-footer">
                    <small class="text-muted">Working on a team</small>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card mod-card">
                  <a href="{{ asset('frontend/assets/img/Gallery/thumb/gallery-2.jpg') }}" data-gallery="imageGallery" class="portfolio-lightbox preview-link" title="picture-2">
                    <img src="{{ asset('frontend/assets/img/Gallery/thumb/gallery-2.jpg') }}" class="card-img-top gallery-image-top" alt="...">
                  </a>
                  <div class="card-footer">
                    <small class="text-muted">Discussing on a matter</small>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card mod-card">
                  <a href="{{ asset('frontend/assets/img/Gallery/thumb/gallery-3.jpg') }}" data-gallery="imageGallery" class="portfolio-lightbox preview-link" title="picture-3">
                    <img src="{{ asset('frontend/assets/img/Gallery/thumb/gallery-1.jpg') }}" class="card-img-top gallery-image-top" alt="...">
                  </a>
                  <div class="card-footer">
                    <small class="text-muted">Solving a big problem</small>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card mod-card">
                  <a href="{{ asset('frontend/assets/img/Gallery/thumb/gallery-4.jpg') }}" data-gallery="imageGallery" class="portfolio-lightbox preview-link" title="picture-4">
                    <img src="{{ asset('frontend/assets/img/Gallery/thumb/gallery-4.jpg') }}" class="card-img-top gallery-image-top" alt="...">
                  </a>
                  <div class="card-footer">
                    <small class="text-muted">Working on a team</small>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card mod-card">
                  <a href="{{ asset('frontend/assets/img/Gallery/thumb/gallery-5.jpg') }}" data-gallery="imageGallery" class="portfolio-lightbox preview-link" title="picture-5">
                    <img src="{{ asset('frontend/assets/img/Gallery/thumb/gallery-5.jpg') }}" class="card-img-top gallery-image-top" alt="...">
                  </a>
                  <div class="card-footer">
                    <small class="text-muted">Working on a team</small>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card mod-card">
                  <a href="{{ asset('frontend/assets/img/Gallery/thumb/gallery-6.jpg') }}" data-gallery="imageGallery" class="portfolio-lightbox preview-link" title="picture-6">
                    <img src="{{ asset('frontend/assets/img/Gallery/thumb/gallery-6.jpg') }}" class="card-img-top gallery-image-top" alt="...">
                  </a>
                  <div class="card-footer">
                    <small class="text-muted">Working on a team</small>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card mod-card">
                  <a href="{{ asset('frontend/assets/img/Gallery/thumb/gallery-7.jpg') }}" data-gallery="imageGallery" class="portfolio-lightbox preview-link" title="picture-6">
                    <img src="{{ asset('frontend/assets/img/Gallery/thumb/gallery-7.jpg') }}" class="card-img-top gallery-image-top" alt="...">
                  </a>
                  <div class="card-footer">
                    <small class="text-muted">Working on a team</small>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card mod-card">
                  <a href="{{ asset('frontend/assets/img/Gallery/thumb/gallery-8.jpg') }}" data-gallery="imageGallery" class="portfolio-lightbox preview-link" title="picture-6">
                    <img src="{{ asset('frontend/assets/img/Gallery/thumb/gallery-8.jpg') }}" class="card-img-top gallery-image-top" alt="...">
                  </a>
                  <div class="card-footer">
                    <small class="text-muted">Working on a team</small>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card mod-card">
                  <a href="{{ asset('frontend/assets/img/Gallery/thumb/gallery-9.jpg') }}" data-gallery="imageGallery" class="portfolio-lightbox preview-link" title="picture-6">
                    <img src="{{ asset('frontend/assets/img/Gallery/thumb/gallery-9.jpg') }}" class="card-img-top gallery-image-top" alt="...">
                  </a>
                  <div class="card-footer">
                    <small class="text-muted">Working on a team</small>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div> 
      
      <div id="contact" class="section-contact-us mb-3 mb-md-5 px-md-3 mx-auto pb-3 pb-md-5">
        <div class="container">
          <h2 class="text-center mb-2 mb-md-3 section-heading">Contact Us</h2>
          <div class="row">
            <div class="col-lg-6">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="name">Your Name</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="name">Your Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="name">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject" required>
                </div>
                <div class="form-group">
                  <label for="name">Message</label>
                  <textarea class="form-control" name="message" rows="10" required></textarea>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0 d-flex align-items-stretch">
              <div class="info">
                <div class="address">
                  <i class="fa-solid fa-location-dot"></i>
                  <h4>Location:</h4>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
                <div class="email">
                  <i class="fa-solid fa-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>
                <div class="phone">
                  <i class="fa-solid fa-phone"></i>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 55s</p>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d542.6265308589916!2d90.36942316460342!3d23.80644762332969!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0e9059d7751%3A0xcaaa6d1c52ebfd52!2z4Ka44Ka_4Kau4KeN4Kar4Kao4KeAIOCmleCmvuCmuOCnjeCmn-CmruCmvuCmsCDgppXgp4fgp5_gpr7gprA!5e0!3m2!1sbn!2sbd!4v1647239183127!5m2!1sbn!2sbd" frameborder="0" style="border:0; width: 100%; height: 239px;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="newSection">
      </div>
      @endsection
  