
<?php

$a = 10;

{
    if($a < 20){
            echo $a.'aは20より小さい';
    }elseif(21 < $a )&&($a > 60){
            echo $a.'aは21以上60以下です';
    }else{
            echo $a.'60より大きい';
        }
}

?>