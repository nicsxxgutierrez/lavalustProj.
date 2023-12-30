<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="public/admin/assets/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="public/admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/admin/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="public/admin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="public/admin/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="public/admin/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="public/admin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="public/admin/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="public/admin/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="public/admin/assets/DataTables/datatables.min.css" rel="stylesheet">
    <link href="public/admin/assets/css/jquery.datetimepicker.min.css" rel="stylesheet">
    <link href="public/admin/assets/css/select2.min.css" rel="stylesheet">
    <link href="public/admin/assets/css/style.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="public/admin/assets/css/jquery-te-1.4.0.css">
</head>
<body>
    <style>
        body{
            background: #80808045;
        }
        .modal-dialog.large {
            width: 80% !important;
            max-width: unset;
        }
        .modal-dialog.mid-large {
            width: 50% !important;
            max-width: unset;
        }
        #viewer_modal .btn-close {
            position: absolute;
            z-index: 999999;
            /*right: -4.5em;*/
            background: unset;
            color: white;
            border: unset;
            font-size: 27px;
            top: 0;
        }
        #viewer_modal .modal-dialog {
            width: 80%;
            max-width: unset;
            height: calc(90%);
            max-height: unset;
        }
        #viewer_modal .modal-content {
            background: black;
            border: unset;
            height: calc(100%);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #viewer_modal img,#viewer_modal video{
            max-height: calc(100%);
            max-width: calc(100%);
        }
        span.float-right.summary_icon {
            font-size: 3rem;
            position: absolute;
            right: 1rem;
            color: #ffffff96;
        }
        .imgs{
            margin: .5em;
            max-width: calc(100%);
            max-height: calc(100%);
        }
        .imgs img{
            max-width: calc(100%);
            max-height: calc(100%);
            cursor: pointer;
        }
        #imagesCarousel,#imagesCarousel .carousel-inner,#imagesCarousel .carousel-item{
            height: 60vh !important;background: black;
        }
        #imagesCarousel .carousel-item.active{
            display: flex !important;
        }
        #imagesCarousel .carousel-item-next{
            display: flex !important;
        }
        #imagesCarousel .carousel-item img{
            margin: auto;
        }
        #imagesCarousel img{
            width: auto!important;
            height: auto!important;
            max-height: calc(100%)!important;
            max-width: calc(100%)!important;
        }

        .collapse a{
		    text-indent:10px;
        }
        nav#sidebar{
            background-image: url("public/homebg.jpg");
        }
    </style>

        <nav class="navbar navbar-light fixed-top bg-primary" style="padding:0;min-height: 4.5rem">
            <div class="container-fluid mt-2 mb-2">
                <div class="col-lg-12">
                    <div class="col-md-1 float-left" style="display: flex;"></div>
                    <div class="col-md-4 float-left text-white">
                        <large><b>Event Management System</b></large>
                    </div>
                    <div class="float-right">
                        <div class=" dropdown mr-4">
                            <a href="#" class="text-white dropdown-toggle"  id="account_settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administrator </a>
                                <div class="dropdown-menu" aria-labelledby="account_settings" style="left: -2.5em;">
                                    <a class="dropdown-item" href="adminlogin"><i class="fa fa-power-off"></i> Logout</a>
                                </div>
            </div>
        </nav>
        <br><br><br>
        <nav id="sidebar" class='mx-lt-5 bg-dark' >
            <div class="sidebar-list">
                <a href="adminhome" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Home</a>
                <a href="adminvenue_book" class="nav-item nav-booking"><span class='icon-field'><i class="fa fa-th-list"></i></span> Venue Book List</a>
                <a href="adminvenues" class="nav-item nav-venue"><span class='icon-field'><i class="fa fa-map-marked-alt"></i></span> Venues</a>
                <a class="nav-item nav-reports" data-toggle="collapse" href="#reportCollpase" role="button" aria-expanded="false" aria-controls="reportCollpase"><span class='icon-field'><i class="fa fa-file"></i></span> Reports <i class="fa fa-angle-down float-right"></i></a>
                <div class="collapse" id="reportCollpase">
                    <a href="adminaudience_report" class="nav-item nav-audience_report"><span class='icon-field'></span> Audience Report</a>
                    <a href="adminvenue_report" class="nav-item nav-venue_report"><span class='icon-field'></span> Venue Report</a>
                </div>
                <a href="adminusers" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Users</a>
            </div>
        </nav>

        <script>
                $('.nav_collapse').click(function(){
                    console.log($(this).attr('href'))
                    $($(this).attr('href')).collapse()
                })
                $('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
            </script>

            <script src="public/admin/assets/vendor/jquery/jquery.min.js"></script>
            <script src="public/admin/assets/DataTables/datatables.min.js"></script>
            <script src="public/admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="public/admin/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
            <script src="public/admin/assets/vendor/php-email-form/validate.js"></script>
            <script src="public/admin/assets/vendor/venobox/venobox.min.js"></script>
            <script src="public/admin/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
            <script src="public/admin/assets/vendor/counterup/counterup.min.js"></script>
            <script src="public/admin/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
            <script src="public/admin/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
            <script type="text/javascript" src="public/admin/assets/js/select2.min.js"></script>
            <script type="text/javascript" src="public/admin/assets/js/jquery.datetimepicker.full.min.js"></script>
            <script type="text/javascript" src="public/admin/assets/font-awesome/js/all.min.js"></script>
            <script type="text/javascript" src="public/admin/assets/js/jquery-te-1.4.0.min.js" charset="utf-8"></script>
</body>
</html>