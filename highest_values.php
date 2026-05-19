<?php
echo "highest values find from array";
echo "<br>";

// algorithm: akh value sabh variable se compire hogi agr use bar values h to wo h highest value h array main.

// logic: array p loop chalega. forech or for.
// akh vaiable bane ka bhar accumalate jise kahte hn. uske sath mujhe array ka index dena hoga take wo wahen se compire karna start kare.
//agr mujhe index bhe chahea to mujhe  foreach main $key bhe add karne hogi or wo key mujhe if condtion k inside add karne hogi.
// note if condtion main > opertaor lage ga.




$array = [1,2,67,8,9,5,6,454,6,6,76,5,6,45];

$higest_values = $array[0];

foreach($array as $key=>$value){
    if($value > $higest_values){
        $higest_values  =  $value;
        echo "index ".$key;
    }
}

echo "highest values  :".$higest_values;

?>