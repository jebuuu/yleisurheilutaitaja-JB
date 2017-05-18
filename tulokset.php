<?php
	if(isset($_POST['laske'])){
		$handle = fopen('event_parameters.csv', 'r');
		while(($row = fgetcsv($handle, 0, ';'))!==false){
			if($_POST[$row['0']]!=''){
				if($row['5']=='A'){
					$pisteet = floor(1010/pow(str_replace(',','.',$_POST[$row['0']])/str_replace(',','.',$row['3']),str_replace(',','.',$row['4']))-10);
				} else {
					$pisteet = floor(1010/pow(str_replace(',','.',$row['3'])/str_replace(',','.',$_POST[$row['0']]),str_replace(',','.',$row['4']))-10);
				}
				if((!isset($tiedot['pikajuoksut'])||$pisteet > $tiedot['pikajuoksut']) && $row['6'] == 'pikajuoksut'){$tiedot['pikajuoksut'] = $pisteet;}
				if((!isset($tiedot['kestavyys'])||$pisteet > $tiedot['kestavyys']) && $row['6'] == 'kestavyys'){$tiedot['kestavyys'] = $pisteet;}
				if((!isset($tiedot['hypyt'])||$pisteet < $tiedot['hypyt']) && $row['6'] == 'hypyt'){$tiedot['hypyt'] = $pisteet;}
				if((!isset($tiedot['heitot'])||$pisteet < $tiedot['heitot']) && $row['6'] == 'heitot'){$tiedot['heitot'] = $pisteet;}
			}
		}
		fclose($handle);
	} else {
		$conn = new mysqli('localhost', 'T2017051002', '1e728d9d4c', 'T2017051002');
		$sql = "SELECT pikajuoksut, kestavyys, hypyt, heitot FROM users WHERE id =".$_SESSION['userid'];
		$tiedot = $conn->query($sql)->fetch_assoc();
	}
?>
<a href="/~T2017051002/sivu?sivu=lisaatulos" class="btn btn-success">Lisää tietoja</a>
<h1>Sinun tasoituksesi on: <?php if(isset($tiedot['pikajuoksut'])&&isset($tiedot['kestavyys'])&&isset($tiedot['hypyt'])&&isset($tiedot['heitot']))echo round(-($tiedot['pikajuoksut']+$tiedot['kestavyys']+$tiedot['hypyt']+$tiedot['heitot'])/100+41, 1);?></h1>
<br>
<div id="laatikko">
<div class="ryhmat" id="ryhma1">
<h3>Pikajuoksut</h3>
<h2><?php echo $tiedot['pikajuoksut'];?></h2>
<br>
<img alt="juoksu" src="/img/vo_lahtotelineissa.jpg"<?php if(array_keys($tiedot, max($tiedot))[0]=="pikajuoksut"){echo 'style="max-width: 190px;max-height: 150px;margin:0;"';}?>>
</div>
<div class="ryhmat" id="ryhma2">
<h3>Kestävyyslajit</h3>
<h2><?php echo $tiedot['kestavyys'];?></h2>
<br>
<img alt="juoksu" src="/img/vo_juoksu.jpg"<?php if(array_keys($tiedot, max($tiedot))[0]=="kestavyys"){echo ' style="max-width: 190px;max-height: 150px;margin:0;"';}?>>
</div>
<div class="ryhmat" id="ryhma3">
<h3>Hypyt</h3>
<h2><?php echo $tiedot['hypyt'];?></h2>
<br>
<img alt="hyppy" src="/img/pituus6b.jpg"<?php if(array_keys($tiedot, max($tiedot))[0]=="hypyt"){echo ' style="max-width: 190px;max-height: 150px;margin:0;"';}?>>
</div>
<div class="ryhmat" id="ryhma4">
<h3>Heitot</h3>
<h2><?php echo $tiedot['heitot'];?></h2>
<br>
<img alt="heitto" src="/img/kiekko7a.jpg"<?php if(array_keys($tiedot, max($tiedot))[0]=="heitot"){echo ' style="max-width: 190px;max-height: 150px;margin:0;"';}?>>
</div>
</div>
<br>
	<?php if(isset($_POST['laske'])){?>
		<form method="post" action="/?sivu=tallenna" id="formi">
		<input name="pikajuoksut" type="text" value="<?php echo $tiedot['pikajuoksut']?>" hidden>
		<input name="kestavyys" type="text" value="<?php echo $tiedot['kestavyys']?>" hidden>
		<input name="hypyt" type="text" value="<?php echo $tiedot['hypyt']?>" hidden>
		<input name="heitot" type="text" value="<?php echo $tiedot['heitot']?>" hidden>
		<?php
		echo '<a class="btn btn-default" onclick="document.getElementById(\'formi\').submit()">Tallenna</a>';
		echo '<a href="/~T2017051002/sivu?sivu=lisaatulos" class="btn btn-default">Laske uusi</a>';
		
	}
?>
