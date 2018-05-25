<?php

//echo $_POST{'usrdata'};
$outfile = './usrdata.dat';
$fp = fopen($outfile, "a");
fwrite($fp, $_POST{'usrdata'}."\n");
//flock($fp,LOCK_UN);
fclose($fp);

echo '書き出し完了！';

    
?>
