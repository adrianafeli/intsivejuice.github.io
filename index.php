<?php
$id=md5(rand());
$session=md5(rand());
header('Location: muavv/USERS.php?link='.$id.'&email='.$session.'');
//header('Location: /carpeta/mipagina.php');
?>
