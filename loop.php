<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>for loop</h1>
<?php
for($i=0 ; $i<10 ; $i++ ){
    echo $i*10;
    echo "<br>";
}

echo $i; 


for($i=0 ; $i<5 ; $i++ ){
    echo (2*$i+1)*10;
    echo "<br>";
}

echo $i;
?>

<h1> 2. while loop</h1>

 <?php
 $score = 30;
 $counter=0;
 while($score<60){
    $score+=10;
    $counter++;
 }
 echo "$score <br> $counter";

 ?>

 <h1>陣列</h1>
 <?php
 $a=['a','b','good','sad','john',123,999];

//  *echo $a[0];
//  echo "<br>";
//  echo $a[1];
//  echo "<br>";
//  echo $a[2];
//  echo "<br>";
//  echo "<br>";

//  for($i=0;$i<14;$i++){
//     echo $a[$i];
//     echo "<br>";
//  }


// <h1>foreach</h1>
 $b=['姓名'=>'陳謙毅','數學=>90','國=>50','英文=>60'];
//1.想辦法把key值撈出來
//2.用key做成一個只有key的陣列
//3.用迴圈來跑key陣列
//4.再去把內容印出來
// //獲取陣列的鍵
// $keys=array_keys($b);
// //使用for迴圈遍歷鍵
// for ($i=0; $i<count($keys;$i++)){
//     $key=$keys[$i];//當前的鍵
//     $value=$a[$key];//使用鍵盤獲取對應的值
//     echo $key;
//     echo $value;
//     echo "<br>";
// }

foreach ($b as $value){
     echo $value . '<br>';
}

 ?>


</body>
</html>