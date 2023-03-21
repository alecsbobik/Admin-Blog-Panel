<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<div class=" py-5" style="background-color: #FE7C34;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Category</h3>
                <div class="underline"></div>
            </div>

            <?php
            $homeCategory = "SELECT * FROM categories WHERE navbar_status='0' AND status='0' LIMIT 12";
            $homeCategory_run = mysqli_query($con, $homeCategory);

            if (mysqli_num_rows($homeCategory_run) > 0) {
                foreach ($homeCategory_run as $homeItems) {
            ?>
                    <div class="col-md-3 mb-4">
                        <a class="text-decoration-none text-dark" href="category.php?title=<?= $homeItems['slug']; ?>">
                            <div class="card card-body">
                                <?= $homeItems['name']; ?>
                            </div>
                        </a>
                    </div>
            <?php
                }
            }
            ?>

        </div>
    </div>
</div>

<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h3 class="text-dark">22 STUDIO</h3>
                <div class="underline"></div>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea, provident excepturi! Maxime quae
                    voluptas quidem necessitatibus voluptatum voluptatem quod illo, culpa, delectus harum labore beatae
                    enim ullam ut debitis eum? Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique,
                    voluptatem.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h3 class="text-dark">Latest Post</h3>
                <div class="underline"></div>

                <?php
                $homePosts = "SELECT * FROM posts WHERE status='0' ORDER BY id DESC LIMIT 5";
                $homePosts_run = mysqli_query($con, $homePosts);

                if (mysqli_num_rows($homePosts_run) > 0) {
                    foreach ($homePosts_run as $homePosts) {
                ?>
                        <div class="mb-4">
                            <a class="text-decoration-none" href="post.php?title=<?= $homePosts['slug']; ?>">
                                <div class="card card-body bg-light">
                                    <?= $homePosts['name']; ?>
                                </div>
                            </a>
                        </div>
                <?php
                    }
                }
                ?>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Reach Us</h4>
                    </div>
                    <div class="card-body">
                        22studio@lec.com
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
?>