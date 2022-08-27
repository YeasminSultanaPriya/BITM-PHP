<?php include "includes/header.php"; ?>
<?php
    if (!isset($_SESSION['id']))
    {
        header('Location: action.php?page=login');
    }
?>
<h2>Hello World</h2>
<?php include "includes/footer.php"; ?>
