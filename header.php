<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Yleisurheilutaitaja</title>
<link rel="stylesheet" type="text/css" href="/bootstrap-3.3.7-dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="tyylit.css">
<script src="/jquery-3.2.1.js"></script>
</head>
<body>
<div id="header">
<h1 id="otsikko">YLEISURHEILUTAITAJA</h1>
<img alt="Suomen urheiluliiton logo" id="logo" src="/img/Taitaja2017_logo.jpg">
</div>
<div id="sivu">
<div id="menu" class="col-md-2">
<?php
if(!isset($_SESSION['username'])){?>
<a href="/?sivu=rekisteroidy" id="rekisteroidy" class="btn btn-success kirjautuminen">Rekisteröidy</a>&nbsp;&nbsp;
<a href="/?sivu=kirjaudu" id="kirjaudu" class="btn btn-success kirjautuminen">Kirjaudu</a>
<?php } else {echo '<a href="/?sivu=kirjauduulos" id="kirjaudu" class="btn btn-danger kirjautuminen">Kirjaudu ulos ('.$_SESSION['username'].')</a>';}?>
<ul class="nav nav-pills-stacked">
  <li role="presentation" class="napit"><a href="/?sivu=etusivu">Etusivu</a></li>
  <li role="presentation" class="napit"><a href="/?sivu=tulokset">Omat tulokset</a></li>
  <li role="presentation" class="napit"><a href="/?sivu=tiedot">Omat tiedot</a></li>
  <li role="presentation" class="napit"><a href="/?sivu=linkkeja">Ohjeita ja linkkejä</a></li>
</ul>
</div>






<div id="sisalto" class="col-md-9">
