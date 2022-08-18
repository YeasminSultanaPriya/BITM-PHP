<?php include 'includes/header.php' ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Student Information</h2>
                    </div>
                    <div class="card-body">
                        <span class="text-center text-success"><?php echo isset($message)? $message: ''?></span>
                        <form action="action.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <label for="" class="col-md-4">Student Name: </label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Email: </label>
                                <div class="col-md-8">
                                    <input type="text" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Phone: </label>
                                <div class="col-md-8">
                                    <input type="text" name="phone" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Address </label>
                                <div class="col-md-8">
                                    <textarea name="address" class="form-control" cols="30" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Image: </label>
                                <div class="col-md-8">
                                    <input type="file" name="image" class="form-control" accept="image/*">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Description: </label>
                                <div class="col-md-8">
                                    <textarea name="description" class="form-control" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 mx-auto">
                                    <input type="submit" name="btn" class="btn btn-primary form-control" value="Save Information">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'includes/footer.php' ?>
