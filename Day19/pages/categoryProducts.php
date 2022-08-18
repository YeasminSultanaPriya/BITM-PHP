<?php include 'includes/header.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">All Products</h2>
            </div>
        </div>
        <div class="row mt-2">

            <?php foreach ($products as $product){ ?>
                <div class="col-md-4 mt-4">
                    <div class="card">
                        <img src="assets/images/<?php echo $product['image']?>" alt="" style="height: 350px">
                        <div class="card-body">
                            <h3><?php echo $product['name']?></h3>
                            <p>PRICE: <?php echo $product['price']?></p>
                            <a href="" class="btn btn-success float-end">Details</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php include 'includes/footer.php'; ?>


