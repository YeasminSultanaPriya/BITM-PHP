<?php include 'includes/header.php' ?>

<?php 
if(!isset($_SESSION['id'])){

    header('Location: action.php?page=login');
} 
?>


<?php include 'includes/footer.php' ?>
