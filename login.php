<?php
session_start();
require('./float/db_connection.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = $conn->prepare("SELECT id, role, password FROM user WHERE username = ?");
$sql->bind_param("s", $username);
$sql->execute();
$result = $sql->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    if ($password === $user['password']) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role'];
        
        if ($user['role'] == 1) {
            header("Location: ../float/judgeTable.php");
        } elseif ($user['role'] == 2) {
            header("Location: adminDashboard.php");
        } else {
            echo "Invalid role.";
        }
    } else {
        echo "Invalid password.";
    }
} else {
    echo "No user found with that username.";
}

$conn->close();
?>
