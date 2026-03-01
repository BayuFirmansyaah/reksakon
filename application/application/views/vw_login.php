<!doctype html>
<html lang="en">

<head>
    <title>CAT LOGIN SYSTEM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/loginv1/css/style.css">

</head>
<style>
    .row-shadow {
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 1); /* Atur nilai bayangan sesuai kebutuhan */
    }
</style>

<body class="img js-fullheight" style="background-image: url(assets/loginv1/images/bg2.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">RSK V2024.1.0 BETA SYSTEM</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">
                            <?php
                            if ($this->session->flashdata('error') != '') {
                                echo '<div class="alert alert-danger" role="alert">';
                                echo $this->session->flashdata('error');
                                echo '</div>';
                            }
                            ?>

                            <?php
                            if ($this->session->flashdata('success_register') != '') {
                                echo '<div class="alert alert-info" role="alert">';
                                echo $this->session->flashdata('success_register');
                                echo '</div>';
                            }
                            ?>
                        </h3>
                        <form class="signin-form" method="post" action="<?php echo base_url('Login/proses'); ?>">
                            <div class="form-group elevation-3">
                                <input type="text" class="form-control" placeholder="Username" required name="username" required>
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" class="form-control" placeholder="Password" name="password" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="#" style="color: #fff">Forgot Password</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/loginv1/js/jquery.min.js"></script>
    <script src="assets/loginv1/js/popper.js"></script>
    <script src="assets/loginv1/js/bootstrap.min.js"></script>
    <script src="assets/loginv1/js/main.js"></script>

</body>

</html>