<?php include 'includes/header.php';?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Full Name</h4>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="">
                                <label for="">First Name</label>
                                <input type="text" name="first_name" class="form-control" />
                            </div>
                            <div class="">
                                <label for="">Last Name</label>
                                <input type="text" name="last_name" class="form-control" />
                            </div>
                            <div class="">
                                <label for="">Result</label>
                                <input type="text" value="<?php echo isset($result)? $result: ''; ?>" class="form-control" />
                            </div>
                            <div class="mt-3">
                                <input type="submit" name="full_name_button" class="btn btn-success" value="Get Full Name" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php';?>
