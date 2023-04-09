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
                                    <i class="pe-7s-users icon-gradient bg-mean-fruit"></i>
                                </div>
                                <div>Blogs
                                    <div class="page-title-subheading">All of your blogs are listed here.
                                    </div>
                                </div>
                            </div>
                            <div class="page-title-actions">
                                <button data-toggle="modal" data-target=".new-blog" class="btn-shadow btn btn-info">
                                    <span class="btn-icon-wrapper pr-2 opacity-7">
                                        <i class="fa fa-plus fa-w-20"></i>
                                    </span>

                                    New Blog
                                </button>
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
                                                        <?= $blog->category ?>
                                                    </td>
                                                    <td>
                                                        <?= $blog->status ? "<span class='text-success'>Active</span>" : "<span class='text-danger'>In-Active</span>" ?>
                                                    </td>
                                                    <td class="text-right">
                                                        <div class="table-data-feature">
                                                            <a href="javascript: void(0)" class="item edit-blog" data-index="<?= $blog->id ?>" data-toggle="tooltip" data-placement="top" title="Edit">
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

    <div class="modal fade new-blog" tabindex="-1" role="dialog" aria-labelledby="blogLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="blogLabel">New Blog</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="post" class="blog-form" autocomplete="off">
                    <div class="modal-body">
                        <div class="position-relative row form-group">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input name="name" id="name" placeholder="Blog Name" type="text" class="form-control" autofocus required>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="title" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input name="title" id="title" placeholder="Blog Title" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="description" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea name="description" id="description" cols="30" rows="3" class="form-control" placeholder="Description" required></textarea>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="category" class="col-sm-2 col-form-label">Category</label>
                            <div class="col-sm-10">
                                <select name="category" id="category" class="form-control" required>
                                    <option value="">Select Category</option>

                                    <?php if ($categories) { ?>
                                        <?php foreach ($categories as $category) { ?>
                                            <option value="<?= $category->id ?>"><?= $category->name ?></option>
                                        <?php } ?>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="blog" class="col-sm-2 col-form-label">Blog Content</label>
                            <div class="col-sm-10">
                                <textarea name="blog" id="blog" cols="30" rows="3" class="form-control" placeholder="Blog" required></textarea>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="status" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                <select name="status" id="status" class="form-control" required>
                                    <option value="1">Active</option>
                                    <option value="0">In-Active</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-cancel" data-dismiss="modal">Close</button>
                        <input type="submit" name="submit" value="Submit" class="btn btn-success btn-save" data-type="add">
                    </div>
                </form>
            </div>
        </div>
    </div>

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
    
    <script type="text/javascript">
        $(function () {
            $(document).on('submit', '.blogs-form', function (e) {
                e.preventDefault();

                var id = '';
                var name = $('#name').val();
                var title = $('#title').val();
                var description = $('#description').val();
                var category = $('#category').val();
                var blog = $('#blog').val();
                var status = $('#status').val();

                var url = "<?= base_url('ajax/new-blog') ?>";
                if ($('.btn-save').data('type') == 'update') {
                    id = $('.btn-save').data('index');
                    url = "<?= base_url('ajax/edit-blog') ?>";
                }

                $.ajax({
                    url: url,
                    type: "post",
                    data: {
                        id: id,
                        name: name,
                        title: title,
                        description: description,
                        category: category,
                        blog: blog,
                        status: status,
                    },
                    success: function (response) {
                        $('.new-blog').modal('hide');

                        if (response.status) {
                            toastr.success(response.message, '', {
                                timeOut: 2,
                                onHidden: function () {
                                    window.location.href = "<?= base_url('admin/blogs') ?>";
                                }
                            });
                        } else {
                            toastr.error('Some error occurred, please try again!', '', {
                                preventDuplicates: true
                            });
                        }
                    }
                });
            });

            $('.new-blog').on('hide.bs.modal', function () {
                $('#name, #title, #description, #category, #blog').val('');
                $('#status').val('1');
                $('#blogLabel').text('New Blog');
                $('.btn-save').data('type', 'add');
            });

            $('.new-blog').on('show.bs.modal', function () {
                initTinyMce('blog');
            });

            $(document).on('click', '.edit-blog', function () {
                var blog_id = $(this).data('index');

                $.ajax({
                    url: "<?= base_url('ajax/get-blog') ?>",
                    type: "post",
                    data: {
                        blog_id: blog_id,
                    },
                    success: function (response) {
                        $('#name').val(response.blog.name);
                        $('#title').val(response.blog.title);
                        $('#description').val(response.blog.description);
                        $('#category').val(response.blog.category);
                        $('#blog').val(response.blog.blog);

                        $('#status').val(response.blog.status);

                        $('#blogLabel').text('Update Blog');
                        $('.btn-save').data('type', 'update').data('index', blog_id);

                        $('.new-blog').modal('show');
                    }
                });
            });
        });
    </script>
</body>

</html>