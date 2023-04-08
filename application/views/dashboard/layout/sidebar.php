<div class="app-sidebar sidebar-shadow <?= !empty($colorSettings['sidebar-class']) ? $colorSettings['sidebar-class'] : '' ?>">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu mt-3">
                <li>
                    <a href="<?= base_url('admin/dashboard'); ?>" class="<?= ($this->uri->segment(2) == 'dashboard') ? 'mm-active' : '' ?>">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Dashboard
                    </a>
                </li>

                <li class="<?= ($this->uri->segment(2) == 'blog-categories' || $this->uri->segment(2) == 'blogs') ? 'mm-active' : '' ?>">
                    <a href="#" class="<?= ($this->uri->segment(2) == 'blog-categories' || $this->uri->segment(2) == 'blogs') ? 'mm-active' : '' ?>">
                        <i class="metismenu-icon pe-7s-news-paper"></i>
                        Blogs
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>

                    <ul>
                        <li>
                            <a href="<?= base_url('admin/blog-categories'); ?>" class="<?= ($this->uri->segment(2) == 'blog-categories') ? 'mm-active' : '' ?>">
                                <i class="metismenu-icon"></i>Blog Catgories
                            </a>
                        </li>

                        <li>
                            <a href="<?= base_url('admin/blogs'); ?>" class="<?= ($this->uri->segment(2) == 'blogs') ? 'mm-active' : '' ?>">
                                <i class="metismenu-icon"></i>Blogs
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="<?= base_url('admin/subscribers'); ?>" class="<?= ($this->uri->segment(2) == 'subscribers') ? 'mm-active' : '' ?>">
                        <i class="metismenu-icon pe-7s-users"></i>
                        Subscribers
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>