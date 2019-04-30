<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>The tattoo Shop</title>

  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/stylish-portfolio.css" rel="stylesheet">
  <link href="css/custom.css"  rel="stylesheet">
</head>

<body id="page-top">

  <!-- Navigation -->

  <a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">
        <a class="js-scroll-trigger" href="#page-top">MENU</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#page-top">Khomsa</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#about">Schedule an appointement</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#services">Services</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#portfolio">Portfolio</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#contact">Contact</a>
      </li>
    </ul>
  </nav>

  <!-- Header -->
    
  <header class="masthead d-flex">
    <p class="brand" style="margin-left: 50px">KHOMSA</p>
    <div class="container text-center my-auto"  >
      <h1 class="mb-1" style="background-color: #fec610d7; margin-left: -20% ">THE TATTOO SHOP</h1>
      <h3 class="mb-5">
        <em style="background-color: #fec610d7; margin-left: -20% ">The place for the free spirits</em>
      </h3>
      <a class="btn btn-xl btn-primary js-scroll-trigger" style=" margin-left: -20%" href="#about">Schedule an appointement</a>
    </div>
    <div class="overlay"></div>
  </header>

  <!-- About -->
  <section class="content-section bg-light" id="about">
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <h2 style="margin-bottom: -110px">Schedule an appointement</h2>
          <div id="booking" class="section">
            <div class="section-center">
              <div class="container">
                <div class="row">
                  <div class="booking-form">
                    
                  <form id="Id_form" action="http://localhost/tatoo%20shop/Handlers/appointment.php" method="POST">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <span class="form-label">Name</span>
                          <input name="name" class="form-control" type="text" placeholder="Enter your name">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <span class="form-label">Email</span>
                          <input name="email" class="form-control" type="email" placeholder="Enter your email">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <span class="form-label">Phone</span>
                      <input name="phone" class="form-control" type="tel" placeholder="Enter your phone number">
                    </div>

                    <div class="row">
                      <div class="col-sm-5">
                        <div class="form-group">
                          <span class="form-label">Date</span>
                          <input name="date" class="form-control" type="date" required>
                        </div>
                      </div>
                      <div class="col-sm-7">
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group">
                              <span class="form-label">Hour</span>
                              <select name="hour" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                              </select>
                              <span class="select-arrow"></span>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <span class="form-label">Min</span>
                              <select name="min" class="form-control">
                                <option value="05">05</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                <option value="25">25</option>
                                <option value="30">30</option>
                                <option value="35">35</option>
                                <option value="40">40</option>
                                <option value="45">45</option>
                                <option value="50">50</option>
                                <option value="55">55</option>
                              </select>
                              <span class="select-arrow"></span>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <span class="form-label">AM/PM</span>
                              <select name="amap" class="form-control">
                                <option  value="AM">AM</option>
                                <option  value="PM">PM</option>
                              </select>
                              <span class="select-arrow"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-btn">
                              <button class="submit-btn" type="submit">Schedule</button>
                    </div>
                  </form>
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section class="content-section bg-primary text-white text-center" id="services">
    <div class="container">
      <div class="content-section-heading">
        <h3 class="text-secondary mb-0">Services</h3>
        <h2 class="mb-5">What We Offer</h2>
      </div>
      <div class="row">
        <div class="col-sm">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-pencil"></i >
          </span>
          <h4>
            <strong>Design</strong>
          </h4>
          
        </div>
        <div class="col-sm">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-pencil"></i>
          </span>
          <h4>
            <strong>Application</strong>
          </h4>
        </div>
        <div class="col-sm">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-mustache"></i>
          </span>
          <h4>
            <strong>Answers to your Questions</strong>
          </h4>
        </div>
      </div>
    </div>
  </section>

  <!-- Callout -->
  <section class="callout">
    <div class="container text-center">
      <h2 class="mx-auto mb-5">Got
        <em>any</em>
        Questions?</h2>
      <a class="btn btn-primary btn-xl" href="#contact">Contact us now </a>
    </div>
  </section>

  <!-- Portfolio -->
  <section class="content-section" id="portfolio">
    <div class="container">
      <div class="content-section-heading text-center">
        <h3 class="text-secondary mb-0">Portfolio</h3>
        <h2 class="mb-5">Recent Projects</h2>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6">
          <a class="portfolio-item" href="#">
            <span class="caption">
              <span class="caption-content">
                <h2>Writing</h2>
                <p class="mb-0">write what is close to your heart!</p>
              </span>
            </span>
            <img class="img-fluid" src="img/lady.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="#">
            <span class="caption">
              <span class="caption-content">
                <h2>Map</h2>
                <p class="mb-0">Do you love the world? tattoo it on your hand!</p>
              </span>
            </span>
            <img class="img-fluid" src="img/map.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="#">
            <span class="caption">
              <span class="caption-content">
                <h2>Figures</h2>
                <p class="mb-0"> Get simple and beautiful shapes</p>
              </span>
            </span>
            <img class="img-fluid" src="img/woman.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="#">
            <span class="caption">
              <span class="caption-content">
                <h2>Animal</h2>
                <p class="mb-0">Tattoo your inner animal on your body</p>
              </span>
            </span>
            <img class="img-fluid" src="img/leg.jpg" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="content-section bg-primary text-white">
    <div class="container text-center">
      
    </div>
  </section>

  <!-- Map -->
  <section id="contact" class="map">
    <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=676%20INSAT%20Centre%20Urbain%20Nord%20BP%D8%8C%20Tunis%20Cedex%201080+(The%20Tattoo%20shop)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed"></iframe>
    <br />
    <small>
      <a href="https://www.maps.ie/map-my-route/"></a>
    </small>
  </section>

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
        <h2 style="margin-bottom: 120px">Contact us</h2>
      <ul class="list-inline mb-5">
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="#">
            <i class="icon-social-facebook"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="#">
            <i class="icon-social-youtube"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white" href="#">
            <i class="icon-social-instagram"></i>
          </a>
        </li>
      </ul>
     
    </div>
  </footer>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/stylish-portfolio.min.js"></script>

</body>

</html>
