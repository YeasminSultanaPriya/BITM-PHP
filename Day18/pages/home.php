
 <?php include 'includes/header.php'?>

<section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($students as $student){
                       ?>
                            <tr>
                                <td><?php echo $student['id'] ?></td>
                                <td><?php echo $student['name'] ?></td>
                                <td><?php echo $student['email'] ?></td>
                                <td><?php echo $student['phone'] ?></td>
                                <td><?php echo $student['address'] ?></td>
                            </tr>
                         <?php  } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>

 <?php include 'includes/footer.php'?>


