<?php include 'includes/header.php';?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
            <div class="col-md-4 mt-4">
                <div class="card">
                    <img src="assets/images/<?php echo $product['image'] ?>" alt="" class="card-img-top" style="height: 300px">
                    <div class="card-body">
                        <h3><?php echo $product['name'] ?></h3>
                        <p>Price: <?php echo $product['price'] ?>$</p>
                        <a href="action.php?page=product-details&&id=<?php echo $product['id'] ?>" class="btn btn-success float-end">Details</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>


<?php include 'includes/footer.php'; ?>




