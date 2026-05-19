<?php
// echo "fabnohcci number ";
// 0123456789.
// 2number add hoke 3r create karenge . same process chalega.
// this call fabnochhi number

// How it works:

// Start with the two first Fibonacci numbers 0 and 1.
// Add the two previous numbers together to create a new Fibonacci number.
// Update the value of the two previous numbers.
// Do point a and b above 18 times.

/// algorithms:
// 18 tak loop chalega.
// 2 vaibel chahea jo + honge apse main. or hold karnge prievouse values.
// or akh variable chahea jo echo karga fabnocci number ko.
// output:0 1 1 2 3 5 8 13 21 34 55 89

$num2 = 0;
$num1 = 1;

$number = 10;
echo $num2 . " ";
echo $num1 . " ";

for ($i = 1; $i <= $number; $i++) {

    $new_num = $num1 + $num2;
    echo $new_num."<br>" ;
    $num2 = $num1;
    $num1 = $new_num;

    
}

// step 1
//////// $new main 1 ayan uske 1 num1 main add kia
//// num1 ne num2 ko 1 dia abhe num1 main or num2 main 1 h
// echo 1,2,4,16,32
// step2
////// abhe $new main 2 huwe 
/// num1 or num2 main 2 huwe

/// step 3
///////// abhe $new main 4 hwe
//// $num1=4 or $num2=4 main bhe  add hogai

/// step 4
//////// $new main 8
//// $num1 =8 or $num2=8 huwe 

/// step 5 
// $new main 16 huwe 
/// $num1 =16 or num2=16


