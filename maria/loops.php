<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loops</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="mt-5 text-center">Loops in PHP</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h2>Exercise 1</h2>
                <p>Create loops which will print your name 50 times on the screen. </p>
            </div>
            <div class="col">
                <h3>For Loop</h3>
                <p>
                    <?php
                        $name = 'Maria';
                        for ($i=1; $i<=50; $i++) {
                            echo $i.': '.$name.'</br>';
                        }
                    ?>
                </p>
            </div>
            <div class="col">
                <h3>While Loop</h3>
                <p>
                    <?php                     
                        $i = 0;
                        while($i < 50) {
                            $i++;
                            echo $i.': '.$name.'</br>';
                        }
                        
                    ?>
                </p>
            </div>
            <div class="col">
                <h3>Do While Loop</h3>
                <p>
                    <?php
                        $i = 1;
                        do {
                            echo $i.': '.$name.'</br>';
                            $i++;
                        } while ($i <= 50);
                        
                    ?>
                </p>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-12">
                <h2>Exercise 2</h2>
                <p>Define a numeric array with 10 elements. Use a foreach loop to output the value of every array's
                    element.</p>
            </div>
            <div class="col">
                <p>
                    <h3>Foreach Loop</h3>
                    <?php 
                        $fruits = ['apple', 'pear', 'banana', 'strawberry', 'cherry', 'kiwi', 'mango', 'apricot', 'plum', 'durian'];
                        foreach($fruits as $value) {
                            echo $value.'</br>';
                        }
                    ?>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h2>Exercise 3</h2>
                <p>Create a function that will have a parameter. The argument given to that parameter should be an
                    array. The function should return the highest value from the array. Try to create an array with at
                    least 10 numbers created randomly. You may want to take a look at the rand() function from PHP.</p>
            </div>
            <div class="col">
                <h3>Calculate Hightes Number in Array</h3>
                <p>
                    <?php 
                        function calculateHighestNumber($arr) {
                            return max($arr);
                        }
                        $numArray = [5, 8, 6, 1, 54, 32, 610, 1, 648, -50, 4, -1, 0, 45];
                        echo calculateHighestNumber($numArray);
                    ?>
                </p>                 
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h2>Exercise 4</h2>
                <p>Create a PHP program that iterates the integers from 1 to 100. For multiples of three print
                    "Back-End" instead of the number and for the multiples of five print "Front-End". For numbers that
                    are multiples of both three and five print "Full-Stack".</p>
            </div>
            <div class="col">
                <p>
                    <?php 
                        function fizzBuzz() {
                            for ($i=1; $i<=100; $i++) {
                                if ($i % 3 === 0 && $i % 5 === 0) {
                                    echo 'Full-Stack</br>';
                                } elseif ($i % 3 === 0) {
                                    echo 'Back-End</br>';
                                } elseif ($i % 5 === 0) {
                                    echo 'Front-End</br>';
                                } else {
                                    echo $i.'</br>';
                                }
                            }                    
                        } 
                        fizzBuzz();
                    ?>
                </p>
            </div>
        </div>

    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>