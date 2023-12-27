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

        <main id="view-panel">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <div class="row mb-4 mt-4">
                        <div class="col-md-12"></div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <b>List of Venue</b>
                                <span class="float:right"><a class="btn btn-primary btn-block btn-sm col-sm-2 float-right" href="index.php?page=manage_venue" id="new_venue">
                                    <i class="fa fa-plus"></i> New Entry</a>
                                </span>
                            </div>
                            <div class="card-body">
                                <table class="table table-condensed table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="">Venue</th>
                                            <th class="">Address</th>
                                            <th class="">Description</th>
                                            <th class="">Rate</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center"></td>
                                            
                                            <td class="">
                                                <p> <b></b></p>
                                            </td>
                                            <td class="">
                                                <p class=""></p>
                                            </td>
                                            <td class="">
                                                <p class="truncate"></p>
                                            </td>
                                            <td class="">
                                                <p class="text-right"></p>
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-sm btn-outline-primary edit_venue" type="button">Edit</button>
                                                <button class="btn btn-sm btn-outline-danger delete_venue" type="button">Delete</button>
                                            </td>
                                        </tr>   
                                    </tbody>
						        </table>
					        </div>
				        </div>
                    </div>  
		        </div>
            </div>
        </main>

        <script>
            $(document).ready(function(){
                $('table').dataTable()
            })
            $('.edit_venue').click(function(){
                location.href ="index.php?page=manage_venue&id="+$(this).attr('data-id')
                
            })
            $('.delete_venue').click(function(){
                _conf("Are you sure to delete this venue?","delete_venue",[$(this).attr('data-id')])
            })
            
            function delete_venue($id){
                stvenue_load()
                $.ajax({
                    url:'ajax.php?action=delete_venue',
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