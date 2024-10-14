<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>星星</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
        }
        
    </style>
</head>
<body>
<?php

for ($i=0;$i<5;$i++){
    for($j=0;$j<($i+1);$j++){
        echo "*";
    }
    echo "<br>";
}
?>
<hr>
<h2>倒直角三角形</h2>
<?php
for ($i=5;$i>0;$i--){
    for($j=0;$j<$i;$j++){
        echo "*";
    }
    echo "<br>";
}
?>
<hr>
<h2>5/4
<h2>正三角形</h2>
<?php
for ($i=0;$i<5;$i++){
    for($k=0;$k<4-$i;$k++){
        echo "&nbsp;";
    }
    for($j=0;$j<(2*$i+1);$j++){
        echo "*";
    }
    echo "<br>";
}
?>
<hr>
<h2>倒正三角形</h2>
<?php
for ($i=4;$i>=0;$i--){
    for($k=0;$k<(4-$i);$k++){
        echo "&nbsp;";
    }
    for($j=0;$j<(2*$i+1);$j++){
        echo "*";
    }
    echo "<br>";
}
?>
<hr>
<h2>倒正三角形(2)</h2>
<?php
for ($i=0;$i<5;$i++){
    for($k=0;$k<($i);$k++){
        echo "&nbsp;";
    }
    for($j=0;$j<(2*(4-$i)+1);$j++){
        echo "*";
    }
    echo "<br>";
}

?>
<hr>
<h2>菱形</h2>
<?php
for($i=0;$i<21;$i++){
    if($i>10){
        $k1=$i-10;
        $j1=2*($i-(2*($i-10)))+1;
    }else{
        $k1=10-$i;
        $j1=(2*$i+1);
    }

    for($k=0;$k<$k1;$k++){
        echo "&nbsp;";
    }

    for($j=0;$j<$j1;$j++){
        echo "*";
    }
    echo "<br>";

}

?>
<h2>矩形練習</h2>
<?php

for($i=0;$i<5;$i++){
    for($j=0;$j<5;$j++){
        if($i==0 || $i==4){
            echo "*";
        }else if($j==0 || $j==4){
            echo "*";
        }else{
            echo "&nbsp";
        }
    }
    echo "<br>";
}

?>
<h2>矩形練習(變數)</h2>
<?php
$widtch=10;

for($i=0;$i<$widtch;$i++){
    for($j=0;$j<$widtch;$j++){
        if($i==0 || $i==($widtch-1)){
            echo "*";
        }else if($j==0 || $j==($widtch-1)){
            echo "*";
        }else{
            echo "&nbsp";
        }
    }
    echo "<br>";
}

?>
<h2>矩形含對角練習</h2>
<?php
for($i=0;$i<6;$i++){
    for($j=0;$j<6;$j++){
        if($i==0 || $i==5){
            echo "*";
        }else if($j==0  || $j==5){
            echo "*";
        }else if($i==$j || $j==(5-$i)){ 
            echo "*" ;  
        }else{
            echo "&nbsp";
        }
    }
    echo "<br>";
} 
?> 
<h2>矩形含對角練習</h2> 
<?php
$k=(5-$i);

for($i=0;$i<6;$i++){
    for($j=0;$j<6;$j++){
        if($i==0 || $i==5){
            echo "*";
        }else if($j==0  || $j==5){
            echo "*";
        }else if($i==$j || $j==(5-$i)){ 
            echo "*" ;  
        }else{
            echo "&nbsp";
        }
    }
    echo "<br>";
} 
?> 
<h2>矩形含對角練習(變數)</h2> 
<?php
$width=6;

for($i=0;$i<$width;$i++){
    for($j=0;$j<$width;$j++){
        if($i==0 || $i==($width-1)){
            echo "*";
        }else if($j==0  || $j==($width-1)){
            echo "*";
        }else if($i==$j || $j==($width-1-$i)){ 
            echo "*" ;  
        }else{
            echo "&nbsp";
        }
    }
    echo "<br>";
} 

?>
</body>
</html>