<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>分配成績等級</h2>

<<h3>給定一個成績數，根據成績所在的區間，給定等級，</h3>
<ul>
<li>0 ~ 59 => E</li>
<li>60 ~ 69 => D</li>
<li>70 ~ 79 => C</li>
<li>80 ~ 89 => B</li>
<li>90 ~ 100 => A</li>
</ul>
<?php

$score=60;
$level='';

if($score<=100 && $score>=0){
    if($score>=90 && $score <=100){
        $level="A";
    }else{
        if($score>=80 && $score <=89){
            $level="B";
        }else{
            if($score>=70 && $score<=79){
                $level="C";
            }else{
                if($score >=60 && $score <=69){
                    $level="D";
                }else{
                    if($score<=59){
                        $level="E";
                    }
                }
            }
        }
    }
    echo "score=".$score;
    echo "<br>你的等級為".$level;
}else{
    echo "score=".$score;
    echo "<br>成績應該在1~100之間";

}

?>
<hr>
<?php
$score=55;
$level='';
if($score<=100 && $score>=0){
}if($score>=90){
        $level="A";
    }elseif($score>=80){
        $level="B";
    }elseif($score>=70){
        $level="C";
    } elseif($score>=60){
                    $level="D";
                }elseif($score<=59){
                        $level="E";
                    }
                   
echo "<br>";
switch($leval){
    case "A":
        echo "表現優良，就繼續保持";
    break;
    case "B":
        echo"值得表現，還有進步空間";
    break;
    case "c":
        echo"需要更多的練習";
    break;
    case "D":
        echo "需要加強基本功";
    break;
    default:
    echo "是否無心學業?";                
}




?>
<hr>


<h1>閏年判斷，給定一個西元年分，判斷是否為閏年</h1>

<ul>
<li>地球對太陽的公轉一年的真實時間大約是365天5小時48分46秒，因此以365天定為一年 的狀況下，每年會多出近六小時的時間，所以每隔四年設置一個閏年來消除這多出來的一天。</li>
<li>公元年分除以4不可整除，為平年。</li>
<li>公元年分除以4可整除但除以100不可整除，為閏年。</li>
<li>公元年分除以100可整除但除以400不可整除，為平年</li>
</ul>



<?php

$year=2500;

if($year%4==0){
    if($year%100==0){

        if($year % 400==0){
            echo "西元";
            echo $year;
            echo "是閏年";
        }else{
            echo "西元";
            echo $year;
            echo "是平年"; 
        }

        echo "西元";
        echo $year;
        echo "是閏年";   
    }else{
        echo "西元";
        echo $year;
        echo "是平年";

    }




    echo "西元";
    echo $year;
    echo "是閏年";

}else{
    echo "西元";
    echo $year;
    echo "是平年";

}

echo"hr";
echo"<h3> || </h3>";

if($year%4==0){
    if($year%100!=0 || $year %400==0){

            echo "西元";
            echo $year;
            echo "是閏年";
        }else{
            echo "西元";
            echo $year;
            echo "是平年"; 
        }
    } 
echo"hr";
echo"<h3> && </h3>";

if($year%4==0){
    if($year%100==0 && $year %400!=0){

            echo "西元";
            echo $year;
            echo "是平年";
        }else{
            echo "西元";
            echo $year;
            echo "是閏年"; 
        }
}





?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>