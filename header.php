

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional // EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />


    <!-- Bootstrap CSS  -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />      
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />

      <title> KEREMİN SİTESİ </title>
  </head>
  <body>
      
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">PHP ÖĞRENİYORUM</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="hvr-pulse"><a href="index.php">ANASAYFA <span class="sr-only">(current)</span></a></li>
        <li class="hvr-pulse"><a href="hakkimda.php?git=hakkimda">HAKKIMDA</a></li>
        <li class="hvr-pulse"><a href="iletisim.php?git=iletisim">İLETİŞİM</a></li>
        
      </ul>
   
        
        <div id="icerik">
<?php

$gel=@$_GET["git"];

switch($gel){
	
	
	
	
	  
	  case 'iletisim';
	  include("iletisim.php");
	  break;
	
	  case 'hakkimda';
	  include("hakkimda.php");
	  break;
	
	
	default;
	break;
	}

	
	
?> 





</div>
    
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>