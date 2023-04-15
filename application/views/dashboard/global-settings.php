<!doctype html>
<html lang="en">

<head>
    <title>Global Settings | HSBM Global</title>

    <!-- Files -->
    <?php include 'layout/links.php' ?>
</head>

<body>
    <div class="app-container <?php foreach ($globalSettings as $type => $value) : echo ($value) ? " " . $type : '';
                                endforeach; ?>">

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
                                    <i class="pe-7s-tools icon-gradient bg-mean-fruit">
                                    </i>
                                </div>
                                <div>Global Settings
                                    <div class="page-title-subheading">You can set colors for header, sidebar and various other options for your panel.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title">Layout Options</h5>

                                    <div class="p-3">
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-3">
                                                            <div class="switch has-switch switch-container-class" data-class="fixed-header">
                                                                <div class="switch-animate switch-on">
                                                                    <input type="checkbox" <?= $globalSettings['fixed-header'] ? "checked" : "" ?> data-toggle="toggle" data-onstyle="success">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Fixed Header
                                                            </div>
                                                            <div class="widget-subheading">Makes the header top fixed, always visible!
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-3">
                                                            <div class="switch has-switch switch-container-class" data-class="fixed-sidebar">
                                                                <div class="switch-animate switch-on">
                                                                    <input type="checkbox" <?= $globalSettings['fixed-sidebar'] ? "checked" : "" ?> data-toggle="toggle" data-onstyle="success">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Fixed Sidebar
                                                            </div>
                                                            <div class="widget-subheading">Makes the sidebar left fixed, always visible!
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-3">
                                                            <div class="switch has-switch switch-container-class" data-class="fixed-footer">
                                                                <div class="switch-animate switch-off">
                                                                    <input type="checkbox" <?= $globalSettings['fixed-footer'] ? "checked" : "" ?> data-toggle="toggle" data-onstyle="success">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Fixed Footer
                                                            </div>
                                                            <div class="widget-subheading">Makes the app footer bottom fixed, always visible!
                                                            </div>
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

                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title d-flex align-items-center">
                                        Header Options

                                        <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-header-cs-class float-right" data-class="">
                                            Restore Default
                                        </button>
                                    </h5>

                                    <div class="p-3">
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <h5 class="pb-2">Choose Color Scheme</h5>
                                                <div class="theme-settings-swatches">
                                                    <div class="swatch-holder bg-primary switch-header-cs-class <?= $colorSettings['header-class'] == 'bg-primary header-text-light' ? 'active' : '' ?>" data-class="bg-primary header-text-light"></div>
                                                    <div class="swatch-holder bg-secondary switch-header-cs-class <?= $colorSettings['header-class'] == 'bg-secondary header-text-light' ? 'active' : '' ?>" data-class="bg-secondary header-text-light"></div>
                                                    <div class="swatch-holder bg-success switch-header-cs-class <?= $colorSettings['header-class'] == 'bg-success header-text-dark' ? 'active' : '' ?>" data-class="bg-success header-text-dark"></div>
                                                    <div class="swatch-holder bg-info switch-header-cs-class <?= $colorSettings['header-class'] == 'bg-info header-text-dark' ? 'active' : '' ?>" data-class="bg-info header-text-dark"></div>
                                                    <div class="swatch-holder bg-warning switch-header-cs-class <?= $colorSettings['header-class'] == 'bg-warning header-text-dark' ? 'active' : '' ?>" data-class="bg-warning header-text-dark"></div>
                                                    <div class="swatch-holder bg-danger switch-header-cs-class <?= $colorSettings['header-class'] == 'bg-danger header-text-light' ? 'active' : '' ?>" data-class="bg-danger header-text-light"></div>
                                                    <div class="swatch-holder bg-light switch-header-cs-class <?= $colorSettings['header-class'] == 'bg-light header-text-dark' ? 'active' : '' ?>" data-class="bg-light header-text-dark"></div>
                                                    <div class="swatch-holder bg-dark switch-header-cs-class <?= $colorSettings['header-class'] == 'bg-dark header-text-light' ? 'active' : '' ?>" data-class="bg-dark header-text-light"></div>
                                                    <div class="swatch-holder bg-focus switch-header-cs-class <?= $colorSettings['header-class'] == 'bg-focus header-text-light' ? 'active' : '' ?>" data-class="bg-focus header-text-light"></div>
                                                    <div class="swatch-holder bg-alternate switch-header-cs-class <?= $colorSettings['header-class'] == 'bg-alternate header-text-light' ? 'active' : '' ?>" data-class="bg-alternate header-text-light"></div>

                                                    <div class="divider"></div>

                                                    <div class="swatch-holder bg-vicious-stance switch-header-cs-class <?= $colorSettings['header-class'] == 'bg-vicious-stance header-text-light' ? 'active' : '' ?>" data-class="bg-vicious-stance header-text-light"></div>
                                                    <div class="swatch-holder bg-midnight-bloom switch-header-cs-class <?= $colorSettings['header-class'] == 'bg-midnight-bloom header-text-light' ? 'active' : '' ?>" data-class="bg-midnight-bloom header-text-light"></div>
                                                    <div class="swatch-holder bg-night-sky switch-header-cs-class <?= $colorSettings['header-class'] == 'bg-night-sky header-text-light' ? 'active' : '' ?>" data-class="bg-night-sky header-text-light"></div>
                                                    <div class="swatch-holder bg-slick-carbon switch-header-cs-class <?= $colorSettings['header-class'] == 'bg-slick-carbon header-text-light' ? 'active' : '' ?>" data-class="bg-slick-carbon header-text-light"></div>
                                                    <div class="swatch-holder bg-asteroid switch-header-cs-class <?= $colorSettings['header-class'] == 'bg-asteroid header-text-light' ? 'active' : '' ?>" data-class="bg-asteroid header-text-light"></div>
                                                    <div class="swatch-holder bg-royal switch-header-cs-class <?= $colorSettings['header-class'] == 'bg-royal header-text-light' ? 'active' : '' ?>" data-class="bg-royal header-text-light"></div>
                                                    <div class="swatch-holder bg-warm-flame switch-header-cs-class <?= $colorSettings['header-class'] == 'bg-warm-flame header-text-dark' ? 'active' : '' ?>" data-class="bg-warm-flame header-text-dark"></div>
                                                    <div class="swatch-holder bg-night-fade switch-header-cs-class <?= $colorSettings['header-class'] == 'bg-night-fade header-text-dark' ? 'active' : '' ?>" data-class="bg-night-fade header-text-dark"></div>
                                                    <div class="swatch-holder bg-sunny-morning switch-header-cs-class <?= $colorSettings['header-class'] == 'bg-sunny-morning header-text-dark' ? 'active' : '' ?>" data-class="bg-sunny-morning header-text-dark"></div>
                                                    <div class="swatch-holder bg-tempting-azure switch-header-cs-class <?= $colorSettings['header-class'] == 'bg-tempting-azure header-text-dark' ? 'active' : '' ?>" data-class="bg-tempting-azure header-text-dark"></div>
                                                    <div class="swatch-holder bg-amy-crisp switch-header-cs-class <?= $colorSettings['header-class'] == 'bg-amy-crisp header-text-dark' ? 'active' : '' ?>" data-class="bg-amy-crisp header-text-dark"></div>
                                                    <div class="swatch-holder bg-heavy-rain switch-header-cs-class <?= $colorSettings['header-class'] == 'bg-heavy-rain header-text-dark' ? 'active' : '' ?>" data-class="bg-heavy-rain header-text-dark"></div>
                                                    <div class="swatch-holder bg-mean-fruit switch-header-cs-class <?= $colorSettings['header-class'] == 'bg-mean-fruit header-text-dark' ? 'active' : '' ?>" data-class="bg-mean-fruit header-text-dark"></div>
                                                    <div class="swatch-holder bg-malibu-beach switch-header-cs-class <?= $colorSettings['header-class'] == 'bg-malibu-beach header-text-light' ? 'active' : '' ?>" data-class="bg-malibu-beach header-text-light"></div>
                                                    <div class="swatch-holder bg-deep-blue switch-header-cs-class <?= $colorSettings['header-class'] == 'bg-deep-blue header-text-dark' ? 'active' : '' ?>" data-class="bg-deep-blue header-text-dark"></div>
                                                    <div class="swatch-holder bg-ripe-malin switch-header-cs-class <?= $colorSettings['header-class'] == 'bg-ripe-malin header-text-light' ? 'active' : '' ?>" data-class="bg-ripe-malin header-text-light"></div>
                                                    <div class="swatch-holder bg-arielle-smile switch-header-cs-class <?= $colorSettings['header-class'] == 'bg-arielle-smile header-text-light' ? 'active' : '' ?>" data-class="bg-arielle-smile header-text-light"></div>
                                                    <div class="swatch-holder bg-plum-plate switch-header-cs-class <?= $colorSettings['header-class'] == 'bg-plum-plate header-text-light' ? 'active' : '' ?>" data-class="bg-plum-plate header-text-light"></div>
                                                    <div class="swatch-holder bg-happy-fisher switch-header-cs-class <?= $colorSettings['header-class'] == 'bg-happy-fisher header-text-dark' ? 'active' : '' ?>" data-class="bg-happy-fisher header-text-dark"></div>
                                                    <div class="swatch-holder bg-happy-itmeo switch-header-cs-class <?= $colorSettings['header-class'] == 'bg-happy-itmeo header-text-light' ? 'active' : '' ?>" data-class="bg-happy-itmeo header-text-light"></div>
                                                    <div class="swatch-holder bg-mixed-hopes switch-header-cs-class <?= $colorSettings['header-class'] == 'bg-mixed-hopes header-text-light' ? 'active' : '' ?>" data-class="bg-mixed-hopes header-text-light"></div>
                                                    <div class="swatch-holder bg-strong-bliss switch-header-cs-class <?= $colorSettings['header-class'] == 'bg-strong-bliss header-text-light' ? 'active' : '' ?>" data-class="bg-strong-bliss header-text-light"></div>
                                                    <div class="swatch-holder bg-grow-early switch-header-cs-class <?= $colorSettings['header-class'] == 'bg-grow-early header-text-light' ? 'active' : '' ?>" data-class="bg-grow-early header-text-light"></div>
                                                    <div class="swatch-holder bg-love-kiss switch-header-cs-class <?= $colorSettings['header-class'] == 'bg-love-kiss header-text-light' ? 'active' : '' ?>" data-class="bg-love-kiss header-text-light"></div>
                                                    <div class="swatch-holder bg-premium-dark switch-header-cs-class <?= $colorSettings['header-class'] == 'bg-premium-dark header-text-light' ? 'active' : '' ?>" data-class="bg-premium-dark header-text-light"></div>
                                                    <div class="swatch-holder bg-happy-green switch-header-cs-class <?= $colorSettings['header-class'] == 'bg-happy-green header-text-light' ? 'active' : '' ?>" data-class="bg-happy-green header-text-light"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title d-flex align-items-center">
                                        Sidebar Options

                                        <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-sidebar-cs-class float-right" data-class="">
                                            Restore Default
                                        </button>
                                    </h5>

                                    <div class="p-3">
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <h5 class="pb-2">Choose Color Scheme
                                                </h5>

                                                <div class="theme-settings-swatches">
                                                    <div class="swatch-holder bg-primary switch-sidebar-cs-class <?= $colorSettings['sidebar-class'] == 'bg-primary sidebar-text-light' ? 'active' : '' ?>" data-class="bg-primary sidebar-text-light"></div>
                                                    <div class="swatch-holder bg-secondary switch-sidebar-cs-class <?= $colorSettings['sidebar-class'] == 'bg-secondary sidebar-text-light' ? 'active' : '' ?>" data-class="bg-secondary sidebar-text-light"></div>
                                                    <div class="swatch-holder bg-success switch-sidebar-cs-class <?= $colorSettings['sidebar-class'] == 'bg-success sidebar-text-dark' ? 'active' : '' ?>" data-class="bg-success sidebar-text-dark"></div>
                                                    <div class="swatch-holder bg-info switch-sidebar-cs-class <?= $colorSettings['sidebar-class'] == 'bg-info sidebar-text-dark' ? 'active' : '' ?>" data-class="bg-info sidebar-text-dark"></div>
                                                    <div class="swatch-holder bg-warning switch-sidebar-cs-class <?= $colorSettings['sidebar-class'] == 'bg-warning sidebar-text-dark' ? 'active' : '' ?>" data-class="bg-warning sidebar-text-dark"></div>
                                                    <div class="swatch-holder bg-danger switch-sidebar-cs-class <?= $colorSettings['sidebar-class'] == 'bg-danger sidebar-text-light' ? 'active' : '' ?>" data-class="bg-danger sidebar-text-light"></div>
                                                    <div class="swatch-holder bg-light switch-sidebar-cs-class <?= $colorSettings['sidebar-class'] == 'bg-light sidebar-text-dark' ? 'active' : '' ?>" data-class="bg-light sidebar-text-dark"></div>
                                                    <div class="swatch-holder bg-dark switch-sidebar-cs-class <?= $colorSettings['sidebar-class'] == 'bg-dark sidebar-text-light' ? 'active' : '' ?>" data-class="bg-dark sidebar-text-light"></div>
                                                    <div class="swatch-holder bg-focus switch-sidebar-cs-class <?= $colorSettings['sidebar-class'] == 'bg-focus sidebar-text-light' ? 'active' : '' ?>" data-class="bg-focus sidebar-text-light"></div>
                                                    <div class="swatch-holder bg-alternate switch-sidebar-cs-class <?= $colorSettings['sidebar-class'] == 'bg-alternate sidebar-text-light' ? 'active' : '' ?>" data-class="bg-alternate sidebar-text-light"></div>

                                                    <div class="divider"></div>

                                                    <div class="swatch-holder bg-vicious-stance switch-sidebar-cs-class <?= $colorSettings['sidebar-class'] == 'bg-vicious-stance sidebar-text-light' ? 'active' : '' ?>" data-class="bg-vicious-stance sidebar-text-light"></div>
                                                    <div class="swatch-holder bg-midnight-bloom switch-sidebar-cs-class <?= $colorSettings['sidebar-class'] == 'bg-midnight-bloom sidebar-text-light' ? 'active' : '' ?>" data-class="bg-midnight-bloom sidebar-text-light"></div>
                                                    <div class="swatch-holder bg-night-sky switch-sidebar-cs-class <?= $colorSettings['sidebar-class'] == 'bg-night-sky sidebar-text-light' ? 'active' : '' ?>" data-class="bg-night-sky sidebar-text-light"></div>
                                                    <div class="swatch-holder bg-slick-carbon switch-sidebar-cs-class <?= $colorSettings['sidebar-class'] == 'bg-slick-carbon sidebar-text-light' ? 'active' : '' ?>" data-class="bg-slick-carbon sidebar-text-light"></div>
                                                    <div class="swatch-holder bg-asteroid switch-sidebar-cs-class <?= $colorSettings['sidebar-class'] == 'bg-asteroid sidebar-text-light' ? 'active' : '' ?>" data-class="bg-asteroid sidebar-text-light"></div>
                                                    <div class="swatch-holder bg-royal switch-sidebar-cs-class <?= $colorSettings['sidebar-class'] == 'bg-royal sidebar-text-light' ? 'active' : '' ?>" data-class="bg-royal sidebar-text-light"></div>
                                                    <div class="swatch-holder bg-warm-flame switch-sidebar-cs-class <?= $colorSettings['sidebar-class'] == 'bg-warm-flame sidebar-text-dark' ? 'active' : '' ?>" data-class="bg-warm-flame sidebar-text-dark"></div>
                                                    <div class="swatch-holder bg-night-fade switch-sidebar-cs-class <?= $colorSettings['sidebar-class'] == 'bg-night-fade sidebar-text-dark' ? 'active' : '' ?>" data-class="bg-night-fade sidebar-text-dark"></div>
                                                    <div class="swatch-holder bg-sunny-morning switch-sidebar-cs-class <?= $colorSettings['sidebar-class'] == 'bg-sunny-morning sidebar-text-dark' ? 'active' : '' ?>" data-class="bg-sunny-morning sidebar-text-dark"></div>
                                                    <div class="swatch-holder bg-tempting-azure switch-sidebar-cs-class <?= $colorSettings['sidebar-class'] == 'bg-tempting-azure sidebar-text-dark' ? 'active' : '' ?>" data-class="bg-tempting-azure sidebar-text-dark"></div>
                                                    <div class="swatch-holder bg-amy-crisp switch-sidebar-cs-class <?= $colorSettings['sidebar-class'] == 'bg-amy-crisp sidebar-text-dark' ? 'active' : '' ?>" data-class="bg-amy-crisp sidebar-text-dark"></div>
                                                    <div class="swatch-holder bg-heavy-rain switch-sidebar-cs-class <?= $colorSettings['sidebar-class'] == 'bg-heavy-rain sidebar-text-dark' ? 'active' : '' ?>" data-class="bg-heavy-rain sidebar-text-dark"></div>
                                                    <div class="swatch-holder bg-mean-fruit switch-sidebar-cs-class <?= $colorSettings['sidebar-class'] == 'bg-mean-fruit sidebar-text-dark' ? 'active' : '' ?>" data-class="bg-mean-fruit sidebar-text-dark"></div>
                                                    <div class="swatch-holder bg-malibu-beach switch-sidebar-cs-class <?= $colorSettings['sidebar-class'] == 'bg-malibu-beach sidebar-text-light' ? 'active' : '' ?>" data-class="bg-malibu-beach sidebar-text-light"></div>
                                                    <div class="swatch-holder bg-deep-blue switch-sidebar-cs-class <?= $colorSettings['sidebar-class'] == 'bg-deep-blue sidebar-text-dark' ? 'active' : '' ?>" data-class="bg-deep-blue sidebar-text-dark"></div>
                                                    <div class="swatch-holder bg-ripe-malin switch-sidebar-cs-class <?= $colorSettings['sidebar-class'] == 'bg-ripe-malin sidebar-text-light' ? 'active' : '' ?>" data-class="bg-ripe-malin sidebar-text-light"></div>
                                                    <div class="swatch-holder bg-arielle-smile switch-sidebar-cs-class <?= $colorSettings['sidebar-class'] == 'bg-arielle-smile sidebar-text-light' ? 'active' : '' ?>" data-class="bg-arielle-smile sidebar-text-light"></div>
                                                    <div class="swatch-holder bg-plum-plate switch-sidebar-cs-class <?= $colorSettings['sidebar-class'] == 'bg-plum-plate sidebar-text-light' ? 'active' : '' ?>" data-class="bg-plum-plate sidebar-text-light"></div>
                                                    <div class="swatch-holder bg-happy-fisher switch-sidebar-cs-class <?= $colorSettings['sidebar-class'] == 'bg-happy-fisher sidebar-text-dark' ? 'active' : '' ?>" data-class="bg-happy-fisher sidebar-text-dark"></div>
                                                    <div class="swatch-holder bg-happy-itmeo switch-sidebar-cs-class <?= $colorSettings['sidebar-class'] == 'bg-happy-itmeo sidebar-text-light' ? 'active' : '' ?>" data-class="bg-happy-itmeo sidebar-text-light"></div>
                                                    <div class="swatch-holder bg-mixed-hopes switch-sidebar-cs-class <?= $colorSettings['sidebar-class'] == 'bg-mixed-hopes sidebar-text-light' ? 'active' : '' ?>" data-class="bg-mixed-hopes sidebar-text-light"></div>
                                                    <div class="swatch-holder bg-strong-bliss switch-sidebar-cs-class <?= $colorSettings['sidebar-class'] == 'bg-strong-bliss sidebar-text-light' ? 'active' : '' ?>" data-class="bg-strong-bliss sidebar-text-light"></div>
                                                    <div class="swatch-holder bg-grow-early switch-sidebar-cs-class <?= $colorSettings['sidebar-class'] == 'bg-grow-early sidebar-text-light' ? 'active' : '' ?>" data-class="bg-grow-early sidebar-text-light"></div>
                                                    <div class="swatch-holder bg-love-kiss switch-sidebar-cs-class <?= $colorSettings['sidebar-class'] == 'bg-love-kiss sidebar-text-light' ? 'active' : '' ?>" data-class="bg-love-kiss sidebar-text-light"></div>
                                                    <div class="swatch-holder bg-premium-dark switch-sidebar-cs-class <?= $colorSettings['sidebar-class'] == 'bg-premium-dark sidebar-text-light' ? 'active' : '' ?>" data-class="bg-premium-dark sidebar-text-light"></div>
                                                    <div class="swatch-holder bg-happy-green switch-sidebar-cs-class <?= $colorSettings['sidebar-class'] == 'bg-happy-green sidebar-text-light' ? 'active' : '' ?>" data-class="bg-happy-green sidebar-text-light"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title d-flex align-items-center">
                                        Login Options

                                        <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-login-cs-class float-right" data-class="">
                                            Restore Default
                                        </button>
                                    </h5>

                                    <div class="p-3">
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <h5 class="pb-2">Choose Color Scheme
                                                </h5>

                                                <div class="theme-settings-swatches">
                                                    <div class="swatch-holder bg-primary switch-login-cs-class <?= $colorSettings['login-class'] == 'bg-primary' ? 'active' : '' ?>" data-class="bg-primary"></div>
                                                    <div class="swatch-holder bg-secondary switch-login-cs-class <?= $colorSettings['login-class'] == 'bg-secondary' ? 'active' : '' ?>" data-class="bg-secondary"></div>
                                                    <div class="swatch-holder bg-success switch-login-cs-class <?= $colorSettings['login-class'] == 'bg-success' ? 'active' : '' ?>" data-class="bg-success"></div>
                                                    <div class="swatch-holder bg-info switch-login-cs-class <?= $colorSettings['login-class'] == 'bg-info' ? 'active' : '' ?>" data-class="bg-info"></div>
                                                    <div class="swatch-holder bg-warning switch-login-cs-class <?= $colorSettings['login-class'] == 'bg-warning' ? 'active' : '' ?>" data-class="bg-warning"></div>
                                                    <div class="swatch-holder bg-danger switch-login-cs-class <?= $colorSettings['login-class'] == 'bg-danger' ? 'active' : '' ?>" data-class="bg-danger"></div>
                                                    <div class="swatch-holder bg-light switch-login-cs-class <?= $colorSettings['login-class'] == 'bg-light' ? 'active' : '' ?>" data-class="bg-light"></div>
                                                    <div class="swatch-holder bg-dark switch-login-cs-class <?= $colorSettings['login-class'] == 'bg-dark' ? 'active' : '' ?>" data-class="bg-dark"></div>
                                                    <div class="swatch-holder bg-focus switch-login-cs-class <?= $colorSettings['login-class'] == 'bg-focus' ? 'active' : '' ?>" data-class="bg-focus"></div>
                                                    <div class="swatch-holder bg-alternate switch-login-cs-class <?= $colorSettings['login-class'] == 'bg-alternate' ? 'active' : '' ?>" data-class="bg-alternate"></div>

                                                    <div class="divider"></div>

                                                    <div class="swatch-holder bg-vicious-stance switch-login-cs-class <?= $colorSettings['login-class'] == 'bg-vicious-stance' ? 'active' : '' ?>" data-class="bg-vicious-stance"></div>
                                                    <div class="swatch-holder bg-midnight-bloom switch-login-cs-class <?= $colorSettings['login-class'] == 'bg-midnight-bloom' ? 'active' : '' ?>" data-class="bg-midnight-bloom"></div>
                                                    <div class="swatch-holder bg-night-sky switch-login-cs-class <?= $colorSettings['login-class'] == 'bg-night-sky' ? 'active' : '' ?>" data-class="bg-night-sky"></div>
                                                    <div class="swatch-holder bg-slick-carbon switch-login-cs-class <?= $colorSettings['login-class'] == 'bg-slick-carbon' ? 'active' : '' ?>" data-class="bg-slick-carbon"></div>
                                                    <div class="swatch-holder bg-asteroid switch-login-cs-class <?= $colorSettings['login-class'] == 'bg-asteroid' ? 'active' : '' ?>" data-class="bg-asteroid"></div>
                                                    <div class="swatch-holder bg-royal switch-login-cs-class <?= $colorSettings['login-class'] == 'bg-royal' ? 'active' : '' ?>" data-class="bg-royal"></div>
                                                    <div class="swatch-holder bg-warm-flame switch-login-cs-class <?= $colorSettings['login-class'] == 'bg-warm-flame' ? 'active' : '' ?>" data-class="bg-warm-flame"></div>
                                                    <div class="swatch-holder bg-night-fade switch-login-cs-class <?= $colorSettings['login-class'] == 'bg-night-fade' ? 'active' : '' ?>" data-class="bg-night-fade"></div>
                                                    <div class="swatch-holder bg-sunny-morning switch-login-cs-class <?= $colorSettings['login-class'] == 'bg-sunny-morning' ? 'active' : '' ?>" data-class="bg-sunny-morning"></div>
                                                    <div class="swatch-holder bg-tempting-azure switch-login-cs-class <?= $colorSettings['login-class'] == 'bg-tempting-azure' ? 'active' : '' ?>" data-class="bg-tempting-azure"></div>
                                                    <div class="swatch-holder bg-amy-crisp switch-login-cs-class <?= $colorSettings['login-class'] == 'bg-amy-crisp' ? 'active' : '' ?>" data-class="bg-amy-crisp"></div>
                                                    <div class="swatch-holder bg-heavy-rain switch-login-cs-class <?= $colorSettings['login-class'] == 'bg-heavy-rain' ? 'active' : '' ?>" data-class="bg-heavy-rain"></div>
                                                    <div class="swatch-holder bg-mean-fruit switch-login-cs-class <?= $colorSettings['login-class'] == 'bg-mean-fruit' ? 'active' : '' ?>" data-class="bg-mean-fruit"></div>
                                                    <div class="swatch-holder bg-malibu-beach switch-login-cs-class <?= $colorSettings['login-class'] == 'bg-malibu-beach' ? 'active' : '' ?>" data-class="bg-malibu-beach"></div>
                                                    <div class="swatch-holder bg-deep-blue switch-login-cs-class <?= $colorSettings['login-class'] == 'bg-deep-blue' ? 'active' : '' ?>" data-class="bg-deep-blue"></div>
                                                    <div class="swatch-holder bg-ripe-malin switch-login-cs-class <?= $colorSettings['login-class'] == 'bg-ripe-malin' ? 'active' : '' ?>" data-class="bg-ripe-malin"></div>
                                                    <div class="swatch-holder bg-arielle-smile switch-login-cs-class <?= $colorSettings['login-class'] == 'bg-arielle-smile' ? 'active' : '' ?>" data-class="bg-arielle-smile"></div>
                                                    <div class="swatch-holder bg-plum-plate switch-login-cs-class <?= $colorSettings['login-class'] == 'bg-plum-plate' ? 'active' : '' ?>" data-class="bg-plum-plate"></div>
                                                    <div class="swatch-holder bg-happy-fisher switch-login-cs-class <?= $colorSettings['login-class'] == 'bg-happy-fisher' ? 'active' : '' ?>" data-class="bg-happy-fisher"></div>
                                                    <div class="swatch-holder bg-happy-itmeo switch-login-cs-class <?= $colorSettings['login-class'] == 'bg-happy-itmeo' ? 'active' : '' ?>" data-class="bg-happy-itmeo"></div>
                                                    <div class="swatch-holder bg-mixed-hopes switch-login-cs-class <?= $colorSettings['login-class'] == 'bg-mixed-hopes' ? 'active' : '' ?>" data-class="bg-mixed-hopes"></div>
                                                    <div class="swatch-holder bg-strong-bliss switch-login-cs-class <?= $colorSettings['login-class'] == 'bg-strong-bliss' ? 'active' : '' ?>" data-class="bg-strong-bliss"></div>
                                                    <div class="swatch-holder bg-grow-early switch-login-cs-class <?= $colorSettings['login-class'] == 'bg-grow-early' ? 'active' : '' ?>" data-class="bg-grow-early"></div>
                                                    <div class="swatch-holder bg-love-kiss switch-login-cs-class <?= $colorSettings['login-class'] == 'bg-love-kiss' ? 'active' : '' ?>" data-class="bg-love-kiss"></div>
                                                    <div class="swatch-holder bg-premium-dark switch-login-cs-class <?= $colorSettings['login-class'] == 'bg-premium-dark' ? 'active' : '' ?>" data-class="bg-premium-dark"></div>
                                                    <div class="swatch-holder bg-happy-green switch-login-cs-class <?= $colorSettings['login-class'] == 'bg-happy-green' ? 'active' : '' ?>" data-class="bg-happy-green"></div>
                                                </div>
                                            </li>

                                            <li class="list-group-item">
                                                <h5 class="pb-2">Page Style
                                                </h5>
                                                <div class="theme-settings-swatches">
                                                    <div role="group" class="mt-2 btn-group">
                                                        <button type="button" class="btn-wide btn-shadow btn-primary btn btn-secondary switch-login-class <?= $globalSettings['login-boxed'] ? "active" : "" ?>" data-class="login-boxed">
                                                            Boxed
                                                        </button>
                                                        <button type="button" class="btn-wide btn-shadow btn-primary btn btn-secondary switch-login-class <?= $globalSettings['login-full'] ? "active" : "" ?>" data-class="login-full">
                                                            Full
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title d-flex align-items-center">
                                        Main Content Options
                                    </h5>

                                    <div class="p-3">
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <h5 class="pb-2">Light Color Schemes
                                                </h5>
                                                <div class="theme-settings-swatches">
                                                    <div role="group" class="mt-2 btn-group">
                                                        <button type="button" class="btn-wide btn-shadow btn-primary btn btn-secondary switch-theme-class <?= $globalSettings['app-theme-white'] ? "active" : "" ?>" data-class="app-theme-white">
                                                            White Theme
                                                        </button>
                                                        <button type="button" class="btn-wide btn-shadow btn-primary btn btn-secondary switch-theme-class <?= $globalSettings['app-theme-gray'] ? "active" : "" ?>" data-class="app-theme-gray">
                                                            Gray Theme
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
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
</body>

</html>