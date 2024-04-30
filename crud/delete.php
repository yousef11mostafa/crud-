<?php
if ($_GET['deleteid']) {
    $id = $_GET['deleteid'];
    require('connect.php');
    $sql = "delete from students where id=$id";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        header("location:index.php");
    }
}
