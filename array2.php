<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<h2>威力彩電腦選號沒有重覆號碼(利用while迴圈)</h2>

<ul>
<li>使用亂數函式rand($a,$b)來產生號碼</li>
<li>將產生的號碼順序存入陣列中</li>
<li>每次存入陣列中時會先檢查陣列中的資料有沒有重覆</li>
<li>完成選號後將陣列內容印出</li>

</ul>

<?php

$nums=[];

while(count($nums)<6){
    $n=rand(1,38);

    if( !in_array ($n,$nums)){
        $nums[]=$n;   
    }
}
foreach($nums as $num){
    echo "$num, ";
}

echo "<br>";
sort($nums);
foreach($nums as $num){
    echo "$num, ";
}
echo "<hr>";
echo join(",",$nums);
?>




<?php

for($i=2024;$i<=2524;$i++){
    if($i % 4==0&&($i % 100 !=0 || $i % 400 == 0)){
        $sleep[]=$i;
    }
}

echo "<pre>";
print_r($leap);
echo "</pre>";

?>


<hr>

<h3> 已知西元1024年為甲子年,請設計一支程式,可以接受任一西元年份,輸出對應的天干地支的年別。.利用迴圈</h3>
<ul>
    <li>天干：甲乙丙丁戊己庚辛壬癸</li>
    <li>地支：子丑寅卯辰巳午未申酉戌亥</li>
    <li>天干地支配對：甲子、乙丑、丙寅….甲戌、乙亥、丙子….</li>
</ul>
// 甲 乙 丙 丁 戊 己 庚 辛  壬  癸
// 0  1  2  3  4  5  6  7  8  9  10 11
// 子 丑 寅 卯 辰 巳 午 未 申 酉 戌  亥

<?php

for($i=0;$i<=10;$i++)

$sky=['甲', '乙', '丙', '丁', '戊', '己', '庚', '辛', '壬', '癸']; 
$land=['子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥'];

$s1=[];

for($i=0;$i<6;$i++){

    for($j=0;$j<10;$j++){
        $cellnum=10*$i+$j;
        $landindex=$cellnum%12;
        $s1[]=$sky[$j].$land[$landindex];
      
        
    }   
   
}

$year=2034;

echo $s1[($year-4)%60];

//echo "<pre>";
//print_r($sl);
//echo "</pre>";







?>

</body>
</html>