<!DOCTYPE html>
<html>

<head>
    <title>Add a new dish</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <?php include 'navbar.php' ?>
    <div class="container d-flex flex-wrap p-2">
        <form method="post">
            <input type="text" name="dishName" placeholder="Enter name of dish">
            <input type="text" name="image" placeholder="Enter URL for image">
            <input type="text" name="price" placeholder="Enter the price of the dish">
            <input type="text" name="dishDescription" placeholder="Enter dish description">
            <input type="submit" name="submit" value="submit">
        </form>
    </div>

    <?php
        require_once 'db_connect.php';

        if(isset($_POST["submit"])){ 
            $dishName = $_POST["dishName"]; 
            $image = $_POST["image"]; 
            $price = $_POST["price"]; 
            $dishDescription = $_POST["dishDescription"]; 

            $sql = "INSERT INTO dishes (dishName, image, price, dishDescription) VALUES ('$dishName', '$image', '$price', '$dishDescription')";

            if(mysqli_query($connect, $sql) == true){ 
                echo "<div class='container m-auto text-center m-5 p-5 fw-bold'>".$dishName." created - return to <a href='index.php' class='text-primary'>List of dishes</a></div>";
            }
        }
    ?>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
        </script>
</body>

</html>