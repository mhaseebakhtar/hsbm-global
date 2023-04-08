<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | Falcon Couriers</title>

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
                                    <i class="pe-7s-rocket icon-gradient bg-mean-fruit">
                                    </i>
                                </div>
                                <div>Analytics Dashboard
                                    <div class="page-title-subheading">You can see some of your site stats here.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php include 'layout/footer.php' ?>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <?php include 'layout/scripts.php' ?>

    <?php include 'layout/functions.php' ?>
</body>

</html>