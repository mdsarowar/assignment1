<?php include 'pages/includes/header.php' ?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Login Page</h3>
                        </div>
                        <div class="card-body">
                            <?php if (isset($message)) { ?>
                                <h6 class="text-danger text-center"><?php echo $message; ?></h6>
                            <?php } ?>
                            <div>
                                <form action="action.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 col-form-label"> Email</label>
                                        <input type="email" name="email" class="col-md-8 form-control">
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 col-form-label"> Password</label>
                                        <input type="password" name="pass" class="col-md-8 form-control">
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-4"> </label>
                                        <input type="submit" name="loginbtn" class="btn btn-outline-success btn btn-block " value="Signin">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'pages/includes/footer.php' ?>
