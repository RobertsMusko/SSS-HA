<?php echo "Hello World!\n";

$foo = true;
echo "Boolean foo is filled with: $foo\n";
$age = 19;
echo "I am $age years old\n";
$height = 1.87;
echo "And I am $height tall\n";

$num1 = 10;
$num2 = 2;

$sum = $num1 + $num2;
$subt = $num1 - $num2;
$mult = $num1 * $num2;
$div = $num1 / $num2;


echo "First number is $num1 and the second number is $num2\n";
echo "The sum of these numbers are: $sum\n";
echo "The substraction of these numbers are: $subt\n";
echo "The multiplication of these numbers are: $mult\n";
echo "The division of these numbers are: $div\n";

$a = 20;
$b = 10;
$c = $b-$a;

echo"Value c: $c\n";

$name = "joseph ";
$surname = "borg";
$fullname = $name." ".$surname;
echo "$fullname\n";

$PI = 3.142;
$radius = 5;
$answer = $PI * ($radius * $radius);
echo "$answer\n";

$cm = 50;
$in = 2.54;
$an = $cm / $in;
echo "$cm centimeters are equal to $an inches\n";

$arrayMarks = array("40","50","45","60","50");
$mean = ($arrayMarks[0] + $arrayMarks[1] + $arrayMarks[2] + $arrayMarks[3] + $arrayMarks[4]) / 5;
echo "The avarage class grade is: $mean\n";
$count = count($arrayMarks);
echo "The grades in total: $count\n";
$summ = array_sum($arrayMarks);
echo"The sum of the grades: $summ\n";

$age = 21;
if($age < 18){
echo "You are not allowed to enter the club!\n";
}else
{
    echo "Welcome to the club!\n";
}

$password = "ginger";
if($password != "ginger"){
    echo "Password is incorecct!\n";
}else{
    echo "Welcome!\n";
}


$random = (rand(1, 10));
if($random == 7)
{
    echo"You won!\n";
}else{
    echo"Try again!\n";
}



$ran = (rand(1, 3));
$ran1 = (rand(1, 3));
$ran2 = (rand(1, 3));
if ($ran == $ran1 && $ran1 == $ran2) {
    echo"You won 10000 Euros!\n";
}


for ($i=1; $i < 11; $i++) { 
    echo "$i\n";
    
}

for ($i=10; $i > 0; $i--) { 
    echo "$i\n";
}

for ($i=0; $i < 51 ; $i++) { 
    if($i/2==0){
        echo"$i";
    }else{
        $i++;   
    }
}




$colors = array("Apple", "Banana", "Orange", "Strawberry", "Raspberry", "Pineapple");
$length = count($colors);

for ($i=$length - 2; $i < $length ; $i++) { 
    echo $colors[$i];
    echo "\n";
}




$age = array("Peter" => "20", "Ben" => "33", "Joe" => "45");
sort($age);

foreach($age as $i => $i_value){
    echo "Key=" . $i  . ", Value=" . $i_value;
    echo "\n";
}

for ($i=1; $i < 11 ; $i++) { 
    echo $i . "..";
}

echo "\n";


$a = 1;
while ($a <= 10) {
    echo $a . "..";
    $a++;
}

echo "\n";

$b = 1;
do {
    echo $b . "..";
    $b++;
} while ($b < 11);







?>




