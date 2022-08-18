<?php include 'includes/header.php' ?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h2>Print Random Array Data</h2>
                        </div>
                        <div class="card-body">
                            <form action="action.php" method="post">
                                <div class="row">
                                    <label for="" class="col-md-4">Options</label>
                                    <div class="col-md-8">
                                        <?php foreach ($randoms as $random) { ?> 
                                        <label for=""><input type="checkbox" name="choice[]" value="<?php echo $random ?>"><?php echo $random ?></label>
                                        <?php } ?> 
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Result</label>
                                    <div class="col-md-8">
                                        <textarea cols="30" rows="5" class="form-control"><?php echo isset($result)? $result : '' ?></textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <input type="submit" class="btn btn-primary form-control" name="btn" value="Get Value">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php' ?>