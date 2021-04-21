<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP3 Work Exe4</title>
</head>
<body>

<h1>Exercise 4: "Back-End", "Front-End", "Full-Stack"</h1>

<h2>Hello! How many times would you like to print? 😊</h2>
<form action="php3work_exe4.php"  method ="POST" >
           Times: <input type="text" name="n" /><br><br>
           <input  type="submit"  name="submit"  />
        </form>

    <?php 

if( isset($_POST['submit']))
       {

        //ask if blank
        if ($_POST["n"]=="") {
            echo "<br>Please enter the number of times! 😡";
        }

        else {
            $n = $_POST["n"];
            echo '<br>This will print: '.$n.' times<br><br>';

//start looping to 100
$i = 1;
while( $i<($n+1))
{
    switch ($i) {
        case $i % 15==0: //multiple of 15
            echo 'Full-Stack!';
            echo ' ('.$i.'/15 = '.$i/15 .')<br>';
            break;
        case $i % 3==0: //multiple of 3
            echo 'Back-End!';
            echo ' ('.$i.'/3 = '.$i/3 .')<br>';
            break;
        case $i % 5==0: //multiple of 5
            echo 'Front-End!';
            echo ' ('.$i.'/5 = '.$i/5 .')<br>';
            break;
        default:
            echo ($i).'<br>';
    }
    
    $i++;
}

        }
    }
?>

</body>
</html>