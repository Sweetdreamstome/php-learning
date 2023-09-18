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
<?php
//for arithmetical stuff:
    echo 5 * 6 + 3 - 1. '<br>';
    echo 5 ** 2; //exponential
?>
<?php
$a = 5;
if ( $a % 2 == 0) {
    echo "<p>$a is even. </p>";
} else {
    echo "<p>$a is odd. </p>"
}

$a = 15;
$b = 5;

echo ( $a % $b == 0) ? "<p> $b is a factor of $a</p>" : "<p> $b is not a factor of $a</p>";
echo -$a % 2;
?>
<?php
$a = 5;
//this will still be 5
echo 'The value of $a is '.$a++.'<br/>';
//This will be 6
echo 'Now $a is '. $a . '<br/>';
exit();
echo 'The value of $a is '. ++$a. '<br/>';
//This will still be 6
echo 'Now $a is '.$a.'<br/>';
?>

<?php
//other way with exit()
$a = 5;
//this will be 6
echo 'The value of $a is '.--$a.'<br/>';
//This will be 6
echo 'Now $a is '. $a . '<br/>';

$a=5;
echo 'The value of $a is '. $a--. '<br/>';
//This will still be 6
echo 'Now $a is '.$a.'<br/>';

$a = 'A';
echo '$a is '. ++$a. '<br/>';
//from A to B: increment

$a = 1;
$a += 5;
echo $a;
$a = 1;
$a -= 5;
echo $a;
$a = 1;
$a *= 5;
echo $a;
$a = 1;
$a /= 5;
echo $a;

?>
<?php
//Challenge
$result = array();

$result[] = (14 + 82 - (32/2))**2;
$result[] = 18 * ((3 / 6) - 9)*10;
$result[] = 5*((12 / 2) - (8 * 4 )+ (12 * 6));

echo '<pre>';
print_r( $result );
echo '</pre>';
?>
<?php
$i = 0;

do {
    echo "<p>$i</p>";
    $i++;
} while ( $i < 10);

while ( $i < 10 ) {
    echo "<p>$i</p>";
    $i++;
}

for ( $i = 0; $i < 10; $i++){
    echo "<p>$i</p>";
}

$colors = array('red', 'blue', 'green', 'yellow');
for ( $i = 0; $i < sizeof($colors); $i++){
    echo '<p>'.$colors[$i]. '</p>';
}

foreach ( $colors as $color ){
    echo "<p>$color</p>";
}

$home_towns = array(
    'Joe' => 'Middletown, NY',
    'Erin' => 'West Chester, PA',
    'Dave' => 'Exton, PA',
    'Brian' => 'Grand Rapids, MI'

);

foreach ($home_towns as $name => $town) {
    echo "<p>$name lives in $town</p>";
}
?>
<?php
$current = 1;
$previous = 0;
$next = null;
$limit = 200;
$sequence = '';
while ( $current < $limit ){
    //echo $current.',';
    $sequence .= $current . ', ';
    $next = $current + $previous;
    $previous = $current;
    $current = $next;

}

$sequence = trim($sequence);
$sequence = substr($sequence,0,strlen($sequence)-1);

echo $sequence
?>

<?php
//detecting if a string is a palindrome, string that reads the same backwards and forwards
function is_palindrome( $string ){
    $pal_check =  ( $string == strrev($string) ); //built in function that gives the reverse
    return $pal_check;
}

$check_string = 'wow'
if (is_palindrome($check_string)){
    echo "<p>$check_string is a palindrome</p>";
}

//so lower cases and upper cases dont matter:
    function is_palindrome( $string ){
        $string = strtolower( $string );
        $string = str_replace(' ', '', $string);
        $pal_check =  ( $string == strrev($string) ); //built in function that gives the reverse
        return $pal_check;
    }
    
    $check_string = 'wow'
    if (is_palindrome($check_string)){
        echo "<p>$check_string is a palindrome</p>";
    }
?>
<?php
function multiplier($a, $multiplier = 2){
    return $a*$multiplier;
}
echo multiplier(4, 4);

function math($a, $b = 2, $op = 'multiply'){
    if ('add' == $op){
        return $a + $b;
    } else if ('sub' == $op){
        return $a - $b;
    } else if ('divide' == $op){
        return $a / $b;
    }
    return $a * $b;
}

