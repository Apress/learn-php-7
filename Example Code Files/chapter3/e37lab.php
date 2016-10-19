<?php
Require_once("e36dog.php");
$lab = new Dog;
$dog_properties = $lab->get_properties();
list($dog_weight, $dog_breed, $dog_color) = explode(',', $dog_properties);

print "Dog weight is $dog_weight. Dog breed is $dog_breed. Dog color is $dog_color.";
?>

