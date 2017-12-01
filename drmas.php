<?php
include('lang.php');
$default = ($_GET['lang']=='') ? 'en' : $_GET['lang'];
echo $lang[$default]['Hello'].','.$lang[$default]['My_name']. 'Issam drmas';
 ?>
