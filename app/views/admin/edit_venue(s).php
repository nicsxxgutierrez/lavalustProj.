<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Venue List</title>
</head>
<body>
    <style>
        body {
            background: #C0C0C0;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        #view-panel {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .card {
            width: 400px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background: #f8f9fa;
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            padding: 15px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .card-body {
            padding: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        .btn-success,
        .btn-warning {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-success {
            background-color: #28a745;
            color: #fff;
        }

        .btn-warning {
            background-color: #ffc107;
            color: #212529;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        .btn-warning:hover {
            background-color: #e0a800;
        }
    </style>

            <main id="view-panel" >
                <div class="col-lg-12">
                    <div class="row mb-4 mt-4">
                        <div class="col-md-12"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <b>Manage List of Venues</b>
                                </div>
                                <div class="card-body">
                                    <form action="<?=site_url('updatevenue')?>" method="post">
                                        <input type="hidden" name = "id" value="<?= $edata['id']?>">

                                        <label for="venue">Venue:
                                        <input type="hidden" name="venue" value="<?=$edata['venue']?>"><h4><?=$edata['venue']?></h4></label>

                                        <label for="address">Address</label><br>
                                        <input type="text" id="address" name="address" value="<?= $edata['address']?>"><br>

                                        <label for="description">Description</label><br>
                                        <input type="text" id="description" name="description" value="<?= $edata['description']?>"><br>

                                        <label for="rate">Rate</label><br>
                                        <input type="text" id="rate" name="rate" value="<?= $edata['rate']?>"><br>

                                        <label for="file">Images</label><br>
                                        <input type="file" id="file" name="file_image" value="<?= $edata['file_image']?>"><br><br>
                                        
                                        <button type="submit" class ="btn btn-success">Update</button><br><br>
                                    </form>
                                    <a href="<?= site_url('adminvenues')?>" class =" btn btn-warning">Close</a>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </main>
</body>
</html>