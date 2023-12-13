<?php
session_start();
include('security.php');

if (isset($_POST['login_btn'])) {
    $email_login = $_POST['email'];
    $password_login = $_POST['password'];
    $usertype = $_POST['usertype'];

    $query = "SELECT * FROM registertb WHERE email='$email_login' AND password='$password_login' AND usertype='$usertype'";
    $query_run = mysqli_query($connection, $query);

    if ($user = mysqli_fetch_assoc($query_run)) {
        $_SESSION['username'] = $email_login;
        $_SESSION['usertype'] = $user['usertype'];

        if ($usertype == "admin") {
            header('Location: index.php');
        } else if ($usertype == "user") {
            header('Location: testingstatus.php');
        }
    } else {
        $_SESSION['status'] = "Email / Password is Invalid";
        header('Location: login.php');
    }
}
?>
