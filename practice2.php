<?php
// 1
$name = "太一";

if ($name = "太一") {
    echo "私は{$name}です";
} else {
    echo "あなたの名前ではありません。";
}

// 2
$total = 0;

for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;

// 3
$fruits = array("Apple","Banana","Strawberry","Orange","Grape");
foreach($fruits as $fruit) {
    echo $fruit;
}

//4
$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++) {
    if($i % 5 == 0) {
        echo $i;
    }
}


?>