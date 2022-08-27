<?php include 'includes/header.php' ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($allNews  as $key=> $news) { ?>
                <div class="col-md-3 mt-5">
                    <div class="card "  >
                        <img src="<?php echo $news['image'] ;?>" class="card-img-top" alt="" style="height: 200px">
                        <div class="card-body"  >
                            <h5 class="fw-bold"><?php echo $news['heading']?></h5>
                            <p><?php echo $news['description']?></p>
                            <a href="action.php?page=newsDetails&&news-id=<?php echo ++$key; ?>" class="btn btn-outline-warning float-end mt-2 ">Read more</a>


                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>

<?php include 'includes/footer.php' ?>
