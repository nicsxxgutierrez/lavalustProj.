<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venues</title>
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

        <main id="view-panel">
            <div class="col-lg-12">
                <div class="row mb-4 mt-4">
                    <div class="col-md-12"></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <b>List of Venues</b>
                            </div>
                            <div class="card-body">
                                <table class="table table-condensed table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">Venue</th>
                                            <th class="text-center">Address</th>
                                            <th class="text-center">Description</th>
                                            <th class="text-center">Rate</th>
                                            <th class="text-center">Images</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($venues as $v): ?>
                                        <tr>
                                            <td><?= $v['id'] ?></td>
                                            <td class="text-center">
                                                <p><?= $v['venue'] ?><b></b></p>
                                            </td>
                                            <td class="text-center">
                                                <p><?= $v['address'] ?></b></p>
                                            </td>
                                            <td class="text-center">
                                                <p><?= $v['description'] ?></b></p>
                                            </td>
                                            <td class="text-center">
                                                <p><?= $v['rate'] ?></b></p>
                                            </td>

                                            <td class="text-center">
                                                <p><?= $v['file_image'] ?></b></p>
                                            </td>
                                            <td class="text-center">
                                                <a href="<?= site_url('/editVenues/' .$v['id'])?>" class =" btn btn-primary">Edit</a><br><br>
                                                <a href="<?= site_url('/deleteVenues/' .$v['id'])?>" class =" btn btn-danger">Delete</a>
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