<!DOCTYPE html>
<html>
<head>
	<title></title>
<style src="<?php echo base_url();?>assets/css/mapa_co.css" type="text/css"></style>
</head>
<body>
 <section class="container">

<div id="mapa" class="col-md-6"></div>


       
<div id="grafica">
	<?php
        echo base_url();
		if(isset($saludo))
		{
			//pr($saludo);
			//echo $data['saludo']."..";
			//var_dump($data);
		}
		else echo "no valido... ";

	?>
</div>
</section>
</body>
<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
<script src="https://code.highcharts.com/mapdata/countries/co/co-all.js"></script>
<script src="<?php echo base_url();?>assets/js/mapa_co.js" type="text/javascript"></script>
</html>