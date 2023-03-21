<?php
include('includes/header.php');
if (isset($_SESSION['auth'])) {
    $_SESSION['message'] = "You are already registered";
    header("Location: index.php");
    exit(0);
}
include('includes/navbar.php');
?>

<div class="">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">

                <!-- Message -->
                <?php include('message.php'); ?>

                <div class="card mt-0">
                    <div class="card-header">
                        <h4>Register</h4>
                    </div>
                    <div class="card-body">
                        <form action="registercode.php" method="post">
                            <div class="form-group mb-3">
                                <label>First Name</label>
                                <input type="text" name="fname" placeholder="Enter Your First Name" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label>Last Name</label>
                                <input type="text" name="lname" placeholder="Enter Your Last Name" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label>Email</label>
                                <input type="email" name="email" placeholder="Enter Email Address" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label>Password</label>
                                <input type="password" name="password" placeholder="Enter Password" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label>Confirm Password</label>
                                <input type="password" name="cpassword" placeholder="Confirm Your Password" class="form-control" required>
                            </div>
                            <div class="form-group mb-2">
                                <button class="btn btn-primary" name="register_btn" type="submit">Register Now</button>
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