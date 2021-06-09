<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>
    <style>
        input{
           font-size: large; 
           margin:20px;
        }
        body{
            background-color: #333333;
        }
        button{
            background-color:cornflowerblue;
            font-size: large;
            margin: 10px;
        }
        div{
            margin-left: auto;
            margin-right: auto;
            width: 20%;
        }
        #btn{
            width:10%;
        }
        h3{
            color:orange;
        }
    </style>
</head>
<body>
    <form action="insert.php" method="POST" style="margin-left: auto;margin-right: auto;width: 20%;margin-top: 10%;">
        <h1 style="color:white;"> &nbsp &nbsp Register Book</h1>
        <input type="text" placeholder="Enter book id" name="id">
        <input type="text" placeholder="Enter book title" name="title">
        <input type="text" placeholder="Enter book price" name="price">
        <input type="submit" value="insert">
    </form>
    
    <div id="btn">
        <span>
            <form action="show.php">
                <button type="submit" id='button'> show table </button>
            </form>
        </span>
        <span>
            <form action="update.html">
                <button type="submit"> update price </button>
            </form>
        </span>
        <span>
            <form action="delete.html">
                <button type="submit"> delete record </button>
            </form>
        </span>
    </div>
    <div>
        <h3>
            <?php
                session_start();
                if (isset($_SESSION['status'])){
                    echo $_SESSION['status'];
                }
                session_destroy();
            ?>
        </h3>
    </div>
</body>
</html>