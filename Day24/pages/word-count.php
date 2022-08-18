<?php include 'includes/header.php' ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2>Word Count</h2>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Given String</label>
                                <div class="col-md-8">

                                    <input type="text" name="given_string" class="form-control">

                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Result</label>
                                <div class="col-md-8">
                                    <textarea class="form-control" cols="30" rows="4">
                                        <?php
                                        echo isset($result['given_string'])? $result['given_string'] : '';
                                        echo isset($result['total_word'])? $result['total_word'] : '';
                                        echo isset($result['total_char'])? $result['total_char'] : ''
                                       ?>
                                    </textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <input type="submit" class="btn btn-primary" name="btn" value="Get Word Count Result">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'includes/footer.php' ?>


