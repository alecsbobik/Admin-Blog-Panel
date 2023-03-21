<?php
if (isset($_SESSION['auth'])) {
    if (!isset($_SESSION['message'])) {
        $_SESSION['message'] = "You are already logged in";
    }
    header("Location: index.php");
    exit(0);
}

include('includes/header.php');
include('includes/navbar.php');
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">

                <!-- Message -->
                <?php include('message.php'); ?>

                <div class="card">
                    <div class="card-header">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        <form action="logincode.php" method="post">
                            <div class="form-group mb-3">
                                <label>Email</label>
                                <input required type="email" name="email" placeholder="Enter Email Address" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Password</label>
                                <input required type="password" name="password" placeholder="Enter Password" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button class="btn btn-primary" name="login_btn" type="submit">Login Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/header.php');
?>