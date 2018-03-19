<?php

if (isse($_POST['number'])) {
$number = $_POST['number']

}
 $decString = $number ;
 $binString = base_convert($decString,10,2);

 echo "$binString";
?>
