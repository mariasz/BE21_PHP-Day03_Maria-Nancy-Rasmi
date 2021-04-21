<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP3 Work Exe5</title>
</head>
<body>

<h1>Exercise 5: Restaurant Database</h1>

<?php

    require_once 'db_connect.php';

   $sql = "SELECT * FROM dishes";
   $result = mysqli_query($connect, $sql);
   $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html>
    <head>
       <title> Tea Plus Shop </title>
   </head >
   <body>
       <a href="create.php">create new record</a><br><br>

       <?php 
       $i = 0;
       while($i < count($rows)){
        echo "<p>";
        echo $rows[$i]['name']. " <a href='delete.php?id=" .$rows[$i]['dishID']."&name=" .$rows[$i]['name']."'>delete</a><br>" ;
            echo $rows[$i]['info']. "<br>" ;
            echo $rows[$i]['price']. "<br>" ;
            echo '<img src="' . $rows[$i]['image']. '" width="200" alt="'. $rows[$i]['name'] .'"><br>' ;
            echo "</p>";
        
           $i++;
       }
       
       ?>
   </body>
</html>

</body>
</html>