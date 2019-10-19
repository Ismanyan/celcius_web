<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="<?= base_url('assets/') ?>img/favicon.png" type="image/x-icon">
    <title>Login</title>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/login.css">
</head>

<body>

    <section class="login-block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 login-sec bg-white">
                    <a href="<?= base_url() ?>">
                        <img class="mx-auto d-block mb-5" src="<?= base_url('assets/') ?>img/logo.png" alt="" width="100">
                    </a>
                    <!-- <h2 class="text-center">Login Now</h2> -->
                    <form class="login-form" method="post" action="<?= base_url('auth/validator') ?>">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="text-uppercase">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="username / email" value="<?= set_value('username') ?>">
                            <small><?= form_error('username'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="text-uppercase">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="password">
                            <small><?= form_error('password'); ?></small>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" name="remember" class="form-check-input">
                                <small>Remember Me</small>
                            </label>
                            <button type="submit" class="btn btn-login float-right">Submit</button>
                        </div>
                    </form>
                    <div class="copy-text">Don't have an account ? <a href="<?= base_url('auth/register') ?>">Sign Up</a></div>
                </div>
                <div class="col-md-8 banner-sec d-none d-md-block">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" src="<?= base_url('assets/') ?>img/bg-login.jpeg" alt="First slide">

                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="<?= base_url('assets/') ?>img/bg-login-3.jpeg" alt="First slide">

                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </section>
</body>

</html>