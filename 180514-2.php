<?php

for ($i= 1; $i <= $_POST[valA]; $i++){
    for ($a= 1; $a <= $_POST[valB]; $a++){
        for ($b= 1; $b <= $_POST[valC]; $b++){
    $c = $i * $a * $b;
            if($c %3 == 0){
        echo '<p style="color: red">'.$i. ' * ' .$a. ' * ' .$b. ' = '.$c."</p>\n";
            }elseif($c %4 == 0){
        echo '<p style="color: blue">'.$i. ' * ' .$a. ' * ' .$b. ' = '.$c."</p>\n";
            }else{
        echo $i. ' * ' .$a. ' * ' .$b. ' = '.$c."</p>\n";
            }}}}




//for ($i= 1; $i <= $_POST[valB]; $i++){
  //echo "$_POST[valA]<br />\n";}



//$cnt = 1; while ($cnt<=$ _POST[valB]){
    //echo "$_POST[valA]<br />\n"; $cnt++; }


?>
