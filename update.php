<?php
    session_start();

    $title = $_POST['title'];
    $price = $_POST['new_price'];

    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con,'db1');

    $result = mysqli_query($con,"select * from book where title='$title';");
    $num = mysqli_num_rows($result);

    for($i=1;$i<=$num;$i++)
    {

    $row = mysqli_fetch_array($result);
    $oldprice = $row['price'];

    }
    
    $q = "update book set price=$price where title='$title';";
    mysqli_query($con,$q);

    $_SESSION['status'] = "updated price of $title from $oldprice to $price";

    mysqli_close($con);
    header("Location: index.php");
?>
