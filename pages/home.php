


<?php include 'pages/includes/header.php'?>
    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Student information</h3>
                        </div>
                        <div class="card-body">
                            <div>
                                <form action="">
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 col-form-label">Student Name</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="name"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 col-form-label">Email</label>
                                        <div class="col-md-8">
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 col-form-label">phone</label>
                                        <div class="col-md-8">
                                            <input type="number" name="phone" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 col-form-label">Image</label>
                                        <div class="col-md-8">
                                            <input type="file" name="image" accept="image/*">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 "></label>
                                        <div class="col-md-8">
                                            <input type="submit" name="btn" class="btn btn-outline-success btn btn-block" value="submit data ">
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'pages/includes/footer.php'?>
