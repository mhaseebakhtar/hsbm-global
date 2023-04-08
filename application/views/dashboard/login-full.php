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
            <div class="h-100 <?= $colorSettings['login-class'] ? $colorSettings['login-class'] : '' ?>">
                <div class="h-100 no-gutters row">
                    <div class="d-none d-lg-block col-lg-4 login-image-wrapper"></div>
                    <div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
                        <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                            <div class="app-logo d-none"></div>
                            <h4 class="mb-0">
                                <span class="d-block">Welcome back,</span>
                                <span>Please sign in to your account.</span></h4>
                            <div class="divider row"></div>
                            <div>
                                <form class="" method="post">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group"><label for="email" class="">Email</label><input name="email" id="email" placeholder="Enter Email" type="email" class="form-control" required></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group login-wrapper password-wrapper">
                                                <label for="password" class="">Password</label>
                                                <input name="password" id="password" placeholder="Enter Password" type="password" class="form-control" required>

                                                <i class="fas fa-eye"></i>
                                                <i class="fas fa-eye-slash" style="display: none"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="divider row"></div>
                                    <div class="d-flex align-items-center">
                                        <div class="ml-auto">
                                            <input name="submit" type="submit" class="btn btn-primary btn-lg" value="Login">
                                        </div>
                                    </div>
                                </form>
                            </div>
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