<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $blog ? "Update" : "New" ?> Blog | HSBM Global</title>

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
                                <div><?= $blog ? "Update" : "New" ?> Blog
                                    <div class="page-title-subheading">Add/Update blogs on this page.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="main-card mb-3 card">
                        <form method="post" class="blogs-form" autocomplete="off" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="position-relative row form-group">
                                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input name="name" id="name" placeholder="Blog Name" type="text" value="<?= $blog ? $blog->name : "" ?>" class="form-control" autofocus required>
                                    </div>
                                </div>

                                <div class="position-relative row form-group">
                                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input name="title" id="title" placeholder="Blog Title" type="text" value="<?= $blog ? $blog->title : "" ?>" class="form-control" required>
                                    </div>
                                </div>

                                <div class="position-relative row form-group">
                                    <label for="image" class="col-sm-2 col-form-label">Featured Image</label>
                                    <div class="col-sm-10">
                                        <input name="image" id="image" placeholder="Featured Image" type="file" class="form-control-file" accept="image/*" <?= !$blog ? 'required' : '' ?>>
                                    </div>
                                </div>

                                <div class="position-relative row form-group">
                                    <label for="category" class="col-sm-2 col-form-label">Category</label>
                                    <div class="col-sm-10">
                                        <select name="category" id="category" class="form-control" required>
                                            <option value="">Select Category</option>

                                            <?php if ($categories) { ?>
                                                <?php foreach ($categories as $category) { ?>
                                                    <option value="<?= $category->id ?>" <?= ($blog && $blog->category == $category->id) ? "selected" : "" ?>><?= $category->name ?></option>
                                                <?php } ?>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="position-relative row form-group">
                                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea name="description" id="description" cols="30" rows="3" class="form-control" placeholder="Description" required><?= $blog ? $blog->description : "" ?></textarea>
                                    </div>
                                </div>

                                <div class="position-relative row form-group">
                                    <label for="blog" class="col-sm-2 col-form-label">Blog Content</label>
                                    <div class="col-sm-10">
                                        <textarea name="blog" id="blog" cols="30" rows="3" class="form-control" placeholder="Blog Content"><?= $blog ? $blog->blog : "" ?></textarea>
                                    </div>
                                </div>

                                <div class="position-relative row form-group">
                                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <select name="status" id="status" class="form-control" required>
                                            <option value="1" value="<?= ($blog && $blog->status == 1) ? "selected" : "" ?>">Active</option>
                                            <option value="0" value="<?= ($blog && $blog->status == 0) ? "selected" : "" ?>">In-Active</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <a href="<?= base_url('admin/blogs') ?>" class="btn btn-secondary">Cancel</a>
                                <input type="submit" name="submit" value="Submit" class="btn btn-success btn-save" data-type="<?= $blog ? 'update' : "add" ?>" data-index="<?= $blog ? $blog->id : "" ?>">
                            </div>
                        </form>
                    </div>

                </div>

                <?php include 'layout/footer.php' ?>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <?php include 'layout/scripts.php' ?>

    <?php include 'layout/functions.php' ?>

    <script>
        $(function () {
            initTinyMce('blog');

            $(document).on('submit', '.blogs-form', function (e) {
                e.preventDefault();

                var id = '';

                var url = "<?= base_url('ajax/new-blog') ?>";
                if ($('.btn-save').data('type') == 'update') {
                    id = $('.btn-save').data('index');
                    url = "<?= base_url('ajax/edit-blog') ?>";
                }

                $(this).ajaxSubmit({
                    url: url,
                    type: "post",
                    data: {id: id},
                    success: function (response) {
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
        });
    </script>
</body>

</html>