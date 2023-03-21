<?php
include('authentication.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">

    <div class="row mt-4">
        <div class="col-md-12">

            <?php include('../message.php'); ?>

            <div class="card">
                <div class="card-header">
                    <h4>Create Post
                        <a href="post-view.php" class="btn btn-danger float-end">View Post</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label>Category</label>
                                <?php
                                $category = "SELECT * FROM categories WHERE status='0'";
                                $category_run = mysqli_query($con, $category);

                                if (mysqli_num_rows($category_run) > 0) {
                                ?>
                                <select name="category_id" class="form-control">
                                    <option value="">-- Select Category --</option>
                                    <?php
                                        foreach ($category_run as $category_item) {
                                        ?>
                                    <option value="<?= $category_item['id']; ?>"><?= $category_item['name']; ?></option>
                                    <?php
                                        }
                                        ?>
                                </select>
                                <?php
                                } else {
                                ?>
                                <h4>No Category Available</h4>
                                <?php
                                }
                                ?>

                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Slug (URL)</label>
                                <input type="text" name="slug" class="form-control">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label>Description</label>
                                <textarea name="description" id="summernote" class="form-control"></textarea>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label>Meta Title</label>
                                <input type="text" name="meta_title" max="191" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Meta Description</label>
                                <textarea name="meta_description" id="" class="form-control" rows="4"></textarea>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Meta Keyword</label> <br />
                                <textarea name="meta_keyword" id="" class="form-control" rows="4"></textarea>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Status</label> <br />
                                <input type="checkbox" name="status" width="70px" height="70px"> Hide
                            </div>

                            <div class="col-md-12 mb-3">
                                <button type="submit" class="btn btn-primary" name="post_create">Create Post</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>