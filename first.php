<!DOCTYPE html>
<html>
<body>

<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo"<br>";

echo strlen("Hello world!");
echo"<br>";
$age = array("aman"=>"23", "Ben"=>"37", "Joe"=>"43");

foreach($age as $z => $z_value) {
    echo "Key=" . $z . ", Value=" . $z_value;
    echo "<br>";
}

$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br>";
}


?>

</body>
</html>