<?php
   require_once 'db_connect.php';

   if(isset($_POST["submit"])){ // if the input that has the type submit has a value (when clicked)
       $name = $_POST["name"];
       $price = $_POST["price"];
       $info = $_POST["info"];
       $image = $_POST["image"];

       $sql = "INSERT INTO dishes (name, price, info, image) VALUES ('$name', '$price', '$info', '$image')";
                // query that creates a new record in the table test. The values come from the form

       if(mysqli_query($connect, $sql) == true){ // if the query runs successfully it will show a message and a link to go back to the home page.
           echo  "New record created<br>
           Dish: $name<br><br>
            <a href='php3work_exe5.php'>Home<br><br></a>";
       }

    }
?>

<!DOCTYPE html>
<html>
    <head>
       <title>create</title>
   </head>
   <body>
       <form method="post" >
           <input type="text"  name="name" placeholder= "Type the dish name">
           <input type="text"  name="price" placeholder= "Type the dish price">
           <input type="text"  name="info" placeholder= "Type the dish info">
           <input type="text"  name="image" placeholder= "Type the dish image URL">
           <input type="submit"  name="submit" value= "submit">
       </form>
    </body>
</html>