//echo math(4, op: 'add'); //PARA PHP 8

$names = array('Joe', 'Erin', 'Teresa', 'Louis');
usort($names, function($a, $b){
    return $a[1] <=> $b[1];
});
?>
<pre>
    <?php print_r($names); ?>
</pre>

<?php 
// Define a simple person class
class Person {
    var $name;
    var $age;
    var $birthday = false;

    function __construct( $name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function get_name() {
        return $this->name;
    }
    public function get_age(){
        return $this->age;
    }
    public function set_name($new_name){
        $this->name = $new_name;
    }
    public function set_birthday($b){
        $this->birthday = $b;
        $this->update_age();
    }
    private function update_age(){
        $this->age = ($this->birthday) ? ++$this->age : $this->age;
    }
}

$joe = new Person('Joe', 35);
$rob = new Person('Rob', 30);

echo $joe->get_name() . '<br>';
echo $rob->get_name();

$joe->set_birthay(true);
$joe->update_age();
$joe->get_age();
//i'm calling from a public, i just can call it from the function. Actually you can't call the
//private function, solo sirve para interno.
?>

<?php
class Person {
    var $first_name;
    var $last_name;

    function __construct( $fn, $ln ) {
        $this->first_name = $fn;
        $this->last_name = $ln;
    }

    public function get_first_name() {
        return $this->first_name;
    }

    public function get_last_name() {
        return $this->last_name;
    }

}

// Challenge: Sort this array of Person objects by last, then first name! 

$rob = new Person( 'Rob', 'Casabona' );
$joe = new Person( 'Joe', 'Casabona' );
$erin = new Person( 'Erin', 'Casabona' );
$steve = new Person( 'Steve', 'Wozniack' );
$bill = new Person( 'Bill', 'Gates' );
$walt = new Person( 'Walt', 'Disney' );
$bob = new Person( 'Bob', 'Iger' );

$people = array( $rob, $joe, $erin, $steve, $bill, $walt, $bob );

usort($people, function($a, $b){
    return [$a->get_last_name(), $a->get_first_name()] <=> [$b->get_last_name(), $b->get_first_name()];
    }
);
?>
<!-- <pre>
    <?//php print_r($people);?>
</pre> -->

<?php
//way of printing errors in servers you cant control ini
?>

<?php
error_reporting(E_ALL);
$a = 2;
if ( ($a < 2)) {
    echo "Hello!";
}

set_cookie( 'error', true);
?>

<h1>Hello!</h1>

<h1>Types of Errors</h1>

<h3>Parse Error</h3>
<?php echo 'I\'ve been around the block!'; ?>

<p>Parse: Has code terminated?</p>

<h3>Warning Error</h3>
<?php include 'variables.php'; ?>
<p>Warning: Has code terminated?</p>;

<h3>Fatal Error</h3>
<?php echo multiply(3, 2); ?>
<p>Fatal: Has code terminated?</p>

<h3>Notice Error</h3>
<?php echo $x; ?>
<p>Notice: has code terminated?</p>

<?php
//Must return positive integer
function multiply($a, $b){
    $x = $a * $b;
    if ($x < 0){
        throw new Exception("The result is not positive.");
    }else{
        return $x;
    }
}

try {
    echo multiply(-5, 4);
} catch (Exception $e){
    echo $e->getMessage();
} //parecido al de python honestly! 


?>
<?php
foreach ($_POST as $name => $value){
    if ( 'submit' != $name) {
        if (is_array( $value )){
            $value = implode(', ', $value);
        }
        echo "<p><b>".ucfirst($name)."<b> is $value.</p>";
    }
}
?>

<?php
$message = '';
foreach( $_POST as $name => $value) {
    if ( 'submit' != $name) {
        if (is_array($value)) {
            $value = implode(', ', $value);
        }
        $message .= ucfirst($name)."is $value.\n\n";
    }
}
$to = "Joe Casabona<joe@casabona.org>";
$subject = "Reason for Contact: ".$_POST['reason'];
$from = $_POST['name'].'<'.$_POST['email'].'>';

headers = 'From: ' .$from . "\r\n". 
'Reply-To:'.$from. "\r\n". 
'X-Mailer: PHP/'. phpversion();

if (mail($to, $subject, $message)) {
    echo "<h3>Your message has been sent.</h3>";
}
?>

<?php
	$form_data = ( ! empty( $_POST ) ) ? $_POST : null; 	
	$form_is_complete = ( empty( $_POST ) ) ? false : null;
    //form_data: to keep it safe and sound is in post. not neccessary but good practice
    //form is complete: is it completed at all? is it filled out?
	function check_required( $value ) {
        global $form_is_complete;
		if( empty( trim( $value ) ) ) {
			echo '<p class="alert">This is a required field.</p>';
			$form_is_complete = false;
		} 
	}//validation function: after we trim our string is there something? if not it is false

