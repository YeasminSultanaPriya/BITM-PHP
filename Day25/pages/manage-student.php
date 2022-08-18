<?php include 'includes/header.php' ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Manage Student</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($students as $key => $student) { ?>
                                <tr>
                                    <td><?php echo ++$key; ?></td>
                                    <td><?php echo $student['name']; ?></td>
                                    <td><?php echo $student['email']; ?></td>
                                    <td><?php echo $student['phone']; ?></td>
                                    <td><?php echo $student['address']; ?></td>
                                    <td>
                                        <img src="<?php echo $student['image']; ?>" style="height: 100px; width: 100px" alt="">
                                    </td>
                                    <td><?php echo $student['description']; ?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'includes/footer.php' ?>
