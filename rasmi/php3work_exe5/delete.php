<?php 
require_once 'db_connect.php';

if(isset($_GET["id"])){
   $id = $_GET[ "id" ]; // graphing the id value that is in the url
   $name = $_GET[ "name" ]; // graphing the name value that is in the url

   $sql = "DELETE FROM dishes WHERE dishID = $id";
   if(mysqli_query($connect, $sql) == true){
        echo "Record deleted<br>
        Name: $name<br><br>
        <a href='php3work_exe5.php'>Home<br><br></a>";
   }
}