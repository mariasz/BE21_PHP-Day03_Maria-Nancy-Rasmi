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

                <div class="accordion accordion-flush open" id="accordionForLoop">
                    <h4>For Loop</h4>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingForLoopCode">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseForLoopCode" aria-expanded="false"
                                aria-controls="flush-collapseForLoopCode">
                                Show Code
                            </button>
                        </h2>
                        <div id="flush-collapseForLoopCode" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingForLoopCode">
                            <div class="accordion-body">
                                <pre><code>$name = 'Maria';</br>for ($i=1; $i<=50; $i++) {</br>  echo $i.': '.$name.'&lt;/br&gt;';</br>}</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingForLoopResult">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseForLoopResult" aria-expanded="false"
                                aria-controls="flush-collapseForLoopResult">
                                Show Result
                            </button>
                        </h2>
                        <div id="flush-collapseForLoopResult" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingForLoopResult">
                            <div class="accordion-body">
                                <?php
                                    $name = 'Maria';
                                    for ($i=1; $i<=50; $i++) {
                                        echo $i.': '.$name.'</br>';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="accordion accordion-flush" id="accordionWhileLoop">
                    <h4>While Loop</h4>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingWhileLoopCode">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseWhileLoopCode" aria-expanded="false"
                                aria-controls="flush-collapseWhileLoopCode">
                                Show Code
                            </button>
                        </h2>
                        <div id="flush-collapseWhileLoopCode" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingWhileLoopCode">
                            <div class="accordion-body">
                                <pre><code>$name = 'Maria';</br>$i = 0;</br>while($i < 50) {</br>  $i++;</br>  echo $i.': '.$name.'&lt;/br&gt;';</br>}</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingWhileLoopResult">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseWhileLoopResult" aria-expanded="false"
                                aria-controls="flush-collapseWhileLoopResult">
                                Show Result
                            </button>
                        </h2>
                        <div id="flush-collapseWhileLoopResult" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingWhileLoopResult">
                            <div class="accordion-body">
                                <?php                     
                                    $i = 0;
                                    while($i < 50) {
                                        $i++;
                                        echo $i.': '.$name.'</br>';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="accordion accordion-flush" id="accordionWhileLoop">
                    <h4>Do While Loop</h4>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingDoWhileLoopCode">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseDoWhileLoopCode" aria-expanded="false"
                                aria-controls="flush-collapseDoWhileLoopCode">
                                Show Code
                            </button>
                        </h2>
                        <div id="flush-collapseDoWhileLoopCode" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingDoWhileLoopCode">
                            <div class="accordion-body">
                                <pre><code>$name = 'Maria';</br>$i = 1;</br>do {</br>  echo $i.': '.$name.'&lt;/br&gt;';</br>  $i++;</br>} while ($i <= 50);</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingDoWhileLoopResult">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseDoWhileLoopResult" aria-expanded="false"
                                aria-controls="flush-collapseDoWhileLoopResult">
                                Show Result
                            </button>
                        </h2>
                        <div id="flush-collapseDoWhileLoopResult" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingDoWhileLoopResult">
                            <div class="accordion-body">
                                <?php                     
                                    $i = 1;
                                    do {
                                        echo $i.': '.$name.'</br>';
                                        $i++;
                                    } while ($i <= 50);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p>&nbsp;</p>
        <div class="row">
            <div class="col-lg-12">
                <h2>Exercise 2</h2>
                <p>Define a numeric array with 10 elements. Use a foreach loop to output the value of every array's
                    element.</p>
            </div>

            <div class="accordion accordion-flush" id="accordionForeachLoop">
                <h4>Foreach Loop</h4>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingDoForeachLoopCode">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseDoForeachLoopCode" aria-expanded="false"
                            aria-controls="flush-collapseDoForeachLoopCode">
                            Show Code
                        </button>
                    </h2>
                    <div id="flush-collapseDoForeachLoopCode" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingDoForeachLoopCode">
                        <div class="accordion-body">
                            <pre><code>$fruits = ['apple', 'pear', 'banana', 'strawberry', 'cherry', 'kiwi', 'mango', 'apricot', 'plum', 'durian'];</br>foreach($fruits as $value) {</br>  echo $value.'&lt;/br&gt;';</br>}</code></pre>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingDoForeachLoopResult">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseDoForeachLoopResult" aria-expanded="false"
                            aria-controls="flush-collapseDoForeachLoopResult">
                            Show Result
                        </button>
                    </h2>
                    <div id="flush-collapseDoForeachLoopResult" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingDoForeachLoopResult">
                        <div class="accordion-body">
                            <?php                     
                                $fruits = ['apple', 'pear', 'banana', 'strawberry', 'cherry', 'kiwi', 'mango', 'apricot', 'plum', 'durian'];
                                foreach($fruits as $value) {
                                    echo $value.'</br>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p>&nbsp;</p>
        <div class="row">
            <div class="col-lg-12">
                <h2>Exercise 3</h2>
                <p>Create a function that will have a parameter. The argument given to that parameter should be an
                    array. The function should return the highest value from the array. Try to create an array with at
                    least 10 numbers created randomly. You may want to take a look at the rand() function from PHP.</p>
            </div>
            <div class="accordion accordion-flush" id="accordionHighestNumber">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingDoHighestNumberCode">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseDoHighestNumberCode" aria-expanded="false"
                            aria-controls="flush-collapseDoHighestNumberCode">
                            Show Code
                        </button>
                    </h2>
                    <div id="flush-collapseDoHighestNumberCode" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingDoHighestNumberCode">
                        <div class="accordion-body">
                            <pre><code>function calculateHighestNumber($arr) {</br>  echo 'The largest number in '.json_encode($arr).' is: '.max($arr).'.';</br>}</br>$numArray = array();</br>for( $i=0; $i<10; $i++)</br>{</br>  $numArray[$i] = rand(-100,100);</br>}</br>calculateHighestNumber($numArray);</code></pre>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingDoHighestNumberResult">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseDoHighestNumberResult" aria-expanded="false"
                            aria-controls="flush-collapseDoHighestNumberResult">
                            Show Result
                        </button>
                    </h2>
                    <div id="flush-collapseDoHighestNumberResult" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingDoHighestNumberResult">
                        <div class="accordion-body">
                            <?php                     
                                function calculateHighestNumber($arr) {
                                    echo 'The largest number in '.json_encode($arr).' is: '.max($arr).'.';
                                }
                                $numArray = array(); 
                                for( $i=0; $i<10; $i++)
                                {
                                    $numArray[$i] = rand(-100,100);
                                }
                                calculateHighestNumber($numArray);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p>&nbsp;</p>
        <div class="row">
            <div class="col-lg-12">
                <h2>Exercise 4</h2>
                <p>Create a PHP program that iterates the integers from 1 to 100. For multiples of three print
                    "Back-End" instead of the number and for the multiples of five print "Front-End". For numbers that
                    are multiples of both three and five print "Full-Stack".</p>
            </div>

            <div class="accordion accordion-flush" id="accordionFizzBuzz">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingDoFizzBuzzCode">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseDoFizzBuzzCode" aria-expanded="false"
                            aria-controls="flush-collapseDoFizzBuzzCode">
                            Show Code
                        </button>
                    </h2>
                    <div id="flush-collapseDoFizzBuzzCode" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingDoFizzBuzzCode">
                        <div class="accordion-body">
                            <pre><code>function fizzBuzz() {</br>  for ($i=1; $i<=100; $i++) {</br>    if ($i % 3 == 0 && $i % 5 == 0) {</br>      echo 'Full-Stack&lt;/br&gt;';</br>    } elseif ($i % 3 == 0) {</br>      echo 'Back-End&lt;/br&gt;';</br>    } elseif ($i % 5 == 0) {</br>      echo 'Front-End&lt;/br&gt;';</br>    } else {</br>      echo $i.'&lt;/br&gt;';</br>    }</br>  }</br>}</br>fizzBuzz();</code></pre>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingDoFizzBuzzResult">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseDoFizzBuzzResult" aria-expanded="false"
                            aria-controls="flush-collapseDoFizzBuzzResult">
                            Show Result
                        </button>
                    </h2>
                    <div id="flush-collapseDoFizzBuzzResult" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingDoFizzBuzzResult">
                        <div class="accordion-body">
                            <?php                     
                                function fizzBuzz() {
                                    for ($i=1; $i<=100; $i++) {
                                        if ($i % 3 == 0 && $i % 5 == 0) {
                                            echo 'Full-Stack</br>';
                                        } elseif ($i % 3 == 0) {
                                            echo 'Back-End</br>';
                                        } elseif ($i % 5 == 0) {
                                            echo 'Front-End</br>';
                                        } else {
                                            echo $i.'</br>';
                                        }
                                    }                    
                                } 
                                fizzBuzz();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>