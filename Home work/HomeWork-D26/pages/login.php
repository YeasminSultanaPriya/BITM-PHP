<?php include 'includes/header.php' ?>
<?php 
if(isset($_SESSION['id'])){

    header('Location: action.php?page=home');
} 
?>

<section class="py-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Login</h2>
                    </div>
                    <div class="card-body">
                        <span class="text-center text-danger"><?php echo isset($message)? $message: ''?></span>
                        <form action="action.php" method="post" enctype="multipart/form-data">
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Email: </label>
                                <div class="col-md-8">
                                    <input type="text" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Password: </label>
                                <div class="col-md-8">
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                            
                            <div class="row mt-3">
                                <div class="col-md-6 mx-auto">
                                    <input type="submit" name="login_btn" class="btn btn-primary form-control" value="Login">
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
