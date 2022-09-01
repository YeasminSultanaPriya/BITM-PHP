<?php include "includes/header.php";?>

<section class="py-5">
    <div class="container-fluid px-5">
        <div class="row">
            <?php foreach ($newses as $news) { ?>
                <div class="col-md-3 mt-4">
                    <a href="action.php?page=news-details&&id=<?php echo $news['id'] ?>" class="nav-link" >
                        <div class="card p-3" style="height: 300px;">
                            <h5 class="fw-semibold"><?php echo $news['headline'] ?></h5>
                            <div class="card-body">
                                <p class="text-justify f-s-14"><?php echo $news['description'] ?></p>
                                <p><?php echo $news['time'] ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php';?>


