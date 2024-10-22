<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>陣列</h2>
<?php

$header=['','國文','英文','數學','地理','歷史'];
$judy=['judy','amo','john','peter','hebe'];
$amo=[[95,88,45,59,71],[64,78,60,32,62],[70,54,68,77,80],[90,81,70,54,62],[84,71,62,42,64]];


?>



<h2>利用程式來產生陣列</h2>
// ul>li
<ul>
    <li>以迴圈的方式產生一個九九乘法表</li>
    <li>將九九乘法表的每個項目以字串型式存入陣列中</li>
    <li>再以迴圈方式將陣列內容印出</li>
</ul>
<?php
$nine=[];

for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        $nine[]="$i x $j = ".($i*$j);
    }
    echo "<br>";
}
$counter=0;
foreach($nine as $idx => $n){
    $counter++;
    if($counter==9){
        echo $n . "<br>";
        $counter=0;
    }else{
        echo $n . ",";
    }
}

echo "<hr>";

foreach($nine as $idx => $n){
    $counter++;
    if($idx%9==8){
        echo $n . "<br>";
        $counter=0;
    }else{
        echo $n . ",";
    }
}

echo "<table>";
foreach($nine as $idx => $n){
    
    if($idx%9==8){
        echo "<td>$n</td></tr>";
        
    }else if($idx%9==0){
        echo  "<tr><td>$n</td>";
    }else{
		echo "<td>$n</td>";
	}
}

echo "</table>";

echo "<hr>";

echo "<table>";
foreach($nine as $idx => $n){
    $v=explode("=",$n)[1];
    if($idx%9==8){
        echo "<td>$v</td></tr>";
        
    }else if($idx%9==0){
        echo  "<tr><td>$v</td>";
    }else{
		echo "<td>$v</td>";
	}
}

echo "</table>";
echo "<hr>";
$nine2=[];

for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        $nine2["$i x $j"]=$i*$j;
    }    
}

echo "<pre>";
print_r($nine2);
echo "</pre>";

echo "<hr>";

$counter=0;
foreach($nine2 as $key => $n){
    $counter++;
    if($counter==9){
        echo $key  . " = ".$n ."<br>";
        $counter=0;
    }else{
        echo $key  . " = ".$n .", ";

    }
}
echo "<hr>";

echo "<table>";
$counter=0;
foreach($nine2 as $n){
    $counter++;
    if($counter==9){
        echo "<td>$n</td></tr>";
        $counter=0;
    }else if($counter==1){
        echo "<tr><td>$n</td>";

    }else{
        echo "<td>$n</td>";
    }
}
echo "</table>";
echo "<hr>";
echo "<hr>";
$nine3=[];

for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        $nine3[]=['formula' => "$i x $j",'value'=>$i*$j];
    }    
}

echo "<pre>";
print_r($nine3);
echo "</pre>";


// echo "table";
// for($i=1;$i<=9;$i++){
//     echo "<tr>";
//     for($j=1;$j<=9;$j++){
//         echo "<td>";
//         echo "$i x $j = ";
//         echo $i*$j;
//         echo "</td>";  
//     }
// }
?>

<?php
// [["formula"]=>'1x1',"value =>1]]
// [["formula" => '9x9',"value"=>81]]

?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>