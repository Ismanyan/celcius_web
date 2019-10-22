<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="<?= base_url('assets/') ?>img/favicon.png" type="image/x-icon">
    <title>Regist</title>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/login.css">
    <link href="<?= base_url('assets/') ?>css/animate.css" rel="stylesheet">
</head>

<body>

    <section class="login-block animated fadeInLeft">
        <div class="container">
            <div class="row">
                <div class="col-md-4 login-sec" style="min-height: 600px;">
                    <a href="<?= base_url() ?>">
                        <img class="mx-auto d-block mb-5 animated fadeInUp" src="<?= base_url('assets/') ?>img/logo.png" alt="" width="100">
                    </a>
                    <!-- <h2 class="text-center">Login Now</h2> -->
                    <form class="login-form animated fadeInUp" method="post" action="<?= base_url('auth/register_validator') ?>">
                        <div class="form-group">
                            <label for="fullname" class="text-uppercase">Full Name</label>
                            <input type="text" class="form-control" placeholder="" name="fullname" required value="<?= set_value('fullname') ?>">
                            <small><?= form_error('fullname'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email" class="text-uppercase">Email Address</label>
                            <input type="email" class="form-control" placeholder="" name="email" required value="<?= set_value('email') ?>">
                            <small><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="username" class="text-uppercase">Username</label>
                            <input type="text" class="form-control" placeholder="" name="username" required value="<?= set_value('username') ?>">
                            <small><?= form_error('username'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-uppercase">Password</label>
                            <input type="password" class="form-control" placeholder="" name="password" required>
                            <small><?= form_error('password'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-uppercase">Confirm Password</label>
                            <input type="password" class="form-control" placeholder="" name="password2" required>
                            <small><?= form_error('password2'); ?></small>
                        </div>
                        <div class="form-check">
                            <button type="submit" class="btn btn-login w-100" style="margin-left:-3% !important;">Submit</button>
                        </div>
                    </form>
                    <div class="copy-text animated fadeInUp">Already have an account ? <a href="<?= base_url('auth/login') ?>">Log In</a></div>
                </div>
                <div class="col-md-8 banner-sec d-none d-md-block">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" src="<?= base_url('assets/') ?>img/bg-login.jpeg" alt="First slide" style="min-height: 700px;">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="<?= base_url('assets/') ?>img/bg-login-3.jpeg" alt="First slide" style="min-height: 700px;">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </section>
</body>

</html>