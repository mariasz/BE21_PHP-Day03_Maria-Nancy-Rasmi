<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP3 Work Exe3</title>
</head>
<body>

<h1>Exercise 3: The maximum value of a random array</h1>

<h2>Hello! How many element of array would you like? 😊</h2>
<form action="php3work_exe3.php"  method ="POST" >
           Element: <input type="text" name="element" /><br><br>
           <input  type="submit"  name="submit"  />
        </form>


    <?php 

if( isset($_POST['submit']))
       {

        //ask if blank
        if ($_POST["element"]=="") {
            echo "<br>Please enter the number of element! 😡";
        }

        else {
            $elem = $_POST["element"];
            echo '<br>Thank you!<br><br>';
            echo 'The array has: '.$elem.' elements<br><br>';

//making array with n random numbers
$array = array();
for( $i=1; $i<($elem+1) ; $i++)
{
    $a = rand();
    $array[$i] = $a;
    echo 'Element #'.$i.' = '.$a.'<br>';    
}

//function of max in array
function maxarray($a) {
    $maxnum = max($a);
    $row = array_search($maxnum, $a);
    $res = array($row, max($a));
    return $res;
}
echo '<br>';
echo 'The maximum value in this array is: '.maxarray($array)[1].'<br>';
echo 'Which is the element #: '.maxarray($array)[0].'<br>';

        }
    }
?>

</body>
</html>