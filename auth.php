<?php
require('./config/Database.php');

$conn = (new Database)->getConnection();
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query ="SELECT * FROM usuario WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {

    }
}