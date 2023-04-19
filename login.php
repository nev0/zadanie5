<?php
if (isset($_SESSION['username'])){
    include "config.php";
}
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($connection, $query);
if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $user = array(
        'id' => $row['id'],
        'name' => $row['name'],
        'surname' => $row['surname']
    );
    echo json_encode($user);
} else {
    echo 'Nieprawidłowe dane logowania.';
}
?>