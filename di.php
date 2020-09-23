<?php
/* Write your PHP code here */
$n=3;
 $out='';

for($r=1;$r<=$n;$r++){
    for($s=1;$s<$n-1;$s++){
        $out.= " ";
    }
    for($j=1;$j<=$r;$j++){
        $out.= "*";
    }
    $out.= PHP_EOL;
}
echo  $out;

function miniMaxSum($arr) {
  $sum = array_sum($arr);
    $min = $sum;
    $max = 0;
    foreach($arr as $key => $val) {
        $excluded_sum = $sum - $val;
        if($max < $excluded_sum) {
            $max = $excluded_sum;
        }
        if($min > $excluded_sum) {
            $min = $excluded_sum;
        }
    }
    echo $min.' '.$max;

}
?>