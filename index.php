<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sutus Court</title>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700">

    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/fancybox.min.css">
    <link rel="stylesheet" href="css/slicknav.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="css/all.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <header class="site-header">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
          <div class="container">
            <a class="navbar-brand" href="index.php">
              <img src="images/logo_sutus.png" alt="Sogo Hotel Logo" class="logo-image">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="rooms.php">Rooms</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="rates.php">Rates</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="facilities.php">Facilities & Service</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="location.php">Location</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="reservation.php">Reservation</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    
    <!-- END head -->

    <!-- Start Slider -->
    <div class="slider_area">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <section class="site-hero overlay" style="background-image: url(images/hero_1.jpg)" data-stellar-background-ratio="0.5">
              <div class="container">
                <div class="row site-hero-inner justify-content-center align-items-center">
                  <div class="col-md-10 text-center" data-aos="fade-up">
                    <span class="custom-caption text-uppercase text-white d-block  mb-3">WELCOME TO SUTUS COURT</span>
                    <h1 class="heading">A Best Place To Stay</h1>
                  </div>
                </div>
              </div>
              <div class="row site-hero-inner justify-content-center align-items-center">
                <div class="col-md-10 text-center">
                  <a class="mouse smoothscroll" href="#next">
                    <div class="mouse-icon">
                      <span class="mouse-wheel"></span>
                    </div>
                  </a>
                </div>
              </div>
            </section>
          </div>
          <div class="carousel-item">
            <section class="site-hero overlay" style="background-image: url(images/hero_2.jpg)" data-stellar-background-ratio="0.5">
              <div class="container">
                <div class="row site-hero-inner justify-content-center align-items-center">
                  <div class="col-md-10 text-center" data-aos="fade-up">
                    <span class="custom-caption text-uppercase text-white d-block  mb-3">WELCOME TO SUTUS COURT</span>
                    <h1 class="heading">A Best Place To Stay</h1>
                  </div>
                </div>
              </div>
                <div class="row site-hero-inner justify-content-center align-items-center">
                  <div class="col-md-10 text-center">
                    <a class="mouse smoothscroll" href="#next">
                      <div class="mouse-icon">
                        <span class="mouse-wheel"></span>
                      </div>
                    </a>
                  </div>
                </div>
            </section>
          </div>
          <!-- Add more carousel items as needed -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    
    
    <!-- END section -->

    <section class="section bg-light pb-0"  >
      <div class="container">
       
        <div class="row check-availabilty" id="next">
          <div class="block-32" data-aos="fade-up" data-aos-offset="-200">

            <form action="#">
              <div class="row">
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkin_date" class="font-weight-bold text-black">Check In</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="text" id="checkin_date" class="form-control">
                  </div>
                </div>
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkout_date" class="font-weight-bold text-black">Check Out</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="text" id="checkout_date" class="form-control">
                  </div>
                </div>
                <div class="col-md-6 mb-3 mb-md-0 col-lg-3">
                  <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="adults" class="font-weight-bold text-black">Adults</label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="adults" class="form-control">
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4+</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="children" class="font-weight-bold text-black">Children</label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="children" class="form-control">
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4+</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 align-self-end">
                  <button class="btn btn-primary btn-block text-white">Check Availabilty</button>
                </div>
              </div>
            </form>
          </div>


        </div>
      </div>
    </section>

    <section class="py-5 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
            <figure class="img-absolute">
              <img src="images/food-1.jpg" alt="Image" class="img-fluid">
            </figure>
            <img src="images/img_1.jpg" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
            <h2 class="heading">Welcome!</h2>
            <p class="mb-4">Sutus Court is well located on Soi Buakhaw, a nice and restful area of Pattaya City. Here in Pattaya prime location for peaceful hotels,
               we offer you a pleasant stay and convenient transportation with only 5 minutes drive from Pattaya City Center and just 300 meters away from the uncrowded Pattaya beachfront.
                Each guest room is keenly designed and colored in a unique theme to create 10 different ambience to satisfy individual.</p>
            <p><a href="#" class="btn btn-primary text-white py-2 mr-3">Learn More</a> <span class="mr-3 font-family-serif"><em>or</em></span> <a href="https://www.youtube.com/watch?v=lP42nTzHeu8"  data-fancybox class="text-uppercase letter-spacing-1">See video</a></p>
          </div>
          
        </div>
      </div>
    </section>
    
    <section class="section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading" data-aos="fade-up">Rooms &amp; Suites</h2>
            <p data-aos="fade-up" data-aos-delay="100">All are spacious and stylish with air-conditioning and a private balcony. Because we provide at-home comfort and at-hotel service. Let your relaxing vacation begin at our hotel.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div id="slider-card" class="owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
              <div class="item2">
                <a href="rooms.php#room1" target="_self" class="room2">
                  <div class="img-wrap2">
                    <img src="images/zone1/zone1-01.jpg" alt="Zone1" class="img-fluid mb-3 d-block">
                  </div>
                  <div class="p-3 text-center room-info">
                    <h2>ZONE 1</h2>
                    <span class="text-uppercase letter-spacing-1">1040 Baht / per night</span>
                  </div>
                </a>
              </div>
              <div class="item2">
                <a href="rooms.php" class="room2">
                  <div class="img-wrap2">
                    <img src="images/zone2/zone2-01.jpg" alt="Zone2" class="img-fluid mb-3 d-block">
                  </div>
                  <div class="p-3 text-center room-info">
                    <h2>ZONE 2</h2>
                    <span class="text-uppercase letter-spacing-1">830 Baht / per night</span>
                  </div>
                </a>
              </div>
              <div class="item2">
                <a href="rooms.php" class="room2">
                  <div class="img-wrap2">
                    <img src="images/zone3/zone3-01.jpg" alt="Zone3" class="img-fluid mb-3 d-block">
                  </div>
                  <div class="p-3 text-center room-info">
                    <h2>ZONE 3</h2>
                    <span class="text-uppercase letter-spacing-1">720-750 (Pool) Baht / per night</span>
                  </div>
                </a>
              </div>
              <div class="item2">
                <a href="rooms.php" class="room2">
                  <div class="img-wrap2">
                    <img src="images/zone4/zone4-01.jpg" alt="Zone4" class="img-fluid mb-3 d-block">
                  </div>
                  <div class="p-3 text-center room-info">
                    <h2>ZONE 4</h2>
                    <span class="text-uppercase letter-spacing-1">750 Baht / per night</span>
                  </div>
                </a>
              </div>
              <div class="item2">
                <a href="rooms.php" class="room2">
                  <div class="img-wrap2">
                    <img src="images/zone5/zone5-01.jpg" alt="Zone5" class="img-fluid mb-3 d-block">
                  </div>
                  <div class="p-3 text-center room-info">
                    <h2>ZONE 5</h2>
                    <span class="text-uppercase letter-spacing-1">620 Baht / per night</span>
                  </div>
                </a>
              </div>
            </div>
            <div class="custom-nav">
              <button class="slider-prev btn btn-link"><i class="fas fa-chevron-left"></i></button>
              <button class="slider-next btn btn-link"><i class="fas fa-chevron-right"></i></button>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
  
    

    
    <section class="section slider-section bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading" data-aos="fade-up">Photos</h2>
            <p data-aos="fade-up" data-aos-delay="100">Enjoy the breath-taking views from our Hotel</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
              <div class="slider-item"><a href="images/slider-1.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-1.jpg" alt="Image placeholder" class="img-fluid"></a></div>
              <div class="slider-item"><a href="images/slider-2.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-2.jpg" alt="Image placeholder" class="img-fluid"></a></div>
              <div class="slider-item"><a href="images/slider-3.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-3.jpg" alt="Image placeholder" class="img-fluid"></a></div>
              <div class="slider-item"><a href="images/slider-4.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-4.jpg" alt="Image placeholder" class="img-fluid"></a></div>
              <div class="slider-item"><a href="images/slider-5.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-5.jpg" alt="Image placeholder" class="img-fluid"></a></div>
              <div class="slider-item"><a href="images/slider-6.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-6.jpg" alt="Image placeholder" class="img-fluid"></a></div>
              <div class="slider-item"><a href="images/slider-7.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-7.jpg" alt="Image placeholder" class="img-fluid"></a></div>
              <div class="slider-item"><a href="images/slider-8.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-8.jpg" alt="Image placeholder" class="img-fluid"></a></div>
              <div class="slider-item"><a href="images/slider-9.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-9.jpg" alt="Image placeholder" class="img-fluid"></a></div>
              <div class="slider-item"><a href="images/slider-10.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-10.jpg" alt="Image placeholder" class="img-fluid"></a></div>
              <div class="slider-item"><a href="images/slider-11.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-11.jpg" alt="Image placeholder" class="img-fluid"></a></div>
              <div class="slider-item"><a href="images/slider-12.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-12.jpg" alt="Image placeholder" class="img-fluid"></a></div>
              <div class="slider-item"><a href="images/slider-13.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-13.jpg" alt="Image placeholder" class="img-fluid"></a></div>
              <div class="slider-item"><a href="images/slider-14.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-14.jpg" alt="Image placeholder" class="img-fluid"></a></div>
              <div class="slider-item"><a href="images/slider-15.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-15.jpg" alt="Image placeholder" class="img-fluid"></a></div>
              <div class="slider-item"><a href="images/slider-16.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-16.jpg" alt="Image placeholder" class="img-fluid"></a></div>
              <div class="slider-item"><a href="images/slider-17.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-17.jpg" alt="Image placeholder" class="img-fluid"></a></div>
              <div class="slider-item"><a href="images/slider-18.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-18.jpg" alt="Image placeholder" class="img-fluid"></a></div>
              <div class="slider-item"><a href="images/slider-19.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-19.jpg" alt="Image placeholder" class="img-fluid"></a></div>
            </div>
            <!-- END slider -->
          </div>
        
        </div>
      </div>
    </section>
    <!-- END section -->
    
    <section class="section bg-image overlay" style="background-image: url('images/hero_3.jpg');">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading text-white" data-aos="fade">Our Restaurant Menu</h2>
            <p class="text-white" data-aos="fade" data-aos-delay="100">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
        <div class="food-menu-tabs" data-aos="fade">
          <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active letter-spacing-2" id="mains-tab" data-bs-toggle="tab" href="#mains" role="tab" aria-controls="mains" aria-selected="true">Mains</a>
            </li>
            <li class="nav-item">
              <a class="nav-link letter-spacing-2" id="desserts-tab" data-bs-toggle="tab" href="#desserts" role="tab" aria-controls="desserts" aria-selected="false">Desserts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link letter-spacing-2" id="drinks-tab" data-bs-toggle="tab" href="#drinks" role="tab" aria-controls="drinks" aria-selected="false">Drinks</a>
            </li>
          </ul>
          <div class="tab-content py-5" id="myTabContent">
            <div class="tab-pane fade show active text-left" id="mains" role="tabpanel" aria-labelledby="mains-tab">
              <div class="row">
                <div class="col-md-6">
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$20.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Murgh Tikka Masala</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$35.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Fish Moilee</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$15.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Safed Gosht</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$10.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">French Toast Combo</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$8.35</span>
                    <h3 class="text-white"><a href="#" class="text-white">Vegie Omelet</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$22.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Chorizo &amp; Egg Omelet</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade text-left" id="desserts" role="tabpanel" aria-labelledby="desserts-tab">
              <div class="row">
                <div class="col-md-6">
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$11.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Banana Split</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$72.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Sticky Toffee Pudding</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$26.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Pecan</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$42.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Apple Strudel</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$7.35</span>
                    <h3 class="text-white"><a href="#" class="text-white">Pancakes</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$22.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Ice Cream Sundae</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade text-left" id="drinks" role="tabpanel" aria-labelledby="drinks-tab">
              <div class="row">
                <div class="col-md-6">
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$32.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Spring Water</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$14.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Coke, Diet Coke, Coke Zero</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$93.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Orange Fanta</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$18.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Lemonade, Lemon Squash</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$38.35</span>
                    <h3 class="text-white"><a href="#" class="text-white">Sparkling Mineral Water</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$69.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Lemon, Lime &amp; Bitters</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <!-- END section -->
    <section class="section testimonial-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading" data-aos="fade-up">People Says</h2>
          </div>
        </div>
        <div class="row">
          <div class="js-carousel-2 owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
            
            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="images/person_1.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>

                <p>&ldquo;Good value hotel.Great location.Good Staff.Nice Pool.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; Mark</em></p>
            </div> 

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="images/person_2.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>
                <p>&ldquo;Room - 10/10
                  Hotel Area - 10/10
                  Locality 100/100 Soi Bukhao 🔝
                  Staffs 100/100
                  Bathroom is Good.
                  Balcony is Awesome.
                  Room Chairs are so Good.
                  House Keeping So Good & Respectful(usually they are not in Pattaya).
                  AC is Very Good.
                  Swimming Pool is Lovely.
                  Spacious Room.
                  Wifi is Good.
                  &rdquo;</p>
              </blockquote>
              <p><em>&mdash; Prasanna</em></p>
            </div>

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="images/person_3.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>
                <p>&ldquo;location is super,2 pools are nice,aircon strong,wifi strong,everything around you never need transportation for nightlife and daily needs,beach taxi 10 or 20 baht.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; Frank</em></p>
            </div>


            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="images/person_4.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>

                <p>&ldquo;Went out of their way to find a spot to park my car.Check in always easy and no deposits.Staff are smiling and happy to get some tourist traffic.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; Redman</em></p>
            </div> 

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="images/person_5.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>
                <p>&ldquo;You are close to everything: food, buses, money changers, rentals, bars, shops.... everything you could ask for.....

                  The staff was friendly and helpful.
                  
                  The pool was clean.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; James</em></p>
            </div>

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="images/person_6.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>

                <p>&ldquo;Great value,reception staff very helpful and friendly. excellent location,will book again soon.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; Robert</em></p>
            </div>

          </div>
            <!-- END slider -->
        </div>

      </div>
    </section>
    

    <!-- <section class="section blog-post-entry bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading" data-aos="fade-up">Events</h2>
            <p data-aos="fade-up">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="100">

            <div class="media media-custom d-block mb-4 h-100">
              <a href="#" class="mb-4 d-block"><img src="images/img_1.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <span class="meta-post">February 26, 2018</span>
                <h2 class="mt-0 mb-3"><a href="#">Travel Hacks to Make Your Flight More Comfortable</a></h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>

          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="200">
            <div class="media media-custom d-block mb-4 h-100">
              <a href="#" class="mb-4 d-block"><img src="images/img_2.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <span class="meta-post">February 26, 2018</span>
                <h2 class="mt-0 mb-3"><a href="#">5 Job Types That Aallow You To Earn As You Travel The World</a></h2>
                <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="300">
            <div class="media media-custom d-block mb-4 h-100">
              <a href="#" class="mb-4 d-block"><img src="images/img_3.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <span class="meta-post">February 26, 2018</span>
                <h2 class="mt-0 mb-3"><a href="#">30 Great Ideas On Gifts For Travelers</a></h2>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. t is a paradisematic country, in which roasted parts of sentences.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <section class="section bg-image overlay" style="background-image: url('images/hero_4.jpg');">
        <div class="container" >
          <div class="row align-items-center">
            <div class="col-12 col-md-6 text-center mb-4 mb-md-0 text-md-left" data-aos="fade-up">
              <h2 class="text-white font-weight-bold">A Best Place To Stay. Reserve Now!</h2>
            </div>
            <div class="col-12 col-md-6 text-center text-md-right" data-aos="fade-up" data-aos-delay="200">
              <a href="reservation.php" class="btn btn-outline-white-primary py-3 text-white px-5">Reserve Now</a>
            </div>
          </div>
        </div>
      </section>

      <footer class="section footer-section">
        <div class="container">
          <div class="row mb-4">
            <div class="col-md-3 mb-5">
              <ul class="list-unstyled link">
                <li><a href="home.php"><img src="images/logo_sutus2.png" alt="Sutus Court Logo"></a></li>
                <li><a href="rooms.php">Rooms</a></li>
                <li><a href="rates.php">Rates</a></li>
              </ul>
            </div>
            <div class="col-md-3 mb-5">
              <ul class="list-unstyled link">
                <li><a href="facilities.php">Facilities &amp; Service</a></li>
                <li><a href="contact.php">Contact us</a></li>
                <li><a href="location.php">Location</a></li>
                <li><a href="reservation.php">Reservation</a></li>
              </ul>
            </div>
            <div class="col-md-3 mb-5 pr-md-5 contact-info">
              <p>
                <span class="d-block"><span class="ion-ios-location h5 mr-3 text-primary"></span>Address:</span>
                <span>420/100 Moo 9, Soi Buakhaw,</span><br>
                <span>Nongprue, Banglamung,</span><br>
                <span>Chon Buri 20150, Thailand.</span>
              </p>
              <p>
                <span class="d-block"><span class="ion-ios-telephone h5 mr-3 text-primary"></span>Phone:</span>
                <span><a href="tel:+66(0) 38428632-3">+66(0) 38428632-3</a></span>
              </p>
              <p>
                <span class="d-block"><span class="ion-ios-email h5 mr-3 text-primary"></span>Email:</span>
                <span><a href="mailto:sutuscourt@hotmail.com">sutuscourt@hotmail.com</a></span>
              </p>
            </div>
            <div class="col-md-3 mb-5">
              <p>Sign up for our newsletter</p>
              <form action="#" class="footer-newsletter">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email...">
                  <button type="submit" class="btn"><span class="fas fa-paper-plane"></span></button>
                </div>
              </form>
            </div>
          </div>
          <div class="row pt-5">
            <p class="col-md-6 text-left">
              &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved Sutus Court
            </p>
            <p class="col-md-6 text-right social">
              <a href="#"><span class="fab fa-facebook"></span></a>
              <a href="#"><span class="fab fa-twitter"></span></a>
              <a href="https://th.tripadvisor.com/Hotel_Review-g293919-d2283542-Reviews-Sutus_Court-Pattaya_Chonburi_Province.php" target="_blank"><img src="images/tripadvisor-icon.png" alt="TripAdvisor" class="small-icon"></a>
            </p>
          </div>
        </div>
      </footer>
      
      
      
      
    
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/fontawesome.min.js"></script>
    
    <script src="js/aos.js"></script>
    
    <script src="js/bootstrap-datepicker.js"></script> 
    <script src="js/jquery.timepicker.min.js"></script> 

    

    <script src="js/main.js"></script>
  </body>
</html>