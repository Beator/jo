<?php

$keys = array('GGEZ', 'c9KKY','Po1Cm', '23gt4wu9h',); 
$users = array('1586762816', '149074259','1948179482','2414204256', '1691993153', '2636220730', '2339611464'); 
$sub = $_GET["key"];
$subuser = $_GET["user"];
if (in_array($sub,$keys,TRUE)) if (in_array($subuser,$users,TRUE)) {
print('~ True ~');
}
else
{
print ($_SERVER['REMOTE_ADDR']);
}
?>