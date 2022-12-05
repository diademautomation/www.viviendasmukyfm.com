<!DOCTYPE html>
<html>
<head>
	<title>Google Maps - Rutas</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/map/css/base.css">
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/map/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/map/js/functions.js"></script>
</head>
<body>
	<div class="container">
		<table class="table-elements">
			<tr>
				<td>
					<input type="button" value="Obtener mi ubicacion" onclick="get_my_location();" class="btn">
				</td>
				<td>
					<input type="text" placeholder="Latitud" id="my_lat" class="txt" readonly>
				</td>
				<td>
					<input type="text" placeholder="Longitud" id="my_lng" class="txt" readonly>
				</td>
				<td>
					<select class="txt"> <!-- <select class="txt" onchange="draw_rute_map();">-->
                                        <option selected>Franquicia</option>                  
                                        <option value="Americana">Parque Tecnológico Quilmes</option>
                                       
						
					</select>
				</td>
			</tr>
		</table>


		<!--<div class="map" id="map">

		</div>-->


	</div>


	

	<!--<script type="text/javascript">
		start_map();
	</script>-->


</body>
</html>

