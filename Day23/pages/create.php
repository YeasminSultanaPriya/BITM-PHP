
<?php include 'includes/header.php' ?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Create Student Information</h4>
                        </div>
<!--                        enctype="multipart/form-data" -> carries file data-->
                        <div class="card-body">
                            <form action="action.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <label class="col-md-4" for="">Student Name</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4" for="">Student Email</label>
                                    <div class="col-md-8">
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4" for="">Student Phone</label>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" name="phone">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4" for="">Student Image</label>
                                    <div class="col-md-8">
                                        <input type="file" class="form-control" name="image" accept="image/*" >
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4" for="">Student Description</label>
                                    <div class="col-md-8">
                                        <textarea name="description" class="form-control" cols="30" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6 mx-auto">
                                        <input type="submit" class="form-control btn btn-primary" name="student_info_btn" value="Save Student Information">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'includes/footer.php' ?>

<!--multiple->chose multiple file-->

