
<?php

//$a = 25;

$b = $_GET[cnt1];
$c = $_GET[cnt2];

$a = $b * $c;


// aが20より小さい場合
    if($a < 20){
            echo 'a(='.$a.')は20より小さい';
    
// aが20以上60以下の場合
   }elseif( ($a <= 60)&&($a >= 20) ){
            echo 'a(='.$a.')は20以上60以下です';
 
// aが60より大きい場合
    }else{
            echo 'a(='.$a.')は60より大きい';
        }

echo "<br>";
echo "<br>";
echo "<br>";

for($a=0; $a<70; $a++){
    if($a < 20){
            echo 'a(='.$a.')は20より小さい';

   }elseif( ($a <= 60)&&($a >= 20) ){
            echo 'a(='.$a.')は20以上60以下です';

    }else{
            echo 'a(='.$a.')は60より大きい';
        
    }echo $i.'<br>';
}
     

        
?>