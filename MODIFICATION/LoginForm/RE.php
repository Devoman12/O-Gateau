
<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/database/db.php"); ?>


<?php 

if (isset($_POST['login'])){

    if ($_POST['email'] == "admin@admin" && $_POST['password'] == "admin") {
        session_destroy();
        session_start();
        $_SESSION['id'] = "1";
        $_SESSION['name'] = "admin";
        header('location: ' . BASE_URL . '/adminPanel.php');
        
    }
    else {
        session_destroy();
        header('location: ' . BASE_URL . '/index.php');
    }

}

?>