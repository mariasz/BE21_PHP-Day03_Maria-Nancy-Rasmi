<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP3 Work Exe1</title>
</head>
<body>

<h1>Exercise 1: Print your name 50 times</h1>

<h2>Hello! What's your name? 😊</h2>
<form action="php3work_exe1.php"  method ="POST" >
           Name: <input type="text" name="name" /><br><br>
           <input  type="submit"  name="submit"  />
        </form>

    <?php 
    
    if( isset($_POST['submit']))
       {

        //ask if blank
        if ($_POST["name"]=="") {
            echo "<br>Please tell me your name! 😡";
        }

        else {
       $name = $_POST["name"];
    //Exercise 1: print your name 50 times
//FOR loops
echo "<h2>FOR loop</h2>";
    for( $i=1; $i<51 ; $i++)
{
    echo "$name, row $i<br>";
}

//WHILE loops
echo "<h2>WHILE loop</h2>";
$i=1;
while($i<51)
{
    echo "$name, row $i<br>";
    $i++;
}

//DO WHILE loops
echo "<h2>DO WHILE loop</h2>";
$i=1;
do
{
    echo "$name, row $i<br>";
    $i++;
} while($i<51);

        }
    }
    ?>
</body>
</html>