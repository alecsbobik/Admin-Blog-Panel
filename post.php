<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php
                if (isset($_GET['title'])) {
                    $slug = mysqli_real_escape_string($con, $_GET['title']);
                    $posts = "SELECT * FROM posts WHERE slug='$slug'";
                    $posts_run = mysqli_query($con, $posts);

                    if (mysqli_num_rows($posts_run) > 0) {
                        foreach ($posts_run as $postItem) {
                ?>
                            <div class="card shadow-sm mb-4">
                                <div class="card-header">
                                    <?= $postItem['name']; ?>
                                </div>
                                <div class="card-body">
                                    <label class="text-dark me-2">Posted
                                        On: <?= date('D-M-Y', strtotime($postItem['created_at'])); ?></label>
                                    <hr />
                                    <?php if ($postItem['image'] != null) : ?>

                                        <img src="uploads/posts/<?= $postItem['image']; ?>" class="w-50 mb-3" alt="<?= $postItem['name']; ?>">

                                    <?php endif ?>
                                    <div class="">
                                        <?= $postItem['description']; ?>
                                    </div>
                                </div>
                            </div>
                            </a>
                        <?php
                        }
                    } else {
                        ?>
                        <h4>No Such Post Found</h4>
                    <?php
                    }
                } else {
                    ?>
                    <h4>No Such URL Found</h4>
                <?php
                }
                ?>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Advertise Area</h4>
                    </div>
                    <div class="card-body">
                        advertisement
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
include('includes/footer.php');
?>