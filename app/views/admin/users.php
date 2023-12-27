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
                    <div class="col-lg-12">
                        <button class="btn btn-primary float-right btn-sm" id="new_user"><i class="fa fa-plus"></i> New user</button>
                    </div>
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
                                <tr>
                                    <td class="text-center">
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                        <center>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">Action</button>
                                                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu">
                                                <a class="dropdown-item edit_user" href="javascript:void(0)">Edit</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item delete_user" href="javascript:void(0)">Delete</a>
                                                </div>
                                            </div>
                                        </center>
				 	                    </td>
				                    </tr>
			                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <script>
            $('table').dataTable();
            $('#new_user').click(function(){
                uni_modal('New User','manage_user.php')
            })
            $('.edit_user').click(function(){
                uni_modal('Edit User','manage_user.php?id='+$(this).attr('data-id'))
            })
            $('.delete_user').click(function(){
                    _conf("Are you sure to delete this user?","delete_user",[$(this).attr('data-id')])
                })
                function delete_user($id){
                    start_load()
                    $.ajax({
                        url:'ajax.php?action=delete_user',
                        method:'POST',
                        data:{id:$id},
                        success:function(resp){
                            if(resp==1){
                                alert_toast("Data successfully deleted",'success')
                                setTimeout(function(){
                                    location.reload()
                                },1500)

                            }
                        }
                    })
                }
        </script>
</body>
</html>