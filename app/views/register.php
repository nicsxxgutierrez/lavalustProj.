<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<body>
    <style>
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
            background-color: blueviolet;
            color: #fff;
            padding: 10px 15px;
            margin: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            align-items: center;
        }
        
        p a {
            text-decoration: none;
            color: blue;
        }

        p a:hover {
            text-decoration: none;
            color: cyan;
        }

    </style>
</head>
    <section class="text-center">
        <div class="p-5 bg-image" style="background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg'); height: 300px;"></div>
            <div class="card mx-4 mx-md-5 shadow-5-strong" style="margin-top: -100px; background: hsla(0, 0%, 100%, 0.8); backdrop-filter: blur(30px);">
                <div class="card-body py-5 px-md-5">  
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <h1>Register</h1><br>
                                <?php $LAVA =& lava_instance(); ?>
                                <?php echo $LAVA->form_validation->errors(); ?>
                                <?php if (isset($error_message)) { ?>
                                    <div class="alert alert-danger"><?php echo $error_message; ?></div>
                                <?php } ?>
                                <form action="registerauth" method="post">
                                    <div class="row">
                                        <div class="form-outline mb-4">
                                            <label for="lastname" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="lastname" placeholder="Enter LastName" name="LastName" required>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label for="firstname" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="firstname" placeholder="Enter FirstName" name="FirstName" required>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label for="contactno" class="form-label">Contact Number</label>
                                            <input type="text" class="form-control" id="contactno" placeholder="Enter ContactNo" name="ContactNo" required>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" required>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label for="pwd" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="password" required>
                                        </div>
                                        <button type="submit" class="btn" name="submit">Register</button>
                                        <p>Already have an account? <a href="login">Login</a></p>
                                        <p><a href="login">Back</a></p>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    </body>
</html>