	function check_email( $email ) {
        global $form_is_complete;
		$regex= '^[\w\.=-]+@[\w\.-]+\.[\w]{2,3}$^';
		if ( ! preg_match( $regex, $email ) ) {
			echo '<p class="alert">You did not input a valid email address.</p>';
			$form_is_complete = false;
		}
	}//validation: email with regex. 

	function send_message( $form_data ) {
		$name = filter_var( strip_tags( trim( $form_data['name'] ) ), FILTER_SANITIZE_MAGIC_QUOTES );
		$email = filter_var( $form_data['email'], FILTER_SANITIZE_EMAIL );
		$to = "Joe Casabona <joe@casabona.org>";
		$from = "$name <$email>";
		$reason = ucfirst( $form_data['reason'] );//dont need to cause its a checkbox
		$subject = "Conact Form Filled out. Reason: $reason";
		$message = filter_var( strip_tags( trim( $form_data['message'] ) ), FILTER_SANITIZE_MAGIC_QUOTES );
		$message = 'From: ' . $from . ', for '. $reason . "\n\n" . $message;

		$headers = 'From: ' . $from . "\r\n" .
    		'Reply-To: ' . $from . "\r\n" .
    		'X-Mailer: PHP/' . phpversion();

		if( mail( $to, $subject, $message, $headers ) )  {
			echo "<h3>Your message has been sent!</h3>";
		}
	}
	
?>
	<form name="contact" method="POST">
		<div>
			<?php if ( isset( $form_data['name'] ) ) check_required( $form_data['name'] ) //error message; ?> 
			<label for="name">Name:</label> <input type="text" name="name" placeholder="Your Name" required/>
		</div>
		<div>
			<?php if ( isset( $form_data['email'] ) ) {
                check_required( $form_data['email'] );
                check_email( $form_data['email'] );
            } //in line! 
            ?>
			<label for="email">Email:</label> <input type="email" name="email" placeholder="Your Email" required/>
            <!-- inputs and attributes -->
		</div>
		<div>
			<p>Reason for Contact:</p>
			<select name="reason">
				<option value="Consult">Consultation</option>
				<option value="Question">Question</option>
				<option value="Say Hello">Say Hello</option>
			</select>
		</div>
		<div>
			<label for="message">What's your message?</label><br/>
			<?php if ( isset( $form_data['message'] ) ) check_required( $form_data['message'] ); ?>
			<textarea name="message" required></textarea>
		</div>
		<div><input type="submit" name="submit" value="Submit" /></div>
	</form>

<?php 
    $form_is_complete = ( !is_null( $form_is_complete ) ) ?  $form_is_complete : true;
	if ( true === $form_is_complete) {
		send_message( $form_data );
	}
    ?>
<?php
//readfile('treasure-island.txt');
$lines = file('treasure-island.txt');
//var_dump($lines);
$casabona = file_get_contents('https://casabona.org');

if (strpos($casabona, 'wp-content')){
    echo "<p>This website is using WordPress</p>"
}

$text = file_get_contents('treasure-island.txt'); //overwrites!
echo file_put_contents('ti-copy.txt', $text, FILE_APPEND); //file_append: adds text! not overwrites

$list = file('mailing-list.txt');
$file_handle = fopen( 'sub-list.txt', 'a' );
foreach( $list as $entry ) {
    if ( strpos( $entry, 'casabona.org' ) ) {
        fwrite( $file_handle, $entry );
    }
}
fclose( $file_handle );

