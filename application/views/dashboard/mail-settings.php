<!doctype html>
<html lang="en">

<head>
    <title>Mail Settings | HSBM Global</title>

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
                                    <i class="pe-7s-mail icon-gradient bg-mean-fruit"></i>
                                </div>

                                <div>Mail Settings
                                    <div class="page-title-subheading">You can set sender email, sender title and reciever email for sending or recieving emails.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <form method="post" class="" autocomplete="off">
                                <div class="position-relative row form-group"><label for="receiver_email" class="col-sm-2 col-form-label">Reciever Email</label>
                                    <div class="col-sm-10">
                                        <input name="receiver_email" id="receiver_email" value="<?= $mailSettings['receiver_email'] ?>" placeholder="Receiver Email" type="text" class="form-control">
                                    
                                        <?php echo form_error('receiver_email', '<p class="help-block">', '</p>'); ?>
                                    </div>
                                </div>
                                <div class="position-relative row form-group"><label for="sender_title" class="col-sm-2 col-form-label">Sender Title</label>
                                    <div class="col-sm-10">
                                        <input name="sender_title" id="sender_title" value="<?= $mailSettings['sender_title'] ?>" placeholder="Sender Title" type="text" class="form-control">
                                    
                                        <?php echo form_error('sender_title', '<p class="help-block">', '</p>'); ?>
                                    </div>
                                </div>

                                <div class="position-relative row form-group"><label for="sender_email" class="col-sm-2 col-form-label">Sender Email</label>
                                    <div class="col-sm-10">
                                        <input name="sender_email" id="sender_email" value="<?= $mailSettings['sender_email'] ?>" placeholder="Sender Email" type="text" class="form-control">
                                    
                                        <?php echo form_error('sender_email', '<p class="help-block">', '</p>'); ?>
                                    </div>
                                </div>

                                <div class="position-relative row form-check">
                                    <div class="col-sm-10 offset-sm-2">
                                        <input type="submit" name="submit" value="Save Changes" class="btn btn-success">
                                    </div>
                                </div>
                            </form>
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