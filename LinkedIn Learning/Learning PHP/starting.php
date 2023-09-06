<?php
    echo 'Hello World';
//  To leave a single-line comment, type two forward slashes (//) followed by your comment text. All text to the right of the // will be ignored. You can also use a hash symbol (#) instead of // to make a single-line comment.

?>

<?php
    print ''
?>

<?php
    $age = 34;
    echo $age; //outputs 34
    $age = 35; //Happy Birthday!
    $double_age = $age *2;
    echo $double_age; //outputs 70
?>

<?php
    define('VERSION', 1.1); //name of constant, then value
    echo VERSION;
     
    VERSION = 1.2; //Will not work
    define('VERSION', 1.2); //Not works

    $name = "Jose";  //this is a string
    $first_letter = 'J' //this is character?
?>

<?php
    $name = 'Joe';
    echo "Hello, $name"
?>

<?php    
    $name = 'Joe';
    echo 'Welcome to Joe\'s Website.';
?>
<?php
    echo 'This is line 1';
    echo 'This is line 2';

    echo "This is line 1 \n";
    echo "This is line 2";
?>
<?php
    echo "Joe's Nickname in HS was \"Joey Calzone\"";
?>

<?php 
    Colors [
    0 => read
    1 => blue
    2 => green 
    ]

    //Size 3 array
?>

<?php

//Indexable Array
$colors = array('red','blue','green');
print_r($color);
echo '<p>' . $colors[1] . '</p>'; //indexable array right
$colors[] = 'yellow';
print_r( $colors );

//Associative Arrays 
$home_towns = array(
    'Joe' => 'Middletown, NY',
    'Erin' => 'West Chester, PA',
    'Dave' => 'Exton, PA',
    'Brian' => 'Grand Rapids, MI'

);
echo '<pre>';
print_r( $home_towns );
echo '</pre>';

//print Dave's town
echo '<p>' .  $home_towns['Dave'] . '</p>';
?>

<?php
//A multidimensional array
    $brothers = array(
        'Joe' => array(
            'age' => 34,
            'job' => 'teacher',
            'state' => 'PA',
        ),
        'Phil' => array(
            'age' => 33
            'job' => 'photographer',
            'state' => 'NY',
        ),
        'Mike' => array(
            'age' => 32,
            'job' => 'logistics',
            'state' => 'NY',
        ),
        'Phil' => array(
            'age' => 29
            'job' => 'manager',
            'state' => 'FL',
        ),
        );
        echo '<pre>';
        print_r($brothers);
        echo '</pre>'

        echo '<p>' . $brothers['Rob'].'</p>'; //this is wrong! cause Rob is an arrow
        echo '<p>'.$brothers['Rob']['state'] . '</p>'

?>

<?php
$name = "Teresa"; //Heading 1
$city = "NYC";
$movie = "Star Wars"; //Italics
$friend = "George"; //Bold
$candy = "Sour Patch Kids";

echo '<h1>'. $name .'</h1> is going to' . $city . 'to watch <i>' . $movie . '</i> with <b>' . $friend . '</b>'
?>

<h1><?php echo $name;?>!</h1>
<?php
echo "<h1>Hello, $name!</h1>\n\n";
echo "<p>So glad you can join us in $city today! you will be <b>$friend</b>'s guide as you do a range of activities.</p>\n\n";
echo "<p>You will end your day by seeing <i>$movie</i> at 7:00pm. Make sure to bring the money you've been provided. The movie ticket is \$12. $friend's favorite candy is $candy, so grab some of those too. </p>\n\n";
echo "<p>... and of-course, \"May the Force be with You!\"</p>";
?>

<?php

$a = 9>5;
$b = 10 != 10;
$c = $a && $b;
$d = $a || $b;
$e = $b && $c;
$f = $a || $d;

$logic = array( $a, $b, $c, $d, $e, $f );

echo '<pre>';
print_r($logic);
var_dump($logic); //there's a difference between print and var dump btw
echo '</pre>'

?>
<?php
if (10 < 1){
    echo '<p>we stopped at if</p>';
} else if (10 < 4){
    echo '<p>we stopped at the first else if.</p>';
} else if (10 < 11){
    echo '<p>we stopped at the second else if.</p>';
} else {
    echo '<p>None of the conditions are true, we never stopped, so this is the else </p>';
}

echo "out of the if";

$is_logged_in = true;
if ( $is_logged_in) {
    echo '<h3>Welcome back, user!</h3>';
} else {
    echo '<h3>Welcome to the site!</h3>';
}
?>
<?php
//Alternative syntax
if ($home_page): ?>

