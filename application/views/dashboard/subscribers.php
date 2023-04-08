<!doctype html>
<html lang="en">

    <head>
        <title>Subscribers | Falcon Couriers</title>

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
                                        <i class="pe-7s-users icon-gradient bg-mean-fruit"></i>
                                    </div>
                                    <div>Subscribers
                                        <div class="page-title-subheading">All of your subscribers are listed here.
                                        </div>
                                    </div>
                                </div>

                                <?php if ($subscribers) : ?>
                                    <div class="page-title-actions">
                                        <button type="button" data-toggle="modal" data-target="#mailModal" data-email="all" onclick="mailPopup(this)" class="btn-shadow mr-3 btn btn-dark">
                                            <i class="fa fa-envelope"></i> Send Mail
                                        </button>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <div class="table-responsive table-responsive-data2">

                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>email</th>
                                                <th>Subscribed on</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $subscriberArr = array(); ?>
                                            <?php if ($subscribers) : ?>
                                                <?php $count = 1; ?>
                                                <?php foreach ($subscribers as $subscriber) : ?>
                                                    <?php $subscriberArr[] = $subscriber->email ?>
                                                    <tr>
                                                        <td><?= $count ?></td>
                                                        <td>
                                                            <span class="product-name"><?= $subscriber->email ?></span>
                                                        </td>
                                                        <td><?= date('dS M, Y', strtotime($subscriber->created_at)) ?></td>
                                                        <td class="text-right">
                                                            <div class="table-data-feature">
                                                                <a href="javascript: void(0)" class="item" data-click="false" data-email="<?= $subscriber->email ?>" onclick="mailPopup(this)" data-toggle="modal" data-target="#mailModal" title="Send Mail">
                                                                    <i class="pe-7s-mail icon-gradient bg-primary h5"></i>
                                                                </a>

                                                                <a href="javascript: void(0)" class="item" data-click="false" data-type="subscribers" data-index="<?= $subscriber->id ?>" onclick="delPopup(this)" data-toggle="modal" data-target="#delModal" title="Delete">
                                                                    <i class="pe-7s-trash icon-gradient bg-danger h5"></i>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <?php $count++; ?>
                                                <?php endforeach; ?>
                                            <?php else : ?>
                                                <tr>
                                                    <td colspan="6">No one has subscribed yet.</td>
                                                </tr>
                                            <?php endif; ?>

                                        </tbody>
                                    </table>

                                    <div class="pagination-wrapper text-right">
                                        <?php if (isset($links)) { ?>
                                            <?php echo $links ?>
                                        <?php } ?>
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

        <?php $subs = implode(', ', $subscriberArr); ?>

        <!-- Scripts -->
        <?php include 'layout/scripts.php' ?>
        <?php include 'layout/functions.php' ?>

        <?php if (!empty($success_msg)) {
            echo "<script type='text/javascript'>toastr.options = {closeButton: true}, toastr.success('" . $success_msg . "')</script>";
        } else if (!empty($error_msg)) {
            echo "<script type='text/javascript'>toastr.options = {closeButton: true}, toastr.error('" . $error_msg . "')</script>";
        } ?>

        <script type="text/javascript">
            $(function () {
                initTinyMce('body');
            });

            function mailPopup(el) {
                var email = $(el).data('email');
                if (email == 'all') {
                    $('#receiver_email').val('<?= $subs ?>');
                } else {
                    $('#receiver_email').val(email);
                }
            }
        </script>

        <div class="modal fade" id="mailModal" tabindex="-1" role="dialog" aria-labelledby="delLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="delLabel">Send Email</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form method="post" action="" id="email-form">
                        <div class="modal-body">
                            <div class="position-relative row form-group">
                                <label for="receiver_email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input name="receiver_email" id="receiver_email" data-input="Receiver Email" type="text" class="form-control required" readonly>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="subject" class="col-sm-2 col-form-label">Subject</label>
                                <div class="col-sm-10">
                                    <input name="subject" id="subject" data-input="Email Subject" type="text" class="form-control required">
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="body" class="col-sm-2 col-form-label">Body</label>
                                <div class="col-sm-10">
                                    <textarea name="body" id="body" data-input="Email Body" class="form-control required"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" name="submit" value="Send" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="delModal" tabindex="-1" role="dialog" aria-labelledby="delLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="delLabel">Delete</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <input type="hidden" id="id">
                        <input type="hidden" id="type">
                        <p class="mb-0">Are you sure you want to delete this subscriber? This action will not be reversible.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" onclick="delVal()" class="btn btn-primary">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>