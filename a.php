<?php
$a=9.0;
$b=4.0;
$c=(double)$a+ (double)$b;
echo (double)$c;




settype($a,'float');
echo gettype($a);

echo PHP_INT_MAX;
?>