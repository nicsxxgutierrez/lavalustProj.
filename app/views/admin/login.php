<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
<style>
	body{
		width: 100%;
	    height: calc(100%);
	    /*background: #007bff;*/
	}
	main#main{
		width:100%;
		height: calc(100%);
		background:white;
	}
	#login-right{
		position: absolute;
		right:0;
		width:40%;
		height: calc(100%);
		background:white;
		display: flex;
		align-items: center;
	}
	#login-left{
		position: absolute;
		left:0;
		width:60%;
		height: calc(100%);
		background:#59b6ec61;
		display: flex;
		align-items: center;
		background-image: url("public/wpvenue.jpg");
	    background-repeat: no-repeat;
	    background-size: cover;
	}
	#login-right .card{
		margin: auto;
		z-index: 1
	}
	.logo {
        margin: auto;
        font-size: 8rem;
        background: white;
        padding: .5em 0.7em;
        border-radius: 50% 50%;
        color: #000000b3;
        z-index: 10;
    }
    div#login-right::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: calc(100%);
        height: calc(100%);
        background: #000000e0;
    }
	.btn {
        background-color: blue;
        color: #fff;
        padding: 10px 15px;
        margin: 10px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        align-items: center;
    }

    .btn:hover {
        background-color: cyan;
        color: #fff;
        padding: 10px 15px;
        margin: 10px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        align-items: center;
    }
</style>
<body>
    <?php 
        $page = isset($_GET['page']) ?$_GET['page'] : "header";
        include $page.'.php';
    ?>  
    <main id="main" class=" bg-dark">
  		<div id="login-left"></div><div id="login-right">
  			<div class="card col-md-8">
  				<div class="card-body">
                    <form action="<?= site_url('adminuserlogin')?>" method="post">
						<h1>Welcome Admin!</h1>
						<hr>
  						<div class="form-group">
  							<label for="username" class="control-label">Username</label>
  							<input type="text" id="username" name="username" class="form-control">
  						</div>
  						<div class="form-group">
  							<label for="password" class="control-label">Password</label>
  							<input type="password" id="password" name="password" class="form-control">
  						</div>
  						<center><button type="submit" class="btn" name="submit">Log in</button><br><br>
                                <p>Don't have an account yet admin?<a href="adminregister"> SignUp</a></p></center>
  					</form>
  				</div>
  			</div>
  		</div>
    </main>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
</body>
</html>