<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Users</title>
</head>
<body>
    <style>
        body{
            background: #80808045;
        }

    </style>

        <?php 
            $page = isset($_GET['page']) ?$_GET['page'] : "sidetopbar";
            include $page.'.php';
        ?>  

        <main id="view-panel">
            <div class="container-fluid">
                <div class="row">
                </div><br>
                <div class="row">
                    <div class="card col-lg-12">
                        <div class="card-body">
                            <table class="table-striped table-bordered col-md-12">
                                <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Username</th>
                                    <th class="text-center">Type</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($user as $u): ?>
                                    <tr>
                                        <td><?= $u['id'] ?></td>
                                        <td class="">
                                            <p><?= $u['name'] ?><b></b></p>
                                        </td>
                                        <td class="">
                                            <p><?= $u['username'] ?></b></p>
                                        </td>
                                        <td class="">
                                            <p><?= $u['type'] ?></b></p>
                                        </td>
                                        <td class="text-center">
                                            <a href="" class =" btn btn-primary">Edit</a>|
                                            <a href="" class =" btn btn-danger">Delete</a>
                                        </td>
                                    <?php endforeach ?>
                                    </tr>
			                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>

</body>
</html>