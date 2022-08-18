<?php include 'includes/header.php';?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Calculator</h4>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="">
                                <label for="">First Number</label>
                                <input type="text" name="first_number" class="form-control" />
                            </div>
                            <div class="">
                                <label for="">Last Number</label>
                                <input type="text" name="last_number" class="form-control" />
                            </div>
                            <div class="row">
                                <label for="" class="col-2">Choice</label>
                                <div class="col-10">
                                    <label for=""><input type="radio" name="choice" value="+">+</label>
                                    <label for=""><input type="radio" name="choice" value="-">-</label>
                                    <label for=""><input type="radio" name="choice" value="*">*</label>
                                    <label for=""><input type="radio" name="choice" value="/">/</label>
                                    <label for=""><input type="radio" name="choice" value="%">%</label>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label for="">Result</label>
                                <input type="text" value="<?php echo isset($result)? $result: ''; ?>" class="form-control" />
                            </div>
                            <div class="mt-3">
                                <input type="submit" name="calculate_button" class="btn btn-success" value="Calculate" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php';?>
