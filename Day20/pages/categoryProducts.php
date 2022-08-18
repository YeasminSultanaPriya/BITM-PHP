<?php include "includes/header.php"?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($categoryProducts as $categoryProduct){ ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/images/<?php echo $categoryProduct['image']?>" class="card-img-top" style="height: 300px" alt="">
                    <div class="card-body">
                        <h2><?php echo $categoryProduct['name'] ?></h2>
                        <p>Price: <?php echo $categoryProduct['price'] ?> tk</p>
                        <a href="action.php?page=product-details&&id=<?php echo $categoryProduct['id'] ?>" class="btn btn-success float-end">Details</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php include "includes/footer.php"?>
