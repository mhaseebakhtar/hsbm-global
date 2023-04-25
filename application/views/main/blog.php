<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url('assets/media/bg_2.webp') ?>');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?= base_url() ?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blogs <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-0 bread">
                    <?= $blog->name ?>
                </h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section blog-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                <p><img class="img-fluid" src="<?= base_url($blog->image) ?>"></p>

                <?= $blog->blog ?>
            </div>

            <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
                <?php if ($categories) { ?>
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <h3>Categories</h3>
                            <?php foreach ($categories as $category) { ?>
                                <li class="<?= $categorySlug == $category->slug ? 'active font-weight-bold' : '' ?>"><a href="<?= base_url("blogs/{$category->slug}/") ?>"><?= $category->name ?> <span class="ion-ios-arrow-forward"></span></a></li>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>

                <?php if ($recent) { ?>
                    <div class="sidebar-box ftco-animate">
                        <h3>Recent Blogs</h3>

                        <?php foreach ($recent as $item) { ?>
                            <?php $category = $this->handler->getRecord($item->category, 'blog_categories') ?>

                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4" style="background-image: url(<?= base_url($item->image) ?>);"></a>
                                <div class="text">
                                    <h3 class="heading"><a href="<?= base_url("blog/{$category->slug}/{$item->slug}/") ?>"><?= $item->name ?></a></h3>
                                    <div class="meta">
                                        <div><span class="icon-calendar"></span>
                                            <?= date('F d, Y', strtotime($item->created_at)) ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>