<?php
    session_start();
    $title = $_POST['title'];

    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con,'db1');
    $q = "delete from book where title='$title';";
    mysqli_query($con,$q);

    $_SESSION['status']="deleted book named $title";

    mysqli_close($con);
    header("Location: index.php");
?>
