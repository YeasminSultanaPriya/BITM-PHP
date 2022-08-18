<?php include 'includes/header.php'; ?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <img src="assets/img/<?php echo $productDetails['image'] ?>" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6">
                    <h2><?php echo $productDetails['name'] ?></h2>
                    <p>Product Price: <?php echo $productDetails['price'] ?> tk</p>
                    <p><?php echo $productDetails['description'] ?></p>
                </div>
            </div>
        </div>
    </section>
<?php include 'includes/footer.php'; ?>