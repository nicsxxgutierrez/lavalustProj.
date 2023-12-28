<!DOCTYPE html>
<html lang="en">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Venue</title>
  <link rel="icon" type="image/x-icon" href="public/admin/assets/img/favicon.ico" />
  <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
  <link href="public/admin/assets/css/jquery.datetimepicker.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
  <link href="public/admin/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
  <link href="public/css/styles.css" rel="stylesheet" />
  <link href="public/admin/assets/css/select2.min.css" rel="stylesheet">
  <script src="public/admin/assets/vendor/jquery/jquery.min.js"></script>
  <script src="public/admin/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="public/admin/assets/js/select2.min.js"></script>
  <script type="text/javascript" src="public/admin/assets/js/jquery.datetimepicker.full.min.js"></script>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        header.masthead {
		    background-image: url("public/homebg.jpg");
		    background-repeat: no-repeat;
		    background-size: cover;
		}

        #portfolio .img-fluid{
            width: calc(100%);
            height: 30vh;
            z-index: -1;
            position: relative;
            padding: 1em;
        }

        body {
            background: #404040 !important;
        }

        .venue-list{
            cursor: pointer;
            border: unset;
            flex-direction: inherit;
        }
        
        .venue-list .carousel,.venue-list .card-body {
            width: calc(50%)
        }

        .venue-list .carousel img.d-block.w-100 {
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            min-height: 50vh;
        }

        span.hightlight{
            background: yellow;
        }
        .carousel,.carousel-inner,.carousel-item{
            min-height: calc(100%)
        }

        header.masthead,header.masthead:before {
            min-height: 50vh !important;
            height: 50vh !important
        }

        .row-items{
            position: relative;
        }

        .card-left{
            left:0;
        }

        .card-right{
            right:0;
        }
        
        .venue-text{
            justify-content: center;
            align-items: center ;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        footer {
            background: #000000e6 !important;
            position: absolute;
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

    <body>
        <header class="masthead">
        </header>
            <div class="container-fluid mt-3 pt-2">
                <h4 class="text-center text-white">List of Our Venues for Events</h4>
                <hr class="divider">
                <div class="row-items">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card venue-list">
                                    <div id="imagesCarousel_card-img-top" class="carousel slide" data-ride="carousel"><img src="public/venuepics/ujwallpaper.png" alt="Uncle Jov's"></div>
                                        <div class="card-body">
                                            <div class="row align-items-center justify-content-center text-center h-100">
                                                <div class="">
                                                    <div>
                                                        <h3><b class="filter-txt">Uncle Jov's</b></h3>
                                                        <small><i>Roxas Dr 5200 Calapan Oriental Mindoro</i></small>
                                                    </div>
                                                    <div>
                                                        <span class="truncate" style="font-size: inherit;"><small>Uncle Jov's is famous for their burgers, this place is perfect for Celebrating Parties and hanging out with family and friends.</small></span>
                                                        <br>
                                                        <span class="badge badge-secondary"><i class="fa fa-tag"></i> Rate Per Hour: 300</span>
                                                        <br><br>
                                                        <button class="btn btn-primary book-venue align-self-end" type="button" data-toggle="modal" data-target="#bookingModal">Book</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div><br>

                            <div class="col-md-6">
                                <div class="card venue-list">
                                    <div id="imagesCarousel_card-img-top" class="carousel slide" data-ride="carousel"><img src="public/venuepics/ujwallpaper.png" alt="Halcon's"></div>
                                        <div class="card-body">
                                            <div class="row align-items-center justify-content-center text-center h-100">
                                                <div class="">
                                                    <div>
                                                        <h3><b class="filter-txt">Halcon's Bar and Resto</b></h3>
                                                        <small><i>Filipiniana Complex, Sto. Niño 5200 Calapan City, Oriental Mindoro</i></small>
                                                    </div>
                                                    <div>
                                                        <span class="truncate" style="font-size: inherit;"><small>Best choice for Birthday Party, Wedding, and other Occations.</small></span>
                                                        <br>
                                                        <span class="badge badge-secondary"><i class="fa fa-tag"></i> Rate Per Hour: 250</span>
                                                        <br><br>
                                                        <button class="btn btn-primary book-venue align-self-end" type="button" data-toggle="modal" data-target="#bookingModal">Book</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div><br>

                            <div class="col-md-6">
                                <div class="card venue-list">
                                    <div id="imagesCarousel_card-img-top" class="carousel slide" data-ride="carousel"><img src="public/venuepics/ujwallpaper.png" alt="Orange Dutch Cafe"></div>
                                        <div class="card-body">
                                            <div class="row align-items-center justify-content-center text-center h-100">
                                                <div class="">
                                                    <div>
                                                        <h3><b class="filter-txt">Orange Dutch Cafe</b></h3>
                                                        <small><i>J.P Rizal Street, 5200, Calapan City, Oriental Mindoro</i></small>
                                                    </div>
                                                    <div>
                                                        <span class="truncate" style="font-size: inherit;"><small>Private Birthday Party, Wedding and other Occations with family and some guests.</small></span>
                                                        <br>
                                                        <span class="badge badge-secondary"><i class="fa fa-tag"></i> Rate Per Hour: 280</span>
                                                        <br><br>
                                                        <button class="btn btn-primary book-venue align-self-end" type="button" data-toggle="modal" data-target="#bookingModal">Book</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div><br>

                            <div class="col-md-6">
                                <div class="card venue-list">
                                    <div id="imagesCarousel_card-img-top" class="carousel slide" data-ride="carousel"><img src="public/venuepics/ujwallpaper.png" alt="Blossom's"></div>
                                        <div class="card-body">
                                            <div class="row align-items-center justify-content-center text-center h-100">
                                                <div class="">
                                                    <div>
                                                        <h3><b class="filter-txt">Blossom Food Delight</b></h3>
                                                        <small><i>J.P. Rizal Street, San Vicente North Mimaropa</i></small>
                                                    </div>
                                                    <div>
                                                        <span class="truncate" style="font-size: inherit;"><small>Private Parties, Weddings, Birthday party, with limited participants.</small></span>
                                                        <br>
                                                        <span class="badge badge-secondary"><i class="fa fa-tag"></i> Rate Per Hour: 500</span>
                                                        <br><br>
                                                        <button class="btn btn-primary book-venue align-self-end" type="button" data-toggle="modal" data-target="#bookingModal">Book</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div><br>

                            <div class="col-md-6">
                                <div class="card venue-list">
                                    <div id="imagesCarousel_card-img-top" class="carousel slide" data-ride="carousel"><img src="public/venuepics/ujwallpaper.png" alt="Cafe Meow"></div>
                                        <div class="card-body">
                                            <div class="row align-items-center justify-content-center text-center h-100">
                                                <div class="">
                                                    <div>
                                                        <h3><b class="filter-txt">Cafe Meow</b></h3>
                                                        <small><i>Ilaya, 5200, Calapan City, Oriental Mindoro</i></small>
                                                    </div>
                                                    <div>
                                                        <span class="truncate" style="font-size: inherit;"><small>Birthday parties, Celebrating Occations with selected guest like family, friends, or co-workers.</small></span>
                                                        <br>
                                                        <span class="badge badge-secondary"><i class="fa fa-tag"></i> Rate Per Hour: 250</span>
                                                        <br><br>
                                                        <button class="btn btn-primary book-venue align-self-end" type="button" data-toggle="modal" data-target="#bookingModal">Book</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div><br>

                            <div class="col-md-6">
                                <div class="card venue-list">
                                    <div id="imagesCarousel_card-img-top" class="carousel slide" data-ride="carousel"><img src="public/venuepics/ujwallpaper.png" alt="Tagpuan Bistro"></div>
                                        <div class="card-body">
                                            <div class="row align-items-center justify-content-center text-center h-100">
                                                <div class="">
                                                    <div>
                                                        <h3><b class="filter-txt">Tagpuan Bistro</b></h3>
                                                        <small><i>2f Tomas Montellano Bldg., Gov.Infantado St., Sta. Maria Village , 5200, Calapan City, Oriental Mindoro</i></small>
                                                    </div>
                                                    <div>
                                                        <span class="truncate" style="font-size: inherit;"><small>You can celebrate here with your friends and family.</small></span>
                                                        <br>
                                                        <span class="badge badge-secondary"><i class="fa fa-tag"></i> Rate Per Hour: 150</span>
                                                        <br><br>
                                                        <button class="btn btn-primary book-venue align-self-end" type="button" data-toggle="modal" data-target="#bookingModal">Book</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div><br>

                            <div class="col-md-6">
                                <div class="card venue-list">
                                    <div id="imagesCarousel_card-img-top" class="carousel slide" data-ride="carousel"><img src="public/venuepics/ujwallpaper.png" alt="Shakey's Pizza Parlor"></div>
                                        <div class="card-body">
                                            <div class="row align-items-center justify-content-center text-center h-100">
                                                <div class="">
                                                    <div>
                                                        <h3><b class="filter-txt">Shakey's Pizza Parlor</b></h3>
                                                        <small><i>J.P. Rizal Street, Brgy. Camilmil, Calapan City, Oriental Mindoro</i></small>
                                                    </div>
                                                    <div>
                                                        <span class="truncate" style="font-size: inherit;"><small>Perfect place to conduct any social gatherings.</small></span>
                                                        <br>
                                                        <span class="badge badge-secondary"><i class="fa fa-tag"></i> Rate Per Hour: 200</span>
                                                        <br><br>
                                                        <button class="btn btn-primary book-venue align-self-end" type="button" data-toggle="modal" data-target="#bookingModal">Book</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div><br>

                            <div class="col-md-6">
                                <div class="card venue-list">
                                    <div id="imagesCarousel_card-img-top" class="carousel slide" data-ride="carousel"><img src="public/venuepics/ujwallpaper.png" alt="Filipiniana Hotel"></div>
                                        <div class="card-body">
                                            <div class="row align-items-center justify-content-center text-center h-100">
                                                <div class="">
                                                    <div>
                                                        <h3><b class="filter-txt">Filipiniana Hotel</b></h3>
                                                        <small><i>M. Roxas St., Brgy Sto. Nino, Calapan City, Oriental Mindoro</i></small>
                                                    </div>
                                                    <div>
                                                        <span class="truncate" style="font-size: inherit;"><small>Perfect place to conduct big social gatherings like wedding or party.</small></span>
                                                        <br>
                                                        <span class="badge badge-secondary"><i class="fa fa-tag"></i> Rate Per Hour: 850</span>
                                                        <br><br>
                                                        <button class="btn btn-primary book-venue align-self-end" type="button" data-toggle="modal" data-target="#bookingModal">Book</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div><br>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal" id="bookingModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Booking Request</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <label for="fname">Full Name</label><br>
                            <input type="text" id="fname" name="fname" placeholder="Enter your Full Name"><br>

                            <label for="fname">Address</label><br>
                            <textarea type="text" id="fname" name="fname" placeholder="Enter your Address"></textarea><br>
                            
                            <label for="fname">Email</label><br>
                            <input type="text" id="fname" name="fname" placeholder="Enter your Email"><br>

                            <label for="fname">Contact</label><br>
                            <input type="text" id="fname" name="fname" placeholder="Enter your contact number"><br>

                            <label for="fname">Duration</label><br>
                            <input type="text" id="fname" name="fname" placeholder="Enter how many days you will stay"><br>

                            <label for="fname">Desired Event Schedule</label><br>
                            <input type="datetime-local" id="Test_DatetimeLocal">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Submit Booking</button>
                    </div>
                    </div>
                </div>
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

            <footer class="py-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center">
                            <h2 class="mt-0 text-white">Contact us</h2>
                            <hr class="divider my-4" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                            <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                            <div class="text-white">+639488542623</div>
                        </div>
                        <div class="col-lg-4 mr-auto text-center">
                            <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                            <a class="d-block" href="mailto:event@gmail.com">event@gmail.com</a>
                        </div>
                    </div>
                </div>
                    <p class="copyright">&copy;Copyright | <a href="https://youtu.be/D8VEhcPeSlc?si=1Z0Jf_6w1xaFRWD9"> Event </a></p>
            </footer>

            <script>
                $('.book-venue').click(function(){
                    uni_modal("Submit Booking Request","booking.php?venue_id="+$(this).attr('data-id'))
                })
                $('.venue-list .carousel img').click(function(){
                    viewer_modal($(this).attr('src'))
                })
                $('.book-venue').click(function () {
                    // Set the modal content dynamically based on the venue details
                    var venueName = $(this).closest('.card-body').find('h3').text();
                    var venueLocation = $(this).closest('.card-body').find('small').text();
                    
                    // You can customize the modal content here
                    var modalContent = `<p>Booking request for <strong>${venueName}</strong> located at <em>${venueLocation}</em>.</p>`;

                    // Set the modal content
                    $('#bookingModal .modal-body').html(modalContent);

                    // Show the modal
                    $('#bookingModal').modal('show');
                });

                $('.venue-list .carousel img').click(function () {
                    // You can implement your image viewer logic here
                });

            </script>

  </body>
</html>