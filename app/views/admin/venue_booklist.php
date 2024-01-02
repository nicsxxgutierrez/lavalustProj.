<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venue Booking List</title>
</head>
<body>
    <style>
        body{
            background: #80808045;
        }

        input[type=checkbox]
        {
            /* Double-sized Checkboxes */
            -ms-transform: scale(1.5); /* IE */
            -moz-transform: scale(1.5); /* FF */
            -webkit-transform: scale(1.5); /* Safari and Chrome */
            -o-transform: scale(1.5); /* Opera */
            transform: scale(1.5);
            padding: 10px;
        }

        td{
            vertical-align: middle !important;
        }

        td p{
            margin: unset
        }

        img{
            max-width:100px;
            max-height: 150px;
        }
    </style>

        <?php 
            $page = isset($_GET['page']) ?$_GET['page'] : "sidetopbar";
            include $page.'.php';
        ?>  

        <main id="view-panel" >
            <div class="col-lg-12">
                <div class="row mb-4 mt-4">
                    <div class="col-md-12"></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <b>Venue Booking List</b>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-condensed table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">Booking Information</th>
                                            <th class="text-center">Customer Information</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($venueBooking as $abook): ?>
                                        <tr>
                                            <td><?= $abook['id'] ?></td>
                                            <td class="">
                                                <p>Venue: <?= $abook['venue'] ?><b></b></p>
                                                <p><small>Duration: <?= $abook['duration'] ?></small></p>
                                                <p><small>Schedule: <?= $abook['datetime'] ?> <b></b></small></p>
                                            </td>
                                            <td class="">
                                            <p>Booked by: <?= $abook['fullname'] ?></b></p>
                                            <p><small>Email: <?= $abook['email'] ?></b></small></p>
                                            <p><small>Contact: <?= $abook['contact'] ?></b></small></p>
                                            <p><small>Address: <?= $abook['address'] ?></b></small></p>
                                            </td>
                                            
                                            <td class="text-center">
                                                    <span class="badge badge-primary"><?= $abook['status'] ?></span>
                                            </td>
                                            <td class="text-center">
                                                <a href="<?= site_url('/updateBooking/' .$abook['id'])?>" class =" btn btn-primary">Edit</a>|
                                                <a href="<?= site_url('/deleteBooking/' .$abook['id'])?>" class =" btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </main>
</body>
</html>