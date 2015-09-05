<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="author" content="Daniele Baschieri" />
<meta name="description" content="Un semplice canzoniere da viaggio per android. Pratico per le route o per tutti gli Scout smemorati." />
<meta name ="copyright" content="2014" />
<meta name="keywords" content="CantiScout,canzoniere,canti,canzoni,bans,ballate,cantare,cantiamo,insieme,gioia,scouting,boys,canta,cammina,camminiamo,route,hike,strada,coraggio" />

<title>A-PPU - specialità</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="css/datatables.min.css"/>
 <link rel="stylesheet" type="text/css" href="css/default.css" />


      
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/datatables.min.js"></script>
<script type="text/javascript"  src="js/default.js"></script>


 
 <script type="text/javascript" > 
 $(document).ready(function(){
				<?php
					echo 'var id="'.$_GET['id'].'";';
					echo 'var idSpec="'.$_GET['idS'].'";';
				?>
				initSpecialita(id,idSpec);
			});
</script>
<style>
	
</style>

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Advanced P.P.U</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="#about">Panoramica</a></li>
            <li><a href="#contact">Specialità</a></li>
            <li><a href="#contact">Nuovo Scout</a></li>
            <li><a href="#contact">Extra</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
			  <li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Utilità <span class="caret"></span></a>
				  <ul class="dropdown-menu">
					  <li><a href="#"><span class="glyphicon glyphicon glyphicon-pencil" aria-hidden="true"></span> Modifica</a></li>
					  <li role="separator" class="divider"></li>
					  <li><a href="#"><span class="glyphicon glyphicon glyphicon-trash" aria-hidden="true"></span> Cancella</a></li>
				  </ul>
			  </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="starter-template">
		  <div class="row">
			  <div class="col-lg-6">
				  <div class="row">
					<div class="col-lg-4">
						<img class="photo" src="archive/spec/attore.jpg" />
					</div>
					<div class="col-lg-8 infoSpec">
						<p><label>Prove di:</label> <b class="name"></b></p>
						<p><label>Specialita:</label> <b class="specialita"></b></p>
						<p><label>Maestro:</label> <input id="maestro" type="text" placeholder="maestro" /></p>
						<p><label>Giorno:</label> <input id="data" type="text" placeholder="08-08-2015" /></p>
						<p><label>Conquistata:</label> <input id="conquistata" type="checkbox" /></p>
					</div>
				  </div>
				  <div class="row">
					  <div class="panel panel-default">
						  <div class="panel-heading">Impegni <button type="button" class="btn btn-info btn-xs right"><span class="glyphicon glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button></div>
						  <div class="panel-body">
							<ul id="listaImpegniSpec">
								<li>Fare l'attore</li>
								<li>Attorare di più!</li>
							</ul>
						  </div>
					  </div>
				  </div>
				  <div class="row">
						<div class="panel panel-default">
						  <div class="panel-heading">Varie</div>
						  <div class="panel-body">
							<textarea id="varie">Il ragazzo è brutto!</textarea>
						  </div>
						</div>
				   </div>
			  </div>
			  <div class="col-lg-6">
				  <div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
						  <div class="panel-heading">
							  Info da Wiki 
							  <button type="button" class="btn btn-xs btn-default openwiki" aria-label="Right Align" onclick="" >
								  <span class="glyphicon glyphicon glyphicon-new-window" aria-hidden="true"></span>
							  </button>  
						  </div>
						  <div class="panel-body">
							<iframe src="" ></iframe>
						  </div>
						</div>
					</div>
				  </div>
				  <div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
						  <div class="panel-heading">Il Metodo</div>
						  <div class="panel-body">
							<article id="metodo"></article>
						  </div>
						</div>
					</div>
				  </div>
			  </div>
		  </div>
      </div>

    </div>
	
</body>

</html>
