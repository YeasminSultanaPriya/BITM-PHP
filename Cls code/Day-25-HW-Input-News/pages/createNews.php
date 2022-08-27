<?php include "includes/header.php"; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>Create News</h3>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="post" enctype="multipart/form-data">
                            <span class="text-center text-success"><?php echo isset($message) ? $message : '' ?></span>

                            <div class="row ">
                                <label for="" class="col-md-4">News Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="image" class="form-control" accept="image/*"/>
                                </div>
                            </div>

                            <div class="row mt-3">
                            <label for="" class="col-md-4">News Heading</label>
                            <div class="col-md-8">
                                <input type="text" name="heading" class="form-control"/>
                            </div>
                        </div>
                            <div class="row mt-3">
                            <label for="" class="col-md-4">News Description</label>
                            <div class="col-md-8">
                                <textarea name="description" cols="30" rows="10" class="form-control" ></textarea>
                            </div>

                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit" name="btn" class="btn btn-success" value="Create News"/>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "includes/footer.php"; ?>

