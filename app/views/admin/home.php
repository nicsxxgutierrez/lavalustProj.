<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
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
                
        <main id="view-panel" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <p>Welcome Back Administrator!</p>
                                <hr>
                            </div>
                        </div>      			
                    </div>
                </div>
            </div>
        </main>

</body>
</html>