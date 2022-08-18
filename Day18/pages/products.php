

<?php include 'includes/header.php'?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>All Products</h2>
                <div class="row">
                    <?php foreach ($products as $product){ ?>
                    <div class="col-md-4 mt-4">
                        <div class="card">
                            <img src="assets/images/<?php echo $product['image']?>" alt="" style="height: 350px" class="card-img-top">
                            <div class="card-body">
                                <h3><?php echo $product['name']?></h3>
                                <p><?php echo $product['price']?></p>
                                <a href="" class="btn btn-outline-warning float-end">Order</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'?>
