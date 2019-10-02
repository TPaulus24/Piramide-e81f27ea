<?php
$m=1;
for($i=1; $i<=5; $i++) {
    for($k=1; $k<=$m; $k++)  {
        echo "*";
    }
    for($c=$m; $c>1; $c--) {
        echo "*";
    }
    echo $val . PHP_EOL;
    $m++;
}