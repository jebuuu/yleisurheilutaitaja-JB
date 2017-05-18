<?php

$connectstr_dbhost = '';
$connectstr_dbname = '';
$connectstr_dbusername = '';
$connectstr_dbpassword = '';

foreach ($_SERVER as $key => $value) {
    if (strpos($key, "MYSQLCONNSTR_localdb") !== 0) {
        continue;
    }
    
    $connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
    $connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
    $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
    $connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
}

define('DB_NAME', 'yleisurheilutaitaja');

/** MySQL database username */
define('DB_USER', 'azure');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname : this contains the port number in this format host:port . Port is not 3306 when using this feature*/
define('DB_HOST', '127.0.0.1:57121');



session_start();
if(isset($_GET['sivu'])){
	require('header.php');
	if(isset($_SESSION['username'])||$_GET['sivu']=='kirjaudu'||$_GET['sivu']=='rekisteroidy'||$_GET['sivu']=='etusivu'){
		require($_GET['sivu'].'.php');
	} else {
		header('Location: /?sivu=kirjaudu');
	}
	require('footer.php');
} else {
	require('header.php');
	require('etusivu.php');
	require('footer.php');
}
?>