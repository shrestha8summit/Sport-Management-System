<?php
session_start();
include "db.php";

if(isset($_POST['uid'], $_POST['pass'])) {
    $uid = $_POST['uid'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM login WHERE uid='$uid' AND pass='$pass'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['uid'] = $row['uid'];
        header("Location: workspace.php");
        exit();
    } else {
        header("Location: index.php?error=Incorrect UID or password");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
?>
