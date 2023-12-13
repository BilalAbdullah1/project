<?php

include('../security.php');

if (isset($_POST['updatetesting'])) {
    $edit_id = $_POST['edit_id'];
    $product_name = $_POST['edit_product'];
    $product_designation = $_POST['edit_designation'];
    $product_description = $_POST['edit_description'];
    $product_image = $_FILES['product_image']['name'];
    $categort = $_POST['category_id'];
    $pstatus = $_POST['pstatus'];
    $comments = $_POST['comment'];

    $query = "UPDATE producttb SET pstatus= '$pstatus', comment = '$comments' WHERE pid='$edit_id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        move_uploaded_file($_FILES['product_image']['tmp_name'], "../upload/" . $_FILES["product_image"]["name"]);
        $_SESSION['success'] = "Product is Tested";
        header('Location: testingstatus.php');
    } else {
        echo "not done";
        $_SESSION['status'] = "Testing Issue Please Check";
        header('Location: testingstatus.php');
    }
}

?>