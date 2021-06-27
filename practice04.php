<?php

//1
function sum($max) {
    $result = $max * 2;
    return $result;
}
echo sum(66);
echo "\n";

//2
function add($a,$b) {
    $sum = ($a + $b);
    return $sum;
}
echo add(7,4);
echo "\n";

//3
$arr = array(1,3,5,7,9);
echo "product(a) = " . array_product($arr);
echo "\n";

//4
 function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){
    if($max_number < $a){
        $max_number = $a;
    }
 }
 
 return $max_number;
 }
 
 echo max_array(array(5,2,3,9,7));
 echo "\n";
 
 //5
 
 //strip_tags
$str = "<h1>strip_tags関数</h1>"
  . "<p>タグ取り除くよっ！</p>";
echo strip_tags($str) ."\n";

 //array_push
 $number = array("１番","２番","３番");
 array_push($number,"４番","５番");
 print_r($number);
 echo "\n";
 
 //array_merge
 $array1 = [1,2,3];
 $array2 = [10,20,30];
 $array3 = [100,200,300];
 $array = array_merge($array1,$array2,$array3);
 
 print_r($array);
 echo "\n";
 
 //time, mktime
 $time = mktime(0,0,0,1,7,2020);
 var_dump(date('Y年m月d日h時i分s秒', $time));
  print('<br/>');
  
  //date
  echo date('Y/m/d');
  echo "\n";
  echo date('Y-m-d H:i:s');
  echo "\n";
  echo date('Y年m月d日 H時i分s秒');
  echo "\n";
?>