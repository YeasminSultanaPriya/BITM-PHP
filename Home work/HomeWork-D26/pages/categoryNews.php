<?php include "includes/header.php"?>
<?php 
if(!isset($_SESSION['id'])){

    header('Location: action.php?page=login');
} 
?>

<section class="py-5">
    <div class="container">
        <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">News Update</h2>
                </div>
                <div class="card-body">
                    <span class="text-center text-success"><?php echo isset($message) ? $message : '' ?></span>
                    <form action="action.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <label for="" class="col-md-4">Headline</label>
                            <div class="col-md-8">
                                <input type="text" name="headline" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label class="col-md-4" for="">Image</label>
                            <div class="col-md-8">
                                <input type="file" class="form-control" name="image" accept="image/*" >
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label class="col-md-4" for="">Description</label>
                            <div class="col-md-8">
                                <textarea name="description" class="form-control" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label class="col-md-4" for="">Reporter</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="reporter">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label class="col-md-4" for="">Published</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="published">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 mx-auto">
                            <input type="submit" class="form-control btn btn-primary" name="btn" value="Save News">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
<?php include "includes/footer.php"?>