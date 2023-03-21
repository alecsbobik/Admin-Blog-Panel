<div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 ps-5 ms-3">
                <img class="p-0" src="assets/images/22-studios-final.png" alt="22 STUDIOS" width="150" height="110">
            </div>
            <div class="col-md-9">

            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow sticky-top">
    <div class="container px-5">
        <a class="navbar-brand d-block d-sm-none d-md-none" href="#"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>

                <?php
                $navbarCategory = "SELECT * FROM categories WHERE navbar_status='0' AND status='0'";
                $navbarCategory_run = mysqli_query($con, $navbarCategory);

                if (mysqli_num_rows($navbarCategory_run) > 0) {
                    foreach ($navbarCategory_run as $navItems) {
                ?>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="category.php?title=<?= $navItems['slug']; ?>"><?= $navItems['name']; ?></a>
                        </li>
                <?php
                    }
                }
                ?>

                <?php if (isset($_SESSION['auth_user'])) : ?>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $_SESSION['auth_user']['user_name']; ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">My Profile</a></li>
                            <li>
                                <form action="allcode.php" method="post">
                                    <button type="submit" name="logout_btn" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                <?php endif; ?>

            </ul>
        </div>
    </div>
</nav>