<!DOCTYPE html>
<html lang="en">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Event Management System</title>
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
  <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
  <link href="admin/assets/css/jquery.datetimepicker.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
  <link href="admin/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
  <link href="public/admin/css/styles.css" rel="stylesheet" />
  <link href="admin/assets/css/select2.min.css" rel="stylesheet">
  <script src="admin/assets/vendor/jquery/jquery.min.js"></script>
  <script src="admin/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="admin/assets/js/select2.min.js"></script>
  <script type="text/javascript" src="admin/assets/js/jquery.datetimepicker.full.min.js"></script>

  <style>
      header.masthead {
		    background-image: url('/public/homebg.jpg');
		    background-repeat: no-repeat;
		    background-size: cover;
		  }

      body {
        background-image: url('/public/homebg.jpg');
      }

      footer {
        background: #000000e6 !important;
        position: relative;
        height: 350px;
        width: 100%;
        background-color: #333333;
      }

      p.copyright {
        position: absolute;
        width: 100%;
        color: #fff;
        font-size: 1em;
        text-align: center;
        bottom: 0;
      }
  </style>
    
    <body id="page-top">
      <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body text-white"></div>
      </div>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
          <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="./">Event Management System</a>
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="home">Home</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="venue">Venues</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="login">Logout</a></li>                     
                  </ul>
              </div>
          </div>
        </nav>
      
        <?php 
          $page = isset($_GET['page']) ?$_GET['page'] : "home";
          include $page.'.php';
        ?>
    </body>
</html>