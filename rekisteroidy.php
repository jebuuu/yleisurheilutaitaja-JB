<?php
	if(isset($_POST['rekisteroidy'])){
		echo 'Rekisteröityminen onnistui';
		//tietokantaan
	} else {
?>
<form action="/~T2017051002/sivu/?sivu=rekisteroidy" method="post">
	<div id="rekisteroityminen" class="input-group">
		Nimi<input class="form-control" type="text" name="nimi" placeholder="Nimi" required><br>
		Syntymäaika<input class="form-control" type="date" name="ika" required><br>
		Salasana<input class="form-control" type="password" name="salasana" placeholder="Salasana" required><br>
		Salasana uudestaan<input class="form-control" type="password" name="salasana2" placeholder="Salasana uudestaan" required><br>
		Paino<input class="form-control" type="text" name="paino" placeholder="Paino"><br>
		Pituus<input class="form-control" type="text" name="pituus" placeholder="Pituus"><br>
		<br><br>
		<input class="form-control btn btn-success" type="submit" name="rekisteroidy" value="Rekisteröidy">
	</div>
</form>

<img alt="voitto onninen" id="tiedotkuva" src="/~T2017051002/sivu/img/vo_venyttely.jpg">

<?php } ?>