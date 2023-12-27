<!DOCTYPE html>
<html lang="en">
<head>
    <title>Event Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .btn {
            background-color: blue;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            align-items: center;
        }

        .btn:hover {
            background-color: blueviolet;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            align-items: center;
        }

        p a {
            text-decoration: none;
            color: #4caf50;
        }
    </style>
</head>
<body>
    <section class="text-center">
        <div class="p-5 bg-image" style="background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg'); height: 300px;"></div>
            <div class="card mx-4 mx-md-5 shadow-5-strong" style="margin-top: -100px; background: hsla(0, 0%, 100%, 0.8); backdrop-filter: blur(30px);">
                <div class="card-body py-5 px-md-5">  
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <h2 class="fw-bold mb-5">Login Now</h2>
                                <form action="loginAuth" method="post">
                                    <div class="mb-3 mt-3">
                                    <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="pwd" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="password" required>
                                    </div>
                                    <button type="submit" class="btn" name="submit">Log in</button><br><br>
                                    <p>Don't have an account yet? <a href="register">SignUp</a></p>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</body>
</html>
