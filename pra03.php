<?php
$n=50;
echo "n=".$n."<br>";
for($i=1;$i<=$n;$i=$i+2){
    echo $i;
    echo ",";

}
echo "<br>";

$n=50;
echo "n=".$n."<br>";
for($i=1;$i<=$n;$i++){
    echo $i *10 ;
    echo ",";

}

echo "<br>";

$n=50;
echo "n=".$n."<br>";
$count=0;
for($i=4;$i<=$n;$i++){
    $t=true;     
    for($j=2;$j<$i;$j++){
        if($i%$j==0){
            $t=false;
        }
        $count++;
    }

    if($t==true){
        echo "$i 是質數<br>";
    }

}
echo "<br>";
echo $count;
echo "<br>";

$n=50;
echo "n=".$n."<br>";
for($i=1;$i<=$n;$i++){
    echo $i *10 ;
    echo ",";

}
echo $count;
echo "<br>";

$n=50;
echo "n=".$n."<br>";
$count=0;
for($i=4;$i<=$n;$i++){
    $t=true;     
    for($j=2;$j<=(sqrt($i));$j++){
        if($i%$j==0){
            $t=false;
        }
        $count++; 
    }

    if($t==true){
        echo "$i 是質數<br>";
    }
} 

echo"<br>";
echo $count;
?>
<h2>九九乘法表</h2>

<?php
echo "<table border=1>";
for($i=1;$i<=9;$i++){
    echo "<tr>";
    for($j=1;$j<=9;$j++){
        echo "<td>";
        echo "$j x $i=".($j*$i);
        echo "</td>";

    }
    echo "<br>";
}

echo "</table>";

?>
<style>
.nine{
    border-collapse:collapse;
    margin:20px;
 }
.nine td{
    border:1px solid #aaa;
    width:30PX;
    height:30px;
    text-align: center;
}
.nine tr:nth-child(1),
.nine td:nth-child(1){
    background:blue;
    coler:white
}

    
</style>
<?php

echo "<table border=1>";
for($j=0 ;$j<=9;$j++){
    echo "<tr>";
    for($i=0;$i<=9;$i++){
        echo "<td>";
        if($j==0 && $i==0){
            echo "";
        }else if($j==0){
            echo $i;
        }else if($i==0){
            echo $j;
        }else{
            echo ($j*$i);

        }

        }
            

        }
        echo "<td>";
        echo ($j*$i);
        echo "</td>";


    echo "</tr>";

echo "</table>";


?>


<table border=1>
    
 <table>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
 </table>
    