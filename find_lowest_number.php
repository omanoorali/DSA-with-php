<?php

/// find the lowest values from array.DSA with array.
// $array[0];: vairable k sath dena zarori h take wo yahan se starting kar compoire karna
// Note : $lowest_value = 0;
// age tum 0 de rahe variable k sath to main ap zero se compire kar rahe ho. to alwaze false ai ga. or echo bhe Zero hoga.

// algorithm ye h k first value sabh se compaire hogi. jo use bhe shoti huwe to wo lowest values.


echo "values = :"."3,65,7,8,2,67,98";
echo "<br>";
$array = [3,65,7,8,2,67,98];

$lowest_value = $array[0];

foreach($array as $key=> $values){

    if($values < $lowest_value){
        $lowest_value = $values;
        echo "index  = ".$key."<br>";
    }

}

echo "min values := ".$lowest_value;

////////////////////////////////////////////////////// way2
echo "<br>";
echo "using // min()  // function or mmethod ";
echo "<br>";

$min_values =min($array);
echo $min_values;


//////////////////////////////////////////////// way3

?>