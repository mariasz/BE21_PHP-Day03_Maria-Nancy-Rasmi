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

    <?php 
        require_once 'db_connect.php';

        if(isset($_GET["dishID"])){
            $id = $_GET[ "dishID" ]; // graphing the id value that is in the url

            $sql = "DELETE FROM dishes WHERE dishID = $id";
            if(mysqli_query($connect, $sql) == true){
                echo "<div class='container m-auto text-center m-5 p-5 fw-bold'>Dish deleted - return to <a href='index.php' class='text-primary'>List of dishes</a></div>";
            }
        }
    ?>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>