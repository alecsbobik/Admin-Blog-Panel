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
                    <h4>Add Category
                        <a href="category-view.php" class="btn btn-danger float-end">View Category</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="post">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Slug (URL)</label>
                                <input type="text" name="slug" class="form-control" required>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label>Description</label>
                                <textarea name="description" id="" class="form-control" required rows="4"></textarea>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label>Meta Title</label>
                                <input type="text" name="meta_title" max="191" class="form-control" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Meta Description</label>
                                <textarea name="meta_description" id="" class="form-control" required
                                    rows="4"></textarea>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Meta Keyword</label> <br />
                                <textarea name="meta_keyword" id="" class="form-control" required rows="4"></textarea>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Navbar Status</label> <br />
                                <input type="checkbox" name="navbar_status" width="70px" height="70px">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Status</label> <br />
                                <input type="checkbox" name="status" width="70px" height="70px"> Hide
                            </div>

                            <div class="col-md-12 mb-3">
                                <button type="submit" class="btn btn-primary" name="category_add">Add Category</button>
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