<?php
/**
 * Created by PhpStorm.
 * User: Adrian
 * Date: 08/02/2017
 * Time: 10:10
 */

function plantilla($titulo){
?>
<head>
 <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
  <title><?php echo utf8_encode($titulo)?></title>
  <link href="../vista/estilo.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron">
			 
				<h2>
					I.E.S Hermanos Machado
				</h2>
				
			</div>
		</div>
	</div>
</div>
<?php
}

function pie(){
}
?>