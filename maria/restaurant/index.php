<?php

    require_once 'db_connect.php';

   $sql = "SELECT * FROM dishes";
   $result = mysqli_query($connect, $sql);
   $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html>

<head>
    <title>Restaurant </title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <?php include 'navbar.php' ?>


    <div class="container d-flex flex-wrap p-2">
        <div class="card-group">

        <?php 
            foreach ($rows as $row) {
                echo "<div class='card' style='width: 18rem;'>
                    <img class='card-img-top' src='".$row['image']."' alt='".$row['dishName']."'>
                    <div class='card-body'>
                        <h5 class='card-title'>".$row['dishName']."</h5>
                        <p class='card-text'>".$row['dishDescription']."</p>
                    </div>
                    <ul class='list-group list-group-flush'>
                        <li class='list-group-item'>Price: ".$row['price']."</li>
                    </ul>
                    <div class='card-footer text-end'>
                        <small class='text-muted'><a href='delete.php?dishID=".$row['dishID']."' class='btn btn-danger'>delete dish</a></small>
                        
                    </div>
                </div>";
            }
        ?>

        </div>
    </div>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
        </script>
</body>

</html>