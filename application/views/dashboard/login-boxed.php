<!doctype html>
<html lang="en">

<head>
    <title>Login | Dashboard</title>

    <!-- Files -->
    <?php include 'layout/links.php' ?>
</head>

<body>
    <div class="app-container <?= ($globalSettings['app-theme-white']) ? 'app-theme-white' : 'app-theme-gray' ?>">
        <div class="app-container">
            <div class="h-100 <?= $colorSettings['login-class'] ? $colorSettings['login-class'] : '' ?> bg-animation">
                <div class="d-flex h-100 justify-content-center align-items-center">
                    <div class="mx-auto app-login-box col-md-8">
                        <div class="app-logo-inverse mx-auto mb-3"></div>
                        <div class="modal-dialog w-100 mx-auto">
                            <div class="modal-content">
                                <form method="post" action="">
                                    <div class="modal-body p-5 p-xs-3">
                                        <div class="h5 modal-title text-center">
                                            <h4 class="mt-2">
                                                <div>Welcome back,</div>
                                                <span>Please sign in to your account below.</span>
                                            </h4>
                                        </div>
                                        <div class="form-row mt-5">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group"><input name="email" id="email" placeholder="Enter Email" type="email" class="form-control" required></div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="position-relative form-group boxed-wrapper password-wrapper">
                                                    <input name="password" id="password" placeholder="Enter Password" type="password" class="form-control" required>

                                                    <i class="fas fa-eye"></i>
                                                    <i class="fas fa-eye-slash" style="display: none;"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer clearfix">
                                        <div class="float-right">
                                            <input name="submit" type="submit" class="btn btn-primary btn-lg" value="Login">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="text-center text-white opacity-8 mt-3">
                            Copyright &copy; <?= date('Y') ?> All rights reserved | <a class="text-white" href="<?= base_url() ?>">Falcon Couriers</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <?php include 'layout/scripts.php' ?>
    <?php include 'layout/functions.php' ?>
    <?php if (!empty($error_msg)) {
        echo "<script type='text/javascript'>toastr.options = {closeButton: true}, toastr.error('" . $error_msg . "')</script>";
    } ?>
</body>

</html>