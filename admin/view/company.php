<?php require("../bootstrap-admin.php");
defined('SYSPATH_ADMIN') or die('No direct script access.');
//require('../../includes/Sql/sql.class.php');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <title>...</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Le styles -->
    <link href="../bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>
  </head>
  <body>

    <?php include("../menu.php"); ?>

	<div class="content">
	    <!-- Main hero unit for a primary marketing message or call to action -->
	    <div class="hero-unit"><h1>Cadastro da Empresa</h1></div>
	    <!-- Example row of columns -->
	    <div class="row">
	      <div class="span6">
		    <h2>CADASTRAR DADOS</h2>
		    <p>Etiam porta sem malesuada magna mollis euismod. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
		    <p><a class="btn" href="company-insert.php">Cadastrar Empresa &raquo;</a></p>
	      </div>
	      <div class="span5">
		    <h2>LISTAR EMPRESAS</h2>
		    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		    <p><a class="btn" href="company-select.php">Listar Empresas &raquo;</a></p>
	      </div>
	    </div>
	    <hr>
	    <?php include("../footer.php"); ?>
	</div>
	

  </body>
</html>