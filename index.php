<?php

$string1 = 'This is my essay. I\m goint to be talking about php';
$string2 = 'My essay is about php. I\'m goint to be talking about everything to do with php.';

similar_text($string1, $string2, $result);
echo 'The similarity between is, ' .$result;

?>
