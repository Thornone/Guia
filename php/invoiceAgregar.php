<?php

if ( isset($_POST['nombre']) ){
/*
	$date_time   = mysql_real_escape_string($_POST['date_time']);
	$invoice     = mysql_real_escape_string($_POST['invoice']);
	$model  	 = mysql_real_escape_string($_POST['model']);
	$state       = mysql_real_escape_string($_POST['state']);
	$type    	 = mysql_real_escape_string($_POST['type']);
	$cylinders   = mysql_real_escape_string($_POST['cylinders']);
	$fuel   	 = mysql_real_escape_string($_POST['fuel']);
	$make  		 = mysql_real_escape_string($_POST['make']);
	$vin         = mysql_real_escape_string($_POST['vin']);
	$transmision = mysql_real_escape_string($_POST['transmision']);
	$odometer    = mysql_real_escape_string($_POST['odometer']);
	$model       = mysql_real_escape_string($_POST['model']);
	$engine      = mysql_real_escape_string($_POST['engine']);
	$test        = mysql_real_escape_string($_POST['test']);
*/

}

?>
		<section class="panel panel-default">
			<header class="panel-heading">
				<div class="pull-right">
					<a href="admin.php?m=invoice" class="return"><i class="fa fa-mail-reply"></i> Regresar</a>
				</div>
				<i class="fa fa-plus icon"></i> Agregar Invoice
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>
	                <div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label class="col-lg-4 control-label">Test Date / Time:</label>
								<div class="col-lg-8"><input type="text" name="nombre" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="col-lg-4 control-label"></label>
								<div class="col-lg-8"></div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="col-lg-4 control-label">Invoice:</label>
								<div class="col-lg-8"><input type="text" name="direccion" class="form-control" placeholder=""></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label class="col-lg-4 control-label">Model Year:</label>
								<div class="col-lg-8"><input type="text" name="nombre" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="col-lg-4 control-label">Fuel type:</label>
								<div class="col-lg-8"><input type="text" name="direccion" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="col-lg-4 control-label">Odometer:</label>
								<div class="col-lg-8"><input type="text" name="direccion" class="form-control" placeholder=""></div>
							</div>
						</div>
					</div>
						<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label class="col-lg-4 control-label">State:</label>
								<div class="col-lg-8"><input type="text" name="nombre" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="col-lg-4 control-label">Make:</label>
								<div class="col-lg-8"><input type="text" name="direccion" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="col-lg-4 control-label">Model:</label>
								<div class="col-lg-8"><input type="text" name="direccion" class="form-control" placeholder=""></div>
							</div>
						</div>
					</div>
						<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label class="col-lg-4 control-label">Type:</label>
								<div class="col-lg-8"><input type="text" name="nombre" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="col-lg-4 control-label">VIN:</label>
								<div class="col-lg-8"><input type="text" name="direccion" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="col-lg-4 control-label">Engine Size:</label>
								<div class="col-lg-8"><input type="text" name="direccion" class="form-control" placeholder=""></div>
							</div>
						</div>
					</div>
						<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label class="col-lg-4 control-label">Cylinders:</label>
								<div class="col-lg-8"><input type="text" name="nombre" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="col-lg-4 control-label">Transmision:</label>
								<div class="col-lg-8"><input type="text" name="direccion" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="col-lg-4 control-label">Test weight:</label>
								<div class="col-lg-8"><input type="text" name="direccion" class="form-control" placeholder=""></div>
							</div>
						</div>
					</div>
		
			
					<div class="line line-dashed line-lg pull-in"></div>
					<div class="form-group text-right">
						<div class="col-lg-12"> 
							<button  type="submit" class="btn btn-sm btn-success"><i class="fa fa-check icon"></i> Agregar</button>
							<a class="btn btn-sm btn-danger"><i class="fa fa-times icon"></i> Cancelar</a>
						</div>
					</div>
				</form>
			</div>
		</section>
