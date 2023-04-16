<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url('assets/media/bg_2.jpg') ?>');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?= base_url() ?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blogs <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-0 bread">Blogs</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
        <div class="heading-section pl-md-4 pt-md-5">
            <h2 class="mb-4">Your Source for expert insights and analysis on tax compliance, planning, and strategy</h2>
            <p>Stay ahead of the latest tax developments and opportunities with HSBM Global's tax blog. Our team of experienced tax experts provides valuable insights and analysis on a range of tax-related topics, including tax compliance, planning, and strategy for businesses and individuals.</p>
            <p>Our blog covers a variety of tax issues, including:</p>

            <ul>
                <li>Tax planning strategies to help you minimize tax liability and maximize deductions</li>
                <li>Updates on tax law changes and regulations</li>
                <li>Cross-border tax issues and compliance requirements</li>
                <li>Industry-specific tax issues and opportunities</li>
                <li>And much more!</li>
            </ul>

            <p>We are committed to providing our readers with valuable information and analysis on the latest tax issues and trends. Our blog is a reliable source of information for businesses and individuals alike, and we welcome your questions and feedback.</p>
            <p>So, whether you're a business owner, an individual taxpayer, or a fellow tax professional, our tax blog has something for you. Stay up-to-date on the latest tax developments and opportunities by subscribing to our blog today.</p>
            <p>And if you're looking for expert tax consulting services, contact HSBM Global today to learn how we can help you achieve your tax goals.</p>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                <?php if ($blogs) { ?>
                    <?php foreach ($blogs as $blog) { ?>
                        <?php $category = $this->handler->getRecord($blog->category, 'blog_categories') ?>

                        <div class="cases-wrap d-md-flex align-items-center">
                            <div class="img" style="background-image: url(<?= base_url($blog->image) ?>);"></div>
                            <div class="text pl-md-5">
                                <span class="cat">
                                    <?= $category->name ?>
                                </span>
                                <h2>
                                    <?= $blog->name ?>
                                </h2>
                                <p>
                                    <?= $blog->description ?>
                                </p>

                                <div class="meta mb-2">
                                    <div><?= date('F d, Y', strtotime($blog->created_at)) ?></div>
                                </div>

                                <p><a href="<?= base_url("blog/{$category->slug}/{$blog->slug}/") ?>" class="btn btn-primary">Read more</a></p>
                            </div>
                        </div>
                    <?php } ?>
                <?php } else { ?>
                    <?= $slug == NULL ? "No blogs have been added yet!" : "No blogs have been added in this category yet!" ?>
                <?php } ?>

                <div class="row mt-5">
                    <div class="col">
                        <div class="block-27">

                            <?php if (isset($links)) { ?>
                                <?php echo $links ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
                <?php if ($categories) { ?>
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <h3>Categories</h3>
                            <?php foreach ($categories as $category) { ?>
                                <li class="<?= $slug == $category->slug ? 'active font-weight-bold' : '' ?>"><a href="<?= base_url("blogs/{$category->slug}/") ?>"><?= $category->name ?> <span class="ion-ios-arrow-forward"></span></a></li>
                            <?php } ?>

                            <?php if ($slug != NULL) { ?>
                                <li><a href="<?= base_url('blogs') ?>">View All <span class="ion-ios-arrow-forward"></span></a></li>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>