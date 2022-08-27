<?php include "includes/header.php"; ?>
<?php
if (!isset($_SESSION['id']))
{
    header('Location: action.php?page=login');
}
?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Manage Students</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Image</th>
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
                                        <img src="<?php echo $student['image']; ?>" alt="" style="height: 100px; width: 100px;">
                                    </td>
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
<?php include "includes/footer.php"; ?>
