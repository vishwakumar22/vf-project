<?php 

$servername="localhost";
$username="root";
$password="";
$dbname="interior";


$con=mysqli_connect($servername,$username,$password,$dbname);

if (!$con) {
    echo "database not connected". mysqli_connect_error();
}

?>




<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8' />
    <title>Vishwakarma Interiors</title>
    <meta content='width=device-width, initial-scale=1.0' name='viewport' />
    <meta content='Construction Company Website Template' name='keywords' />
    <meta content='Construction Company Website Template' name='description' />

    <!-- Favicon -->
    <link href='img/favicon.ico' rel='icon' />

    <!-- Google Font -->
    <link
      href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap'
      rel='stylesheet'
    />

    <!-- CSS Libraries -->
    <link
      href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'
      rel='stylesheet'
    />
    <link
      href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css'
      rel='stylesheet'
    />
    <link href='lib/flaticon/font/flaticon.css' rel='stylesheet' />
    <link href='lib/animate/animate.min.css' rel='stylesheet' />
    <link href='lib/owlcarousel/assets/owl.carousel.min.css' rel='stylesheet' />
    <link href='lib/lightbox/css/lightbox.min.css' rel='stylesheet' />
    <link href='lib/slick/slick.css' rel='stylesheet' />
    <link href='lib/slick/slick-theme.css' rel='stylesheet' />

    <!-- Template Stylesheet -->
    <link href='css/style.css' rel='stylesheet' />
  </head>

  <body>
    <div class='wrapper'>
      <!-- Top Bar Start -->
      <div class='top-bar'>
        <div class='container-fluid'>
          <div class='row align-items-center'>
            <div class='col-lg-4 col-md-12'>
              <div class='logo'>
                <a href='index.html'>
                  <h3>Vishwakarma Interiors</h3>
                  <!-- <img src='img/logo.jpg' alt='Logo'> -->
                </a>
              </div>
            </div>
            <div class='col-lg-8 col-md-7 d-none d-lg-block'>
              <div class='row'>
                <div class='col-4'>
                  <div class='top-bar-item'>
                    <div class='top-bar-icon'>
                      <i class='flaticon-calendar'></i>
                    </div>
                    <div class='top-bar-text'>
                      <h3>Opening Hour</h3>
                      <p>Mon - Fri, 9:00 - 6:00</p>
                    </div>
                  </div>
                </div>
                <div class='col-4'>
                  <div class='top-bar-item'>
                    <div class='top-bar-icon'>
                      <i class='flaticon-call'></i>
                    </div>
                    <div class='top-bar-text'>
                      <h3>Call Us</h3>
                      <p>+91 998 873 4743</p>
                    </div>
                  </div>
                </div>
                <div class='col-4'>
                  <div class='top-bar-item'>
                    <div class='top-bar-icon'>
                      <i class='flaticon-send-mail'></i>
                    </div>
                    <div class='top-bar-text'>
                      <h3>Email Us</h3>
                      <p>vishwakarma@gmail.com</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Top Bar End -->

      <!-- Nav Bar Start -->
      <div class='nav-bar'>
        <div class='container-fluid'>
          <nav class='navbar navbar-expand-lg bg-dark navbar-dark'>
            <a href='#' class='navbar-brand'>MENU</a>
            <button
              type='button'
              class='navbar-toggler'
              data-toggle='collapse'
              data-target='#navbarCollapse'
            >
              <span class='navbar-toggler-icon'></span>
            </button>

            <div
              class='collapse navbar-collapse justify-content-between'
              id='navbarCollapse'
            >
              <div class='navbar-nav mr-auto'>
                <a href='index.html' class='nav-item nav-link'>Home</a>
                <a href='about.html' class='nav-item nav-link'>About</a>
                <a href='service.html' class='nav-item nav-link'>Service</a>
                <a href='team.html' class='nav-item nav-link'>Team</a>
                <a href='portfolio.html' class='nav-item nav-link active'
                  >Project</a
                >

                <a href='contact.html' class='nav-item nav-link'>Contact</a>
              </div>
              <div class='ml-auto'>
                <a class='btn' href='signup.html'>User Login</a>
                <a class='btn' href='admin.html'>Admin Login</a>
              </div>
            </div>
          </nav>
        </div>
      </div>
      <!-- Nav Bar End -->

      <!-- Page Header Start -->
      <div class='page-header'>
        <div class='container'>
          <div class='row'>
            <div class='col-12'>
              <h2>Our Projects</h2>
            </div>
            <div class='col-12'>
              <a href=''>Home</a>
              <a href=''>Our Projects</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Page Header End -->

      <!-- Portfolio Start -->
      <?php 
        
        
        include('config.php');
  
        $sql="SELECT * FROM `projects`";
  
        $result=mysqli_query($con,$sql);
        if (mysqli_num_rows($result)>0) {
            echo "

            <div class='portfolio'>
                    <div class='container'>
                      <div class='section-header text-center'>
                        <p>Our Projects</p>
                        <h2>Visit Our Projects</h2>
                      
                        </div>
                        <div class='row portfolio-container'>
          ";
                        
            while ($rows=mysqli_fetch_assoc($result)) {
                echo "<div
                class='col-lg-4 col-md-6 col-sm-12 portfolio-item first wow fadeInUp'
                data-wow-delay='0.1s'
              >
                <div class='portfolio-warp'>
                  <div class='portfolio-img'>
                    <img src='img/{$rows['project_images']}' alt='Image' height='200px' width='150px' />
                    <div class='portfolio-overlay'>
                      <p>{$rows['project_desc']}
                        </p>
                    </div>
                  </div>
  
                  <div class='portfolio-text'>
                    <h3>{$rows['project_name']}</h3>
                    <a
                      class='btn'
                      href='img/{$rows['project_images']}'
                      data-lightbox='portfolio'
                      >+</a
                    >
                  </div>
                </div>
              </div>";
            }
            
        }
        mysqli_close($con);
        
        ?>
      <!-- Portfolio End -->

      <!-- Footer Start -->


      <!-- Footer End -->

      <a href='#' class='back-to-top'><i class='fa fa-chevron-up'></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
    <script src='lib/easing/easing.min.js'></script>
    <script src='lib/wow/wow.min.js'></script>
    <script src='lib/owlcarousel/owl.carousel.min.js'></script>
    <script src='lib/isotope/isotope.pkgd.min.js'></script>
    <script src='lib/lightbox/js/lightbox.min.js'></script>
    <script src='lib/waypoints/waypoints.min.js'></script>
    <script src='lib/counterup/counterup.min.js'></script>
    <script src='lib/slick/slick.min.js'></script>

    <!-- Template Javascript -->
    <script src='js/main.js'></script>
  </body>
</html>



