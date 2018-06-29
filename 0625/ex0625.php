<?php

$hash=[
    name_f => 'Name(F)',
    name_s => 'Name(S)',
    zip => 'Postal code',
    address => 'Address',
    phone => 'Phone',
    mail => 'Mail address',
    inq => 'Inquiry',
];

$usr_data ='';
foreach ($_POST as $key => $value) {
    $usr_data .= $value.',';
    echo $hash{$key}.'='.$value."<br>\n";
}

echo '
<form action="ex0611.html" method="post">
<input type="submit" value="やり直し"> 
</form>
';

echo '
<form action="ex0611-2.php" method="post">
<input type="hidden" name="usrdata" value="'.$usr_data.'">
<input type="submit" value="送信する"> 
</form>
';

?>
