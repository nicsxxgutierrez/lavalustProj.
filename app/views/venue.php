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
        
        .card.venue-list{
            margin-bottom: 20px;
        }

        .venue-text{
            justify-content: center;
            align-items: center ;
        }

        img{
            max-width: 60vh;
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
                            <?php foreach( $venue as $venue):?>
                            <div class="col-md-6">
                                <div class="card venue-list">
                                    <div id="images"> 
                                        <img src="public/venuepics/<?= $venue['file_image']?>" alt="pictures">
                                    </div>
                                    <div class="card-body">
                                        <div class="row align-items-center justify-content-center text-center h-100"> 
                                            <div class="">
                                                <div> 
                                                    <h3><b class="filter-txt"><?= $venue['venue']?></b></h3>
                                                    <small><i><?= $venue['address']?></i></small> 
                                                </div>
                                                <div> 
                                                    <span class="truncate" style="font-size: inherit;"><small><?= $venue['description']?></small></span><br>
                                                    <span class="badge badge-secondary">
                                                    <i class="fa fa-tag"></i> Rate Per Hour: <?= $venue['rate']?></span><br><br> 
                                                    <a href="<?= site_url('/bookVenue/' . $venue['id'])?>" class =" btn btn-primary">Book Now</a>
                                                </div>
                                            </div> 
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <?php endforeach?>
                        </div>
                    </div>
                </div>
            </div>

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
                            <a class="d-block" href="mailto:eventparadise@gmail.com">eventparadise@gmail.com</a>
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
                    var venueName = $(this).closest('.card-body').find('h3').text();
                    var venueLocation = $(this).closest('.card-body').find('small').text();
                    
                    var modalContent = `<p>Booking request for <strong>${venueName}</strong> located at <em>${venueLocation}</em>.</p>`;
                    $('#bookingModal .modal-body').html(modalContent);
                    $('#bookingModal').modal('show');
                });

                $('.venue-list .carousel img').click(function () {
                });

            </script>

  </body>
</html>