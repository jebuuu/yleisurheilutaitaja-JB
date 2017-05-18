<?php
	if(isset($_POST['kirjaudu'])){
		$conn = new mysqli('localhost', 'T2017051002', '1e728d9d4c', 'T2017051002');
		$sql = "SELECT * FROM users WHERE tunnus = '".$_POST['nimi']."'";
		$user = $conn->query($sql)->fetch_assoc();
		if($_POST['nimi']===$user['tunnus'] && $_POST['salasana']===$user['salasana']){
			$_SESSION['username']=$user['tunnus'];
			$_SESSION['userid']=$user['id'];
			echo 'Kirjautuminen onnistui';
			header('Location: /');
		}
	} else {
?>
<form action="/?sivu=kirjaudu" method="post">
	<div id="rekisteroityminen" class="input-group">
		Nimi<input class="form-control" type="text" name="nimi" placeholder="Nimi" required><br>
		Salasana<input class="form-control" type="password" name="salasana" placeholder="Salasana" required><br>
		<input class="form-control btn btn-success" type="submit" name="kirjaudu" value="Kirjaudu"><br>
	
	</div>	
</form>
<img alt="voitto onninen" id="tiedotkuva" src="/img/vo_juoma.jpg">


<?php } ?>