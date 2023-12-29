<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
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
                                <b>Manage Book List</b>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-condensed table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Venue</th>
                                            <th class="">Full Name</th>
                                            <th class="">Address</th>
                                            <th class="">Email</th>
                                            <th class="text-center">Contact Number</th>
                                            <th class="">Duration</th>
                                            <th class="">Desired Event Schedule</th>
                                            <th class="">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($venueBooking as $abook): ?>
                                        <tr>
                                            <td><?= $abook['id'] ?></td>
                                            <td class="">
                                                <p>Venue: <?= $abook['venue'] ?><b></b></p>
                                                <p><small>Duration: <?= $abook['datetime'] ?></small></p>
                                                <p><small>Schedule: <?= $abook['duration'] ?> <b></b></small></p>
                                            </td>
                                            <td class="">
                                            <p>Booked by: <?= $abook['fullname'] ?></b></p>
                                            <p><small>Email: <?= $abook['email'] ?></b></small></p>
                                            <p><small>Contact: <?= $abook['contact'] ?></b></small></p>
                                            <p><small>Address: <?= $abook['address'] ?></b></small></p>
                                            </td>
                                            
                                            <td class="text-center">
                                                    <span class="badge badge-secondary">For Verification</span>
                                                    <span class="badge badge-primary">Confirmed</span>
                                                    <span class="badge badge-danger">Cancelled</span>
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-sm btn-outline-primary edit_book" type="button">Edit</button>
                                                <button class="btn btn-sm btn-outline-danger delete_book" type="button">Delete</button>
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