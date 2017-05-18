<?php
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$sql = "UPDATE users SET ";
if($_POST['pikajuoksut']!=''){$sql .="`pikajuoksut`='".$_POST['pikajuoksut'];}
if($_POST['kestavyys']!=''){$sql .="', `kestavyys`='".$_POST['kestavyys'];}
if($_POST['hypyt']!=''){$sql .="', `hypyt`='".$_POST['hypyt'];}
if($_POST['heitot']!=''){$sql .="', `heitot`='".$_POST['heitot'];}
$sql .="' WHERE id = '".$_SESSION['userid']."'";
$conn->query($sql);
?>