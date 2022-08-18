<?php include "includes/header.php"?>

<section class="py-5">
    <div class="container">
        <div class="row">
        <?php foreach ($categoryNewses as $categoryNews) { ?>
                <div class="col-md-3 mt-4">
                    <a href="action.php?page=news-details&&id=<?php echo $categoryNews['id'] ?>" class="nav-link" >
                        <div class="card p-3" style="height: 300px;">
                            <h5 class="fw-semibold"><?php echo $categoryNews['headline'] ?></h5>
                            <div class="card-body">
                                <p class="text-justify f-s-14"><?php echo $categoryNews['description'] ?></p>
                                <p><?php echo $categoryNews['time'] ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php include "includes/footer.php"?>