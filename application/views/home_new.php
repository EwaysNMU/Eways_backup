<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EWAYS</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url() ?>/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>/assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>/assets/https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>/assets/css/landing-page.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo site_url() ?>">EWAYS</a>
        <div class="dropdown">
          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Sign In</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?php echo site_url() ?>/login_admin_form">Admin</a>
              <a class="dropdown-item" href="<?php echo site_url() ?>/login_student_form">Student</a>
              <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo site_url() ?>/student_register_form">Student Registration</a>
                <a class="dropdown-item" href="<?php echo site_url() ?>/student_profile">Student Profile</a>
              </div>
            </div>
      </div>
    </nav>

    <!-- Masthead -->
    <header class="masthead text-white text-center" style="background-image: url('<?php echo base_url() ?>/assets/images/bg-masthead.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">EXCELLENT WAYS OF ACHIEVING YOUR SUCCESS!</h1>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form>
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="email" class="form-control form-control-lg" placeholder="Enter your student number...">
                </div>
                <div class="col-12 col-md-3">
                  <button type="submit" class="btn btn-block btn-lg btn-primary">Register</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </header>

    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-screen-desktop m-auto text-primary"></i>
              </div>
              <h3>Fully Responsive</h3>
              <p class="lead mb-0">Learning couldn't be much easier!</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-layers m-auto text-primary"></i>
              </div>
              <h3>Landing Page</h3>
              <p class="lead mb-0">Learning couldn't be much easier!</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-check m-auto text-primary"></i>
              </div>
              <h3>Easy to Use</h3>
              <p class="lead mb-0">Learning couldn't be much easier!</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Image Showcases -->
    <section class="showcase">
      <div class="container-fluid p-0">
        <div class="row no-gutters">

          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('<?php echo base_url() ?>/assets/images/bg-showcase-1.jpg');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>GOAL SETTING</h2>
            <p class="lead mb-0">The definition of goal setting is the process of identifying something that you want to accomplish and establishing measurable goals and timeframes. When you decide on a financial change to save more money and then set a certain amount to save each month, this is an example of goal setting.</p>
            <br>
            <a class="btn btn-primary" href="<?php echo site_url() ?>/list_of_courses">More courses</a>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 text-white showcase-img" style="background-image: url('<?php echo base_url() ?>/assets/images/bg-showcase-2.jpg');"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h2>TIME MANAGEMENT</h2>
            <p class="lead mb-0">“Time management” is the process of organizing and planning how to divide your time between specific activities. Good time management enables you to work smarter – not harder – so that you get more done in less time, even when time is tight and pressures are high. Failing to manage your time damages your effectiveness and causes stress.</p>
            <br>
            <a class="btn btn-primary" href="<?php echo site_url() ?>/list_of_courses">More courses</a>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('<?php echo base_url() ?>/assets/images/bg-showcase-3.jpg');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>Tips For Exams And Tests</h2>
            <p class="lead mb-0">Tips For Exams And Tests</p>
            <br>
            <a class="btn btn-primary" href="<?php echo site_url() ?>/list_of_courses">More courses</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials text-center bg-light">
      <div class="container">
        
        <div class="row">
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="<?php echo base_url() ?>/assets/images/malcolm-x.jpg" alt="">
              <h5>Malcom X</h5>
              <p class="font-weight-light mb-0">"Education is the passport to the future, for tomorrow belongs to those who prepare for it today."</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="<?php echo base_url() ?>/assets/images/nelson_mandela.jpeg" alt="">
              <h5>Nelson Mandela</h5>
              <p class="font-weight-light mb-0">"Education is the most powerful weapon which you can use to change the world."</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="<?php echo base_url() ?>/assets/images/anthony.jpg" alt="">
              <h5>Anthony J D'angelo</h5>
              <p class="font-weight-light mb-0">"Develop a passion for learning. If you do, you will never cease to grow."</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Call to Action -->
    <section class="call-to-action text-white text-center" style="background-image: url('<?php echo base_url() ?>/assets/images/bg-masthead.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h2 class="mb-4">Ready to get started? Register now!</h2>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form>
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="email" class="form-control form-control-lg" placeholder="Enter your student number..">
                </div>
                <div class="col-12 col-md-3">
                  <button type="submit" class="btn btn-block btn-lg btn-primary">Register</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
            </ul>
            <p class="text-muted small mb-4 mb-lg-0">&copy; CTLM 2018. All Rights Reserved.</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fa fa-facebook fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fa fa-twitter fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram fa-2x fa-fw"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  </body>

</html>
