<?php
include('authentication.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">

    <?php include('../message.php'); ?>

    <h4 class="mt-4">Users</h4>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">Users</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Admin/User
                        <a href="view-register.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="post">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>First Name</label>
                                <input type="text" name="fname" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Last Name</label>
                                <input type="text" name="lname" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Password</label>
                                <input type="text" name="password" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Role</label>
                                <select name="role_as" required class="form-control">
                                    <option value="1">Admin</option>
                                    <option value="0">User</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Status</label> <br />
                                <input type="checkbox" name="status" width="70px" height="70px">
                            </div>

                            <div class="col-md-12 mb-3">
                                <button type="submit" class="btn btn-primary" name="add_user">Add Admin/User</button>
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