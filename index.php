<?php
session_start();
if(isset($_GET['sivu'])){
	require('header.php');
	if(isset($_SESSION['username'])||$_GET['sivu']=='kirjaudu'||$_GET['sivu']=='rekisteroidy'||$_GET['sivu']=='etusivu'){
		require($_GET['sivu'].'.php');
	} else {
		header('Location: /~T2017051002/sivu/?sivu=kirjaudu');
	}
	require('footer.php');
} else {
	require('header.php');
	require('etusivu.php');
	require('footer.php');
}
?>