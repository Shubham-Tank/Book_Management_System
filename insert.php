<?php
    session_start();
    $id = $_POST["id"];
    $title = $_POST["title"];
    $price = $_POST["price"];
    
    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con,'db1');

    $query = "insert into book (id,title,price) values ($id,'$title',$price);";
    $ins = mysqli_query($con, $query);
    
    $_SESSION['status']="inserted id=$id | title=$title | price=$price";

    mysqli_close($con);

    header("Location: index.php");
?>