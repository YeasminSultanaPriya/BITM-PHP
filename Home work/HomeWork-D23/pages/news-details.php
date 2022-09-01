<?php include "includes/header.php" ?>
<section class="py-5">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <h2><?php echo $newsDetails['headline']?></h2>
                <img src="assets/images/<?php echo $newsDetails['image']?>" class="img-fluid w-100" alt="" style="height: 300px;">
                <p><?php echo $newsDetails['reporter']?></p>
                <p><?php echo $newsDetails['published']?></p>
                <p><?php echo $newsDetails['description']?></p>
            </div>
        </div>
    </div>
</section>
<?php include "includes/footer.php" ?>