
<script>
$( document ).ready(function() {
});
	var valittu = document.getElementById('pikajuoksut');
	function valilehti(ryhma){
		document.getElementById('pikajuoksut').className='';
		document.getElementById('kestavyys').className='';
		document.getElementById('hypyt').className='';
		document.getElementById('heitot').className='';
		
		document.getElementById(ryhma).className='active';
		
		document.getElementById('tabpikajuoksut').style.display='none';
		document.getElementById('tabkestavyys').style.display='none';
		document.getElementById('tabhypyt').style.display='none';
		document.getElementById('tabheitot').style.display='none';
		
		document.getElementById('tab'+ryhma).style.display='block';

	}
</script>

<ul class="nav nav-tabs">
  <li id="pikajuoksut" role="presentation" class="active"><a onclick="valilehti('pikajuoksut')">Pikajuoksut</a></li>
  <li id="kestavyys" role="presentation"><a onclick="valilehti('kestavyys')">Kestävyyslajit</a></li>
  <li id="hypyt" role="presentation"><a onclick="valilehti('hypyt')">Hypyt</a></li>
  <li id="heitot" role="presentation"><a onclick="valilehti('heitot')">Heitot</a></li>
</ul>
<form class="input-group" action="/~T2017051002/sivu/?sivu=tulokset" method="post">
<div id="tabpikajuoksut"> <br>
<table>
<tr><td>40m: </td><td><input type="text" name="40m" class="form-control"></td><td> sekuntia </td></tr>
<tr><td>60m: </td><td><input type="text" name="60m" class="form-control"></td><td> sekuntia </td></tr>
<tr><td>80m: </td><td><input type="text" name="80m" class="form-control"></td><td> sekuntia </td></tr>
<tr><td>100m: </td><td><input type="text" name="100m" class="form-control"></td><td> sekuntia </td></tr>
<tr><td>150m: </td><td><input type="text" name="150m" class="form-control"></td><td> sekuntia </td></tr>
<tr><td>200m: </td><td><input type="text" name="200m" class="form-control"></td><td> sekuntia </td></tr>
<tr><td>300m: </td><td><input type="text" name="300m" class="form-control"></td><td> sekuntia </td></tr>
<tr><td>400m: </td><td><input type="text" name="400m" class="form-control"></td><td> sekuntia </td></tr>
<tr><td>60maj: </td><td><input type="text" name="60maj" class="form-control"></td><td> sekuntia </td></tr>
<tr><td>80maj: </td><td><input type="text" name="80maj" class="form-control"></td><td> sekuntia </td></tr>
<tr><td>100maj: </td><td><input type="text" name="100maj" class="form-control"></td><td> sekuntia </td></tr>
<tr><td>200maj: </td><td><input type="text" name="200maj" class="form-control"></td><td> sekuntia </td></tr>
</table>
</div>

<div id="tabkestavyys" style="display:none;"> <br>
<table>
<tr><td>600m: </td><td><input type="text" name="600m" class="form-control"></td><td> sekuntia </td></tr>
<tr><td>800m: </td><td><input type="text" name="800m" class="form-control"></td><td> sekuntia </td></tr>
<tr><td>1000m: </td><td> <input type="text" name="1000m" class="form-control"></td><td> sekuntia </td></tr>
<tr><td>1500m: </td><td> <input type="text" name="1500m" class="form-control"></td><td> sekuntia </td></tr>
<tr><td>2000m: </td><td> <input type="text" name="2000m" class="form-control"></td><td> sekuntia </td></tr>
<tr><td>3000m: </td><td> <input type="text" name="3000m" class="form-control"></td><td> sekuntia </td></tr>
</table>
</div>

<div id="tabhypyt" style="display:none;"> <br>
<table>
<tr><td>korkeus: </td><td> <input type="text" name="korkeus" class="form-control"></td><td> cm </td></tr>
<tr><td>seiväs: </td><td> <input type="text" name="seivas" class="form-control"></td><td> cm </td></tr>
<tr><td>pituus: </td><td> <input type="text" name="pituus" class="form-control"></td><td> cm </td></tr>
<tr><td>kolmiloikka: </td><td> <input type="text" name="kolmiloikka" class="form-control"></td><td> cm </td></tr>
</table>
</div>

<div id="tabheitot" style="display:none;"> <br>
<table>
<tr><td>kuula: </td><td> <input type="text" name="kuula" class="form-control"></td><td> m </td></tr>
<tr><td>kiekko: </td><td> <input type="text" name="kiekko" class="form-control"></td><td> m </td></tr>
<tr><td>moukari: </td><td> <input type="text" name="moukari" class="form-control"></td><td> m </td></tr>
<tr><td>keihäs: </td><td> <input type="text" name="keihas" class="form-control"></td><td> m </td></tr>
<tr><td>pallo: </td><td> <input type="text" name="pallo" class="form-control"></td><td> m </td></tr>
</table>
</div>


<br>
<input type="submit" name="laske" value="Laske">
</form>
