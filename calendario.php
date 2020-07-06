<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>Calendario Web</title>
	
	<link rel='stylesheet'  href='public/css/fullcalendar.min.css'/>
	<script  src='public/js/jquery.min.js'></script>
	<script  src='public/js/moment.min.js'></script>
	<script  src='public/js/fullcalendar.min.js'></script>
	<script  src='public/js/es.js'></script>

</head>
<body>


	<div class="container">
		
		<div class="row">
			<div class="col"></div>
			<div class="col-7"> <div id="CalendarioWeb"> </div></div>
			<div class="col"></div>
		</div>

	</div>
	<script >
		

		$(document).ready( function(){

			$('#CalendarioWeb').fullCalendar();

		});
	</script>
	

</body>
</html>