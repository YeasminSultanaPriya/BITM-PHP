<?php include 'includes/header.php' ?>
<?php 
if(!isset($_SESSION['id'])){

    header('Location: action.php?page=login');
} 
?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($newses as $key => $news) {?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h4><?php echo $news['headline']; ?></h4>
                        </div>
                        <div class="card-body">
                            <?php 
                            if($news['image'] != ""){
                            ?>
                            <img src="<?php echo $news['image']; ?>" alt="" style="height: 200px; width: 100%;">
                            <?php }?>
                        
                            <p><?php echo $news['description'] ?></p>
                            <p><?php echo $news['reporter'] ?></p>
                            <p><?php echo $news['published'] ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>


<?php include 'includes/footer.php' ?>
