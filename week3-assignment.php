<!DOCTYPE html>
<html>
<body>

<?php

//This is Task I
$str = "emocle ot PHP";
echo "$str => ";
$strEx = explode(" ",$str);

for ($x=0; $x<count($strEx); $x++){
	$strExEx = str_split($strEx[$x]);
    $strExEx = array_reverse($strExEx);
    for ($y=0; $y<count($strExEx); $y++){
    	echo "$strExEx[$y]";
    }
    echo " ";
}

//---------------------------------------------------------
echo "<br>";

//This is Task II

$arr = [2, 3, 4, 6, 7, 9, 11, 20];
function test_even($var)
  {
  return($var%2 == 0);
  }

print_r(array_filter($arr,"test_even"));

//---------------------------------------------------------
echo "<br>";

//This is Task III

$arr1 = [2, 3];
$arr2 = [2, 3, 4];
$arr3 = [2, 3, 4, 5];
  for ($x = 0; $x < count($arr1); $x++){
    $total += $arr1[$x];
  }
  echo " Total = $total";


?>  

</body>
</html>