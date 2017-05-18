<?php
	if(isset($_POST['kirjaudu'])){
		$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		echo $conn->connection_error();
		echo DB_HOST. DB_USER. DB_PASSWORD. DB_NAME;
		$sql = "SELECT * FROM users WHERE tunnus = '".$_POST['nimi']."'";
		$user = $conn->query($sql)->fetch_assoc();
		if($_POST['nimi']===$user['tunnus'] && $_POST['salasana']===$user['salasana']){
			$_SESSION['username']=$user['tunnus'];
			$_SESSION['userid']=$user['id'];
			echo 'Kirjautuminen onnistui';
			header('Location: /?sivu=etusivu');
		}
	} else {
?>
<form method="post">
	<div id="rekisteroityminen" class="input-group">
		Nimi<input class="form-control" type="text" name="nimi" placeholder="Nimi" required><br>
		Salasana<input class="form-control" type="password" name="salasana" placeholder="Salasana" required><br>
		<input class="form-control btn btn-success" type="submit" name="kirjaudu" value="Kirjaudu"><br>
	
	</div>	
</form>
<img alt="voitto onninen" id="tiedotkuva" src="/img/vo_juoma.jpg">


<?php } ?>