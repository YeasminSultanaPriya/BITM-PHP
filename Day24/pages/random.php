<?php include 'includes/header.php' ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2>Print random array data</h2>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Options</label>
                                <div class="col-md-8">
                                    <?php foreach ($datas as $index => $data){ ?>
                                    <label for=""><input type="checkbox" name="choice[]" <?php echo $index == 0? 'checked': '' ?>  value="<?php echo $data ?>"> <?php echo $data ?></label>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Result</label>
                                <div class="col-md-8">
                                    <textarea name="result" id="" cols="30" rows="4"><?php echo isset($result)? $result: ''?></textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <input type="submit" class="btn btn-primary" name="btn" value="Get Result">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'includes/footer.php' ?>
