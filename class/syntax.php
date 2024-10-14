<?php

// echo 'syntax class' . '<br>';

// comment (single line comment)
/* mulitiline comment */

// php is case insensitive or not case sensitive
// ECHO same as echo same as Echo

// echo 'Helloooo';

// $name is not same as $Name is not same as $NAME

// $name = 'godbless';
// echo $name;

// data types (simple or primitive data types)
/* 
1) int
2) float(double)
3) string
4) boolean
5) NULL
*/

// integer (a whole number)
// $age = 23;
// echo $age;

// float or double (a decimal number)
// $rating = 4.5;
// echo $rating;


// strings (are sequence of characters enclosed in single or double quotes)

// $person = 'godbless';
// $full_name = "Ejovwo Godbless";

// echo $full_name, $person;

// string  concatenation

// $greet = 'Hello my name is ' . $name . ' and I am ' . $age . ' years old';
// echo $greet;

// $is_married = true;
// echo $is_married;

// NULL ()
// $empty_table = NULL;

// echo $empty_table;

// php output
// echo, print, print_r, var_dump, var_export

// echo
// 1) outputs string 2) it takes multiple argument
// echo 'Hello world', 23, true;
// print 
// 1) outputs string 2) con only take a single argument
// print('Hello world');

// // print_r (for strings)
// $names = ['godbless', 'emmanuel', 'benjamin'];
// print_r($names);
// echo '<br>';

// // var_dump (for strings)
// $names = ['godbless', 'emmanuel', 'benjamin'];
// var_dump($names);
// echo '<br>';

// // var_export (for any kind of data type)
// $names = ['godbless', 'emmanuel', 'benjamin'];
// var_export($names);
// $name = 'Godbless';
// var_export($name);
// $age = 34;
// var_export($age);

// operators
// if statemets

// // 
// switch ($variable) {
//     case 'value':
//         # code...
//         break;

//     default:
//         # code...
//         break;
// }

// $color = 'blue';
// switch ($color) {
//     case 'red':
//         echo 'your color is red';
//         break;
//     case 'blue':
//         echo 'your color is blue';
//         break;
//     case 'green':
//         echo 'your color is green';
//         break;
//     default:
//         echo 'not a match';
// };


// echo ucwords('hello world');

// $str = 'abc@gmail.com';

// var_dump(explode(' ', $str));

// write a function that converts kelvin to celcius


// function convertKelvinToCelcius($kelvin)
// {
//     $celcius = $kelvin - 273;
//     return $celcius;
// }


// $temp = convertKelvinToCelcius(100);
// echo $temp;


// factorial function

// function factorial($n)
// {
//     $result = 1;
//     if ($n < 0) {
//         return 'Cannot have a factorial';
//     }
//     for ($i = 1; $i <= $n; $i++) {
//         $result *= $i;
//     }
//     return $result;
// }

// echo factorial(-1);


// function factorial($n)
// {
//     if ($n < 0) {
//         return 'Cannot get factorial for negative values';
//     } else if ($n == 0) {
//         return 1;
//     } else {
//         return $n * factorial($n - 1);
//     };
// }

// echo factorial(-1);


// indexed array

// $arr = ['godbless', 'emmanuel', 'benjamin', 'theresa'];

// var_dump($arr);

// first index
// echo 0;
// first element of an array
// echo $arr[0];

// array length
// echo count($arr);

// last index
// count($arr) - 1
// therefore, the last element
// echo $arr[count($arr) - 1];

// looping through an array

// a loop is something that repeats itself
// continuously provided a certain conditino is <meta>


// 1) for loop and 2) while loop 3) foreach

// simple loops to print numbers

// for ($i = 0; $i < 15; $i += 2) {
//     echo $i . '<br>';
// }

// for ($i = 0; $i < count($arr); $i++) {
//     echo '<li>' . $arr[$i] . '</li>';
// }

// $i = 0;
// while ($i <= 10) {
//     echo $i . '<br>';
//     $i++;
// }

// foreach - used to loop through an array;

$arr = ['godbless', 'emmanuel', 'benjamin', 'theresa'];

// use for loop, while loop and foreach loop to print out:
//     1) godbless
//     2) emmanuel
//     3) benjamin
//     4) theresa 

// for ($i = 0; $i < count($arr); $i++) {
//     echo '<h2>' . $arr[$i] . '</h2>';
// }

// $user = true;
// $isadmin = true;



// $x = 75;


// function myfunction()
// {
//     $y = 5;
//     var_dump($GLOBALS);
// }

// myfunction();

// var_dump($_SERVER);

// echo $_SERVER['PHP_SELF'];
// echo $_SERVER['SERVER_NAME'];
// echo $_SERVER['HTTP_HOST'];
// echo $_SERVER['HTTP_REFERER'];
// echo $_SERVER['HTTP_USER_AGENT'];
// echo $_SERVER['SCRIPT_NAME'];


// PHP SUPERGLOBALS
// 1) GLOBALS
// 2) _SERVER
// 3) _REQUEST
// 4) _POST
// 5) _GET

// var_dump($_REQUEST);

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // echo $_REQUElast'];
//     // echo $_REQUEST['lastname'];
//     var_dump($_POST['firstname']);
//     var_dump($_POST['lastname']);
// }

$err = [];

$firstname = $lastname = '';

// if (isset($_POST['submit'])) {
if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    if (empty($_GET['firstname'])) {
        $err['firstname'] = 'firstname is needed';
    } else {
        $firstname = $_GET['firstname'];
    }

    if (empty($_GET['lastname'])) {
        $err['lastname'] = 'lastname is needed';
    } else {
        $lastname = $_GET['lastname'];
    }
}
http: //localhost/codefest_backend_class/class/syntax.php?firstname=GODBLESS&lastname=EJOVWO

?>

<form action=<?php echo $_SERVER['PHP_SELF'] ?> method="GET">
    <fieldset>
        <legend>
            <h3>Registration Form</h3>
        </legend>
        <input type="text" name='firstname' value=<?php echo $firstname ?>><br>
        <?php echo isset($err['firstname']) ? "<span class='err'>" . $err['firstname'] . "</span>" : ""; ?><br><br>
        <input type="text" name='lastname' value=<?php echo $lastname ?>><br>
        <?php echo isset($err['lastname']) ? "<span class='err'>" . $err['lastname'] . "</span>" : ""; ?><br><br>
        <button type="submit">Submit</button>
        <!-- <input type="submit" value="Register" name="submit"> -->
    </fieldset>
</form>

<style>
    .err {
        color: red;
    }
</style>

<script>
    let err = document.getElementsByClassName('err');

    for (let i = 0; i < err.length; i++) {
        setTimeout(() => {
            err[i].style.display = 'none';
        }, 3000)
    }
</script>

<?php

// $name = 'godbless';

// $name = 'emma';

// echo $name;

// PHP CONSTANTS

define('NAME', 'godbless');

echo NAME;

?>