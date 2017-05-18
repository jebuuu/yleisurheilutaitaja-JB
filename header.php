<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Yleisurheilutaitaja</title>
<link rel="stylesheet" type="text/css" href="/~T2017051002/sivu/bootstrap-3.3.7-dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="tyylit.css">
<script src="/~T2017051002/sivu/jquery-3.2.1"></script>
</head>
<body>
<div id="header">
<h1 id="otsikko">YLEISURHEILUTAITAJA</h1>
<img alt="Suomen urheiluliiton logo" id="logo" src="/~T2017051002/sivu/img/SUL_logo_pysty_RGB">
</div>
<div id="sivu">
<div id="menu" class="col-md-2">
<?php
if(!isset($_SESSION['username'])){?>
<a href="/~T2017051002/sivu?sivu=rekisteroidy" id="rekisteroidy" class="btn btn-success kirjautuminen">Rekisteröidy</a>&nbsp;&nbsp;
<a href="/~T2017051002/sivu?sivu=kirjaudu" id="kirjaudu" class="btn btn-success kirjautuminen">Kirjaudu</a>
<?php } else {echo '<a href="/~T2017051002/sivu?sivu=kirjauduulos" id="kirjaudu" class="btn btn-danger kirjautuminen">Kirjaudu ulos ('.$_SESSION['username'].')</a>';}?>
<ul class="nav nav-pills-stacked">
  <li role="presentation" class="napit"><a href="/~T2017051002/sivu?sivu=etusivu">Etusivu</a></li>
  <li role="presentation" class="napit"><a href="/~T2017051002/sivu?sivu=tulokset">Omat tulokset</a></li>
  <li role="presentation" class="napit"><a href="/~T2017051002/sivu?sivu=tiedot">Omat tiedot</a></li>
  <li role="presentation" class="napit"><a href="/~T2017051002/sivu?sivu=linkkeja">Ohjeita ja linkkejä</a></li>
</ul>
</div>






<div id="sisalto" class="col-md-9">
