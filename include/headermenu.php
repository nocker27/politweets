<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Portfolio template</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body onload="myFunction()">
<nav class="polinav navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myDefaultNavbar1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#"></a> </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="myDefaultNavbar1">
      <ul class="nav navbar-nav justify-content-center nav-pills nav-fill">
        <li class="active"><a href="index.php">Tweets <span class="sr-only">(current)</span></a></li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">Genders <span class="caret"></span></a>
        	<ul class="dropdown-menu">
        		<li><a href="kvinder.php">Women</a></li>
        		<li><a href="mand.php">Men</a></li>
        	</ul>
        </li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">Parties <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="alternativet.php">Alternativet</a></li>
            <li><a href="dansk_folkeparti.php">Dansk Folkeparti</a></li>
            <li><a href="det_konservative_folkeparti.php">Det Konservative Folkeparti</a></li>
            <li><a href="enhedslisten.php">Enhedslisten</a></li>
            <li><a href="inuit_ataqatigiit.php">Inuit Ataqatigiit</a></li>
            <li><a href="javnadarflokkurin.php">Javnaðarflokkurin</a></li>
            <li><a href="liberal_alliance.php">Liberal Alliance</a></li>
            <li><a href="radikale_venstre.php">Radikale Venstre</a></li>
            <li><a href="socialdemokratiet.php">Socialdemokratiet</a></li>
            <li><a href="socialistisk_folkeparti.php">Socialistisk Folkeparti</a></li>
            <li><a href="tjodveldi.php">Tjóðveldi</a></li>
            <li><a href="ufg.php">UFG</a></li>
            <li><a href="siumut.php">Siumut</a></li>
            <li><a href="venstre.php">Venstre</a></li>
          </ul>
        </li>
      </ul>
</div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
<div id="loader"></div>
<div style="display:none;" id="myDiv" class="animate-bottom">
