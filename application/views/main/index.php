<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="hero-wrap">
    <div class="home-slider owl-carousel">
        <div class="slider-item" style="background-image:url(<?= base_url('assets/media/bg_1.webp') ?>);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center">
                    <div class="col-md-8 ftco-animate">
                        <div class="text w-100 text-center">
                            <h2>Simplifying Your Accounting and Tax Matters</h2>
                            <h1 class="mb-4">Expert Accounting and Tax Consulting Services for Businesses and Individuals</h1>
                            <p><a href="<?= base_url('contact-us') ?>" class="btn btn-white">Connect with us</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ftco-section ftco-no-pt ftco-no-pb bg-light">
    <div class="container">
        <div class="row d-flex no-gutters">
            <div class="col-md-12 py-5">
                <p>Welcome to HSBM Global, a leading accounting and tax consulting firm with offices in Ireland, United Kingdom, UAE, and Pakistan. Our team of experienced accounting and tax experts is dedicated to helping businesses and individuals navigate the complex world of finance and taxation, while saving them time and money.</p>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section bg-light ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading"></span>
                <h2>Our Services</h2>
            </div>
        </div>

        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-12 ftco-animate">
                <p>At HSBM Global, we understand the challenges and concerns that businesses and individuals face when it comes to accounting and taxation. That's why we take a personalized approach to every client, working closely with them to understand their unique needs and goals. Our team is committed to providing clear, straightforward advice and guidance, with a focus on delivering measurable results.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-4 d-flex services align-self-stretch px-4 pb-5 ftco-animate">
                <div class="d-block">
                    <div class="icon d-flex mr-2">
                        <span class="flaticon-accounting-1"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Accounting &amp; Book-Keeping</h3>
                        <p>Keep your finances in order and ensure compliance with local finance and tax laws.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex services align-self-stretch px-4 pb-5 ftco-animate">
                <div class="d-block">
                    <div class="icon d-flex mr-2">
                        <span class="flaticon-tax"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Tax Compliance</h3>
                        <p>Avoid costly penalties by staying up-to-date with tax regulations and by allowing us to assist you in fulfilling all of your tax obligations in an accurate and timely manner.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex services align-self-stretch px-4 pb-5 ftco-animate">
                <div class="d-block">
                    <div class="icon d-flex mr-2">
                        <span class="flaticon-tax"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Tax Controversy</h3>
                        <p>Protect your rights and minimize tax liabilities in disputes with tax authorities.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex services align-self-stretch px-4 pb-5 ftco-animate">
                <div class="d-block">
                    <div class="icon d-flex mr-2">
                        <span class="flaticon-tax"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Tax Planning</h3>
                        <p>Maximize tax efficiency and minimize tax liabilities through strategic tax planning.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex services align-self-stretch px-4 pb-5 ftco-animate">
                <div class="d-block">
                    <div class="icon d-flex mr-2">
                        <span class="flaticon-budget"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">International Tax Consulting</h3>
                        <p>Navigate the complexities of international tax laws and regulations.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading"></span>
                <h2>About Us</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <p>With decades of combined experience in accounting and tax consulting, our team has a proven track record of success in helping clients achieve their accounting and tax-related objectives. We pride ourselves on our deep knowledge of local and international tax laws and regulations, as well as our commitment to staying up-to-date on the latest developments in the field.</p>
                <div class="text-center"><a href="<?= base_url('contact-us') ?>">Contact us today to schedule a consultation and learn how we can help you simplify your accounting and tax matters</a></div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/testimonials.php'; ?>

<?php if ($recent) { ?>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">News &amp; Blog</span>
                    <h2>Latest news from our blog</h2>
                </div>
            </div>

            <div class="row d-flex">
                <?php foreach ($recent as $item) { ?>
                    <?php $category = $this->handler->getRecord($item->category, 'blog_categories') ?>

                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="<?= base_url("blog/{$category->slug}/{$item->slug}/") ?>" class="block-20 rounded" style="background-image: url(<?= base_url($item->image) ?>);">
                            </a>
                            <div class="text p-4">
                                <div class="meta mb-2">
                                    <div><span class="icon-calendar"></span>
                                        <?= date('F d, Y', strtotime($item->created_at)) ?>
                                    </div>
                                </div>

                                <h3 class="heading"><a href="<?= base_url("blog/{$category->slug}/{$item->slug}/") ?>"><?= $item->name ?></a></h3>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>