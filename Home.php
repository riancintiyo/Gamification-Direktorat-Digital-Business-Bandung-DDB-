<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DDB</title>

    <!-- slick -->
    <!-- <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    

    <!-- Bootstrap -->
    <link rel="shortcut icon" href="/Images/Bdv.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="normailize.css"/>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">

    <?php 
      $con =  mysqli_connect("localhost","root","","DDB");
	  session_start();
      if($_SESSION['status'] != "login"){
        header("location:login.php");
      }
    ?>

</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm fixed-top navbar-light" id="navbar">
        <div class="container">
            <a class="navbar-brand img-responsive logo" href="#home"><img src="Images/DDB_Logo.png" alt="Logo" width="88" height="82"></a>
            <div class="btn-group" role="group text-center">
                <button type="button" class="btn1" href="signup.php">Sign Up</button>
                <button type="button" class="btn2" href="login.php">Login</button>
            </div>
        </div>
    </nav>
    <script >
       $(function() {
            $(window).on("scroll", function() {
                if($(window).scrollTop() > 30) {
                    $(".navbar").addClass("active");
                } else {
                    //remove the background property so it comes transparent again (defined in your css)
                $(".navbar").removeClass("active");
                }
            });
        });
    </script>
    <!-- end nav -->

    <!-- section1 -->
    <div class="container-fluid " id="section1">
        <section>
            <div class="row-sec1">
                    <div class="col-sec1" >
                        <h1>Direktorak Digital Business</h1>
                        <h1>Direkorat Digital Business Bandung</h1>
                    </div>
            </div>
        </section>
    </div>
    <!-- end section1 -->

    <!-- section2 -->
    <div class="container-2" id="section2">
        <section class="container">
            <div class="row">
                <div class="col">
                    <div class='inner-container'>
                        <div class="background-container"></div>
                        <div class="subheading-2" style="position: absolute">
                                <h1>ABOUT Direktorat Digital Busines</h1>
                                <h2>DDB<br></h2>
                                <p>Divisi Digital Business (DDB)<br> merupakan bagian dari PT Telkom Indonesia (Persero) Tbk (Telkom).<br> PT Telkom Indonesia adalah Badan Usaha Milik Negara (BUMN) <br>yang bergerak di bidang jasa layanan teknologi informasi dan komunikasi (TIK) <br>dan jaringan telekomunikasi di Indonesia. </p>
                        </div>
                    </div>
             </div>
            </div>    
        </section>
    </div>
    <!-- end section 2 -->

    <!-- section 3 -->
    <div class="section-4">
        <div class="container">
            <h1>Our Vision</h1>
        </div>
        <div class="container container-4 ">
            <div class="col-lg-3 col-md-6" id="box">
                <h5>Program</h5>

            </div>
            <div class="col-lg-3 col-md-6" id="box">
                <h5>Product</h5>
            </div>
            <div class="col-lg-3 col-md-6" id="box">
                <h5>Event</h5>
            </div>
        </div>
    </div>
    
     <footer class="page-footer font-small blue pt-4">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">
      
          <!-- Grid row -->
          <div class="row footer">
      
            <!-- Grid column -->
            <div class="col-md-3 mt-md-0 mt-3">
      
              <!-- Content -->
              <h5 class="text-h">Direktorat Digital Business</h5>
              <h6>Description</h6>
              <p class="tp">Divisi Digital Business (DDB) merupakan bagian dari PT Telkom Indonesia (Persero) Tbk (Telkom). PT Telkom Indonesia adalah Badan Usaha Milik Negara (BUMN) yang bergerak di bidang jasa layanan teknologi informasi dan komunikasi (TIK) dan jaringan telekomunikasi di Indonesia. </p>

      
            </div>
            <!-- Grid column -->
      
            <hr class="clearfix w-100 d-md-none pb-3">
      
            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">
      
              <!-- Links -->
              <h5 class="text-h">Latest Events</h5>
              <h6>Description</h6>
              <div class="tp">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate venenatis massa, quis volutpat ligula. In id magna in orci maximus maximus. Nullam nec sagittis velit.</p>
            </div>
            </div>
            <!-- Grid column -->
      
            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">
      
              <!-- Links -->
              <h5 class="text-h">Upcoming events</h5>
              <h6>Description</h6>
              <div class="tp">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate venenatis massa, quis volutpat ligula. In id magna in orci maximus maximus. Nullam nec sagittis velit. </p>
            </div>
            </div>
            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">
      
                    <!-- Links -->
                    <h5 class="text-h">Contact Us</h5>
                    <h6>Description</h6>
                    <div class="tp">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate venenatis massa, quis volutpat ligula. In id magna in orci maximus maximus. Nullam nec sagittis velit.</p>
                    </div>
                  </div>
      
          </div>
          <!-- Grid row -->
      
        </div>
        <!-- Footer Links -->
      
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">
            Direktorat Digital Business<br>
          Copyright 2021
        </div>
        <!-- Copyright -->
      
      </footer>
    <!-- end section4 -->
    </body>
</html>