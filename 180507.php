

<?php

//1から100までの数を出力
for($i=1; $i<101; $i++){
    echo $i.' ';
}

echo "<br>";
echo "<br>";

//1から100までの数字を3で割った商を出力
for($i=1; $i<101; $i++){
    echo $i / 3 .' ';
}

echo "<br>";
echo "<br>";

//1から100までの数字を3で割った余りを出力
for($i=1; $i<101; $i++){
    echo $i % 3 .' ';
}

echo "<br>";
echo "<br>";



//1から100までの数字で3で割り切れる数を出力
for($i=1; $i<101; $i++){
    if($i %3 == 0){
        echo $i.' ';
}}


echo "<br>";
echo "<br>";


//その個数を出力
$cnt=0;
for($i=1; $i<101; $i++){
    if($i %3 == 0){
    $cnt++;
}}
echo $cnt.'';

echo "<br>";
echo "<br>";


//その和を出力

for($i=1; $i<101; $i++){
    if($i %3 == 0){
        $total = $total + $i;
}}
echo $total.'';

echo "<br>";
echo "<br>";


//まとめると・・・
$cnt=0;
for($i=1; $i<101; $i++){
    $yo = $i % 3;
    if($yo == 0){
        $cnt++;
        echo $i.' ';
        $sum = $sum + $i;
}}
echo '<p>その個数は'.$cnt.'</p>';
echo '<p>その個数は'.$sum.'</p>';


?>