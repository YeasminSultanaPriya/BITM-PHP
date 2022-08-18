<?php include 'includes/header.php' ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Series</h2>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Starting Number</label>
                                <div class="col-md-8">
                                    <input type="number" name="starting_number" value="" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Ending Number</label>
                                <div class="col-md-8">
                                    <input type="number" name="ending_number" value="" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Result</label>
                                <div class="col-md-8">
                                    <textarea name="" class="form-control" id="" cols="30" rows="4"><?php echo isset($result)? $result: ''?></textarea>
                                </div>
                            </div>
                            <div class="mt-3">
                                <input type="submit" name="series-btn" value="Get Result" class=" btn btn-success form-control">
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php' ?>
