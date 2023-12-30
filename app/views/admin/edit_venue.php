<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Venue Booking List</title>
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
                                    <b>Manage Book List</b>
                                </div>
                                <div class="card-body">
                                    <form action="<?=site_url('update')?>" method="post">
                                    <input type="hidden" value="<?= $venue['id']?>">
                                        <label for="fullname">Full Name</label><br>
                                        <input type="text" id="fullname" name="fullname" placeholder="Enter your Full Name" value="<?= $venue['fullname']?>"><br>

                                        <label for="address">Address</label><br>
                                        <input type="text" id="address" name="address" placeholder="Enter your Address" value="<?= $venue['address']?>"><br>
                                        
                                        <label for="email">Email</label><br>
                                        <input type="text" id="email" name="email" placeholder="Enter your Email" value="<?= $venue['email']?>"><br>

                                        <label for="contact">Contact #</label><br>
                                        <input type="text" id="contact" name="contact" placeholder="Enter your contact number" value="<?= $venue['contact']?>"><br>

                                        <label for="duration">Duration</label><br>
                                        <input type="text" id="duration" name="duration" placeholder="Enter how many days you will stay" value="<?= $venue['duration']?>"><br>

                                        <label for="datetime">Desired Event Schedule</label><br>
                                        <input type="datetime-local" class="form-control datetimepicker" name="datetime" value="<?= $venue['datetime']?>"><br>
                                        <div class="form-group">
                                            <label for="" class="control-label">Status</label><br>
                                            <select name="status" id="" class="custom-select">
                                                <option>For Verification</option>
                                                <option>Confirmed</option>
                                                <option>Cancelled</option>
                                            </select>
                                        </div><br>
                                        <button type="submit" class ="btn btn-success">Update</button><br>
                                    </form>
                                        <a href="adminvenue_book" class= "btn btn-warning">Close</a>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </main>
</body>
</html>