<header>
    <h1>Welcome to the home page of my website!</h1>
    <p>Have a look around.</p>
</header>

<?php endif; ?>

<?php 
$is_logged_in = true;
if ( $is_logged_in ){
    $message = "Welcome back!";
} else {
    $message = "Hello There!"; 
}

$message = $is_logged_in ? "Welcome back!" : "Hello There";

echo $message;

$message = "Welcome" . ($is_logged_in ? "back!" : "!");

echo $message

$name = null
$name = isset ($name) ? $name : 'Joe';

echo $name

//other way of doing line 200:
$name = $name ?: 'Joe'; // but we need to create the variable with null btw
?>

<?php
$total = 10;
switch ($total) {
    case 1:
        echo '<p>$total is 1</p>';
        break;
    case 2:
        echo '<p>$total is 2</p>';
        break;
    default:
        echo '<p>$total is more than 2</p>';
}

switch($total){
    case 1:
    case 2:
    case 3:
        echo '<p>$total is less than 3</p>';
        break;
    default:
        echo '<p>$total is more than 3</p>';
}

$turtle = 'Leo';
$bandana = '';
switch($turtle){
    case 'Leo':
        $bandana = 'blue';
        break
    case 'Raph':
        $bandana = 'red';
        break
    case 'Mike':
        $bandana = 'orange';
        break
    case 'Don':
        $bandana = 'purple';
}

//with match
$bandana = match($turtle) {
    'Leo' => 'blue',
    'Raph' => 'red',
    'Mikey' => 'orange',
    'Don' => 'purple',
    default => 'red',
}

//Alternative switch syntax:

switch($total) :
        case 1:
        case 2:
        case 3:
            echo '<p>$total is less than 3</p>';
            break;
        default:
            echo '<p>$total is more than 3</p>';
endswitch;
?>

<?php

$x = 0;
$result = match($x){
    -2, -1, 0 => '$x is not positive.',
    1 => '$x is 1',
    2 => '$x is 2',
    default => '$x is neither 1 nor 2',
};

echo $result;

function add_to_x($x) {
    return $x + 5;
}
$result = match($x){
    -2, -1, 0 => add_to_x($x)
    1 => '$x is 1',
    2 => '$x is 2',
    default => '$x is neither 1 nor 2',
};

$result = match(true) {
    $x <= 0 => '$x is not positive',
    $x == 1 => '$x is 1',
    $x == 2 => '$x is 2',
    default => '$x is neither 1 nor 2'
};

echo $result;
?>
<?php
$min = 1;
$max = 50;
$guess = 4;
//$num = 16;
$num = rand($min,$max);

//if they guess correct: you tell them
//incorrect: too high or too low
//guessed number is out of range

// $results = if ($guess === $num) {
//     echo "you guessed correctly! congratz"
// } else if ($guess <= $num/2){
//     echo "you were too low"
// }  else if ($guess >= $num*2 ){
//     echo "you were too high"
// };

// echo $results;

// $out_of_range = if ($guess < $min && $guess > $max){
//     echo "you were out of the range"
// } else {
//     echo "you were close!!!!"
// };

// echo $out_of_range;

$result = match($guess){
    $num => 'CONGRATZ YOU DID IT',
    $guess > $num => 'Your number was too high :(',
    $guess < $num => 'Your number was too low ;--;',
    default => 'what is this?!?!?!?!',
};

echo $result;

$out_of_range = match($guess){
    $num => 'why are you even here?',
    $num < $min || $num > $max => 'you were outside of the range, unlucky',
    $num > $min && $num < $max => 'close call brother',

};
$results = '';
switch($guess){
    case $num:
        $results = 'CONGRATZ YOU DID IT';
        break;
    case $guess > $num :
        $results = 'Your number was too high :(';
        break;
    case  $guess < $num:
        $results = 'Your number was too low ;--;';
        break;
    default:
        $results = 'dafuck';
};

$out_of_range = '';
switch($guess){
    case $num:
        $out_of_range = 'nah you gucci';
        break;
    case $num < $min || $num > $max:
        $out_of_range = 'you were outside of the range, unlucky';
        break;
    case $num >= $min && $num <= $max:
        $out_of_range = 'close call brother';
};

echo $results;
echo $out_of_range;
echo $num

if ($guess < $min || $guess > $max){
    echo '<p>Your guess is out of range.</p>';
    exit();
}
if ($num == $guess){
    echo '<h3>correct</h3>';
}

?>