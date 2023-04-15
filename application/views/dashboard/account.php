<!doctype html>
<html lang="en">

<head>
    <title>Account | HSBM Global</title>

    <!-- Files -->
    <?php include 'layout/links.php' ?>
</head>

<body>
    <div class="app-container <?php foreach ($globalSettings as $type => $value) : echo ($value) ? " " . $type : ''; endforeach; ?>">

        <!-- Header -->
        <?php include 'layout/header.php' ?>

        <div class="app-main">
            <!-- Sidebar -->
            <?php include 'layout/sidebar.php' ?>

            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-user icon-gradient bg-mean-fruit"></i>
                                </div>

                                <div>Account Settings
                                    <div class="page-title-subheading">Update your profile by changing your name, email and picture. You can also change your password here
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-6 col-xl-4">
                                    <div class="card-hover-shadow profile-responsive card-border border-dark mb-3 card">
                                        <div class="dropdown-menu-header">
                                            <div class="dropdown-menu-header-inner bg-dark">
                                                <div class="menu-header-content">
                                                    <div class="avatar-icon-wrapper btn-hover-shine mb-2 avatar-icon-xl">
                                                        <div class="avatar-icon rounded"><img src="<?= base_url('uploads/profile/account-default.png') ?>"></div>
                                                    </div>

                                                    <div>
                                                        <h5 class="menu-header-title"><?= $user->name ?></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-0 card-body">
                                            <div class="tab-content">
                                                <div class="tab-pane active show" id="tab-2-eg1">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left flex2">
                                                                        <div class="widget-heading text-center"><?= $user->email ?></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-lg-7 col-xl-8">
                                    <form method="post" class="" enctype="multipart/form-data">
                                        <div class="position-relative row form-group"><label for="name" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input name="name" id="name" value="<?= $user->name ?>" placeholder="Name" type="text" class="form-control">

                                                <?php echo form_error('name', '<p class="help-block">', '</p>'); ?>
                                            </div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="email" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input name="email" id="email" value="<?= $user->email ?>" placeholder="Email" type="text" class="form-control">

                                                <?php echo form_error('email', '<p class="help-block">', '</p>'); ?>
                                            </div>
                                        </div>

                                        <div class="position-relative row form-check">
                                            <div class="col-sm-10 offset-sm-2">
                                                <input type="submit" name="submit" value="Submit" class="btn btn-success">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="main-card mb-3 card">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <form method="post" class="">
                                        <h4 class="mt-2">
                                            <div>Password Settings</div>
                                        </h4>
                                        <div class="mt-5">
                                            <div class="position-relative row form-group"><label for="oldpassword" class="col-sm-2 col-form-label">Old Password</label>
                                                <div class="col-sm-10 password-wrapper">
                                                    <input name="oldpassword" id="oldpassword" placeholder="Enter Old Password" type="password" class="form-control">
                                                    <i class="fas fa-eye"></i>
                                                    <i class="fas fa-eye-slash" style="display: none;"></i>

                                                    <?php echo form_error('oldpassword', '<p class="help-block">', '</p>'); ?>
                                                </div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="password" class="col-sm-2 col-form-label">New Password</label>
                                                <div class="col-sm-10 password-wrapper">
                                                    <input name="password" id="password" placeholder="Enter New Password" type="password" class="form-control">
                                                    <i class="fas fa-eye "></i>
                                                    <i class="fas fa-eye-slash" style="display: none;"></i>

                                                    <?php echo form_error('password', '<p class="help-block">', '</p>'); ?>
                                                </div>
                                            </div>

                                            <div class="position-relative row form-group"><label for="confpassword" class="col-sm-2 col-form-label">Confirm Password</label>
                                                <div class="col-sm-10 password-wrapper">
                                                    <input name="confpassword" id="confpassword" placeholder="Enter New Password" type="password" class="form-control">
                                                    <i class="fas fa-eye"></i>
                                                    <i class="fas fa-eye-slash" style="display: none;"></i>

                                                    <?php echo form_error('confpassword', '<p class="help-block">', '</p>'); ?>
                                                </div>
                                            </div>

                                            <div class="position-relative row form-check">
                                                <div class="col-sm-10 offset-sm-2">
                                                    <input type="submit" name="confirm" value="Submit" class="btn btn-success">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <?php include 'layout/footer.php' ?>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <?php include 'layout/scripts.php' ?>

    <?php include 'layout/functions.php' ?>
    <?php if (!empty($success_msg)) {
        echo "<script type='text/javascript'>toastr.options = {closeButton: true, timeOut: 2, onHidden: function() { location.reload(true) }}, toastr.success('" . $success_msg . "')</script>";
    } else if (!empty($error_msg)) {
        echo "<script type='text/javascript'>toastr.options = {closeButton: true}, toastr.error('" . $error_msg . "')</script>";
    } ?>
</body>

</html>
