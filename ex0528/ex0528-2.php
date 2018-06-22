<?php

$outfile = './data.dat';
$fp = fopen($outfile, "a");
fwrite($fp, $_POST{'data'}."\n");
fclose($fp);

echo '送信完了！';

    
?>
