<!doctype html>
<html lang="en">

<head>
    <title>Blogs | HSBM Global</title>

    <!-- Files -->
    <?php include 'layout/links.php' ?>
</head>

<body>
    <div class="app-container <?php foreach ($globalSettings as $type => $value): echo ($value) ? " " . $type : ''; endforeach; ?>">
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
                                    <i class="pe-7s-news-paper icon-gradient bg-mean-fruit"></i>
                                </div>
                                <div>Blogs
                                    <div class="page-title-subheading">All of your blogs are listed here.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="page-title-actions">
                                <a href="<?= base_url('admin/new-blog') ?>" class="btn-shadow btn btn-info" target="_blank">
                                    <span class="btn-icon-wrapper pr-2 opacity-7">
                                        <i class="fa fa-plus fa-w-20"></i>
                                    </span>

                                    New Blog
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <div class="table-responsive table-responsive-data2">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if ($blogs): ?>
                                            <?php $count = 1; ?>
                                            <?php foreach ($blogs as $blog): ?>
                                                <?php $category = $this->handler->getRecord($blog->category, 'blog_categories') ?>

                                                <tr>
                                                    <td>
                                                        <?= $count ?>
                                                    </td>
                                                    <td>
                                                        <span class="product-name">
                                                            <?= $blog->name ?>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <?= $category->name ?>
                                                    </td>
                                                    <td>
                                                        <?= $blog->status ? "<span class='text-success'>Active</span>" : "<span class='text-danger'>In-Active</span>" ?>
                                                    </td>
                                                    <td class="text-right">
                                                        <div class="table-data-feature">
                                                            <a href="<?= base_url('admin/update-blog/' . $blog->id); ?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="pe-7s-tools icon-gradient bg-success h5"></i>
                                                            </a>

                                                            <a href="javascript: void(0)" class="item" data-click="false" data-type="blogs" data-index="<?= $blog->id ?>" onclick="delPopup(this)" data-toggle="modal" data-target="#delModal" title="Delete">
                                                                <i class="pe-7s-trash icon-gradient bg-danger h5"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <?php $count++; ?>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <tr>
                                                <td colspan="6">No blogs have been added yet!</td>
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

    <!-- Scripts -->
    <?php include 'layout/scripts.php' ?>
    <?php include 'layout/functions.php' ?>

    <div class="modal fade del-record" tabindex="-1" role="dialog" aria-labelledby="delLabel" aria-hidden="true">
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
                    <p class="mb-0">Are you sure you want to delete this blog? This action will not be reversible.</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" onclick="delVal()" class="btn btn-primary">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <?php if (!empty($success_msg)) {
        echo "<script type='text/javascript'>toastr.options = {closeButton: true}, toastr.success('" . $success_msg . "')</script>";
    } else if (!empty($error_msg)) {
        echo "<script type='text/javascript'>toastr.options = {closeButton: true}, toastr.error('" . $error_msg . "')</script>";
    } ?>
</body>

</html>