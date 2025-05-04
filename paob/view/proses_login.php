<?php 
require_once '../app/model/Osis.php';

$data = new Osis();
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($data->connectDB(), "SELECT * FROM users 
    WHERE username = '$username'");

    if (mysqli_num_rows($result) > 0) {
       $row = mysqli_fetch_object($result);
       if ($password === $row->password) {
            $_SESSION['username'] = $username;
            header('Location: admin.php');
       }else{
            $_SESSION['message'] = 'Pasword Salah!';
            header('Location: login.php');
       }
    }else{
        $_SESSION['message'] = 'Username belum terdaftar!';
        header('Location: login.php');
    }
}

?>