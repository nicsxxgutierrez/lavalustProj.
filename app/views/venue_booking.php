 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
 </head>
 <body>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: rgb(255,10,117);
            background: linear-gradient(90deg, rgba(255,10,117,1) 13%, rgba(189,0,255,1) 50%, rgba(0,206,255,1) 100%);
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 120vh;
        }

        .modal {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            padding: 30px;
            width: 500px;
        }

        .modal-title {
            font-size: 24px;
            margin-bottom: 1px;
            text-align: center;
        }

        label {
            display: block;
            margin-top: 10px;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .btn {
            border: none;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            background-color: #545b62;
            color: white;
            cursor: pointer;
        }
    </style>

        <!-- Modal -->
            <div class="modal" id="bookingModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title">Booking Request</h2>
                        </div><br>
                        <div class="modal-body">
                            <form action="<?=site_url('booksave')?>" method="post">
                            <input type="hidden" value="<?=$get ['id'] ?>">
                                <label for="venue">Venue:</label>
                                <input type="hidden" name="venue" value="<?=$get['venue']?>"><h3><?=$get['venue']?></h3>

                                <label for="fullname">Full Name</label>
                                <input type="text" id="fullname" name="fullname" required><br>

                                <label for="address">Address</label>
                                <input type="text" id="address" name="address" required><br>
                                
                                <label for="email">Email</label>
                                <input type="text" id="email" name="email" required><br>

                                <label for="contact">Contact Number</label>
                                <input type="text" id="contact" name="contact" required><br>

                                <label for="schedule">Desired Event Schedule</label>
                                <input type="datetime-local"  class="form-control datetimepicker" name="datetime" required><br><br>

                                <input type="hidden" value="For Verification" name="status">

                                <input type="submit" value="Submit Booking" class="btn btn-primary"></input>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <a href="<?= site_url('venue')?>" class =" btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <script>
                $('.datetimepicker').datetimepicker({
                    format:'Y/m/d H:i',
                    startDate: '+3d'
                })
            </script>

</body>
</html>