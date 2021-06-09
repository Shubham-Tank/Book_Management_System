<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show Table</title>
</head>
<style>
    td,th{
        width:100px;
        padding:10px;
        border:solid black 1px;
        margin:0px 0px 0px 0px;
        text-align:center;
        font-size:20px;
        border-color:grey;
    }
    table{
        border-collapse:collapse;
        margin-left:auto;
        margin-right:auto;
        width:30%;
    }
    body{
        background-color:#333333;
        color:white;
    }
</style>
<body>
    <?php
        $con = mysqli_connect('localhost','root');
        mysqli_select_db($con,'db1');
        $result = mysqli_query($con,"select * from book;");
        $num = mysqli_num_rows($result);
    ?>
    <table>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>price</th>
        </tr>
        <?php
            for($i=1;$i<=$num;$i++)
            {
                $row = mysqli_fetch_array($result);
                echo "<tr> <td>".$row["id"]."</td> <td>".$row['title']."</td> <td>".$row['price']."</td> </tr>";
            } 
            mysqli_close($con);
        ?>
    </table>
</body>
</html>