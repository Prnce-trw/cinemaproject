<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('inc_header.php'); ?>
</head>

<body>
    <?php include('inc_nav.php'); ?>
    <section id="register">
        <div class="card text-center">
            <h5 class="card-header">Sign in</h5>
            <div class="card-body">
                <p class="card-text">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">First Name <span class="text-danger">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" name="name" class="form-control" placeholder="First Name">
                        </div>
                        <label class="col-sm-2 col-form-label">Last Name <span class="text-danger">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" name="lname" class="form-control" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email <span class="text-danger">*</span></label>
                        <div class="col-sm-4">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <label class="col-sm-2 col-form-label">Password <span class="text-danger">*</span></label>
                        <div class="col-sm-4">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                </p>
                <a href="#" class="btn btn-primary">Create Account</a>
            </div>
        </div>
    </section>
</body>

</html>