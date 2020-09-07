<?php

include ROOT_PATH . "/database/db.php";



$errors = array();



if (isset($_POST['add-Gateau'])){
    global $conn;
    if (!empty($_FILES['image']['name'])){
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination = ROOT_PATH . "/images/lesGateau/" . $image_name;
        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
        
        if ($result) {
            $_POST['G-image'] = $image_name;
            unset($_POST['add-Gateau']);
            $name = $_POST['Name'];
            $category = $_POST['category'];
            $Recipes = htmlentities($_POST['Recipes']);
            $image = time() . '_' . $_FILES['image']['name'];

            $sql = "INSERT INTO $table2 (`id`, `gateauName`, `gateauRecipes`, `gateauImage`, `gateauCategory`) VALUES
                                        (NULL, '$name', '$Recipes', '$image', '$category');";
            
            if ($conn->query($sql) === TRUE) {
                header('location: ' . BASE_URL . '/adminPanel.php');
                exit(); 
            } 
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();

        }else {
            array_push($errors, "Failed to upload image");
            echo($errors);
        }
    }else 
    {
        array_push($errors, "Psot image required");
        print_r ($errors);
    }
} 


if (isset($_POST['add-C'])){
    global $conn;
    unset($_POST['add-C']);
    $name = $_POST['C-name'];
    $sql = "INSERT INTO $table1 (`id`, `Category`) VALUES (NULL, '$name');";
    if ($conn->query($sql) === TRUE) {
        header('location: ' . BASE_URL . '/adminPanel.php');
        exit(); 
    } 
    else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}


if (isset($_GET['delate_G_id'])) {
    delate($table2, $_GET['delate_G_id']);
    header('location: ' . BASE_URL . '/adminPanel.php');
    exit();
}


if (isset($_GET['delate_C_id'])) {
    delate($table1, $_GET['delate_C_id']);
    header('location: ' . BASE_URL . '/adminPanel.php');
    exit();
}