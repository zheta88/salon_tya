<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>Calendario Web</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script  src='public/js/jquery.min.js'></script>
	<script  src='public/js/moment.min.js'></script>
    <!--full calendar-->
	<link rel='stylesheet'  href='public/css/fullcalendar.min.css'/>
	<script  src='public/js/fullcalendar.min.js'></script>
    <script  src='public/js/es.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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

			$('#CalendarioWeb').fullCalendar({
                header:{
                    left:'today,prev,next',
                    center:'title',
                    right:'month,basicWeek,basicDay,agendaWeek,agendaDay'

                },
                dayClick:function(date,jsEvent,view){
                   // alert("Valor seleccionado:"+date.format());
                   // alert("Vista actual:"+view.name);
                   // $(this).css('background-color','red');
                   // $("#exampleModal").modal();
                   $('#txtFecha').val(date.format());
                   $("#ModalEventos").modal();
                },
               events:'http://localhost/salon2-master/test.php',
               


                eventClick:function(calEvent,jsEvent,view) {
                    //titulo (servicio) en html (h5)
                    $('#txtId').val(calEvent.id);
                    $('#txtServicio').val(calEvent.title);
                    $('#txtFecha').val(calEvent.start);
                    $('#txtFecha').val(calEvent.end);
                    $('#txtHora').val(calEvent.hora);
                    $('#txtPrecio').val(calEvent.precio);
                    $('#txtCliente').val(calEvent.cliente);
                    $('#txtEmpleado').val(calEvent.empleado);
                    $('#txtObservaciones').val(calEvent.descripcion);
                   

                    //$("#exampleModal").modal();
                    $("#ModalEventos").modal();

                    }

            });

		});
	</script>
	
<!--MODAL CRUD-->
<div class="modal fade" id="ModalEventos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="servicioAgendado"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Id: <input type="text" id="txtId" name="txtId"> <br>
            Servicio: <input type="text" id="txtServicio" name="txtServicio"> <br>
            Fecha: <input type="date" id="txtFecha" name="txtFecha"> <br>
            Hora: <input type="time" id="txtHora" name="txtHora"> <br>
            Precio: <input type="text" id="txtPrecio" name="txtPrecio"> <br>
            Cliente: <input type="text" id="txtCliente" name="txtCliente"> <br>
            Empleado: <input type="text" id="txtEmpleado" name="txtEmpleado"> <br>
            observaciones:<textarea id="txtObservaciones" rows="3"> </textarea><br>
            
        
          </div>
          <div class="modal-footer">
            <button type="button"id="btnAgregar" class="btn btn-success">Agregar</button>
            <button type="button" class="btn btn-primary">Modificar</button>
            <button type="button" class="btn btn-danger">Borrar</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          </div>
        </div>
  </div>
</div>
<script>


$('#btnAgregar').click(function(){
  var NuevaReserva={
    id:$('#txtId').val(),
    title:$('#txtServicio').val(),
    start:$('#txtFecha').val(),
    end:$('#txtFecha').val(),
    hora:$('#txtHora').val(),
    precio:$('#txtPrecio').val(),
    cliente:$('#txtCliente').val(),
    empleado:$('#txtEmpleado').val(),
    descripcion:$('#txtObservaciones').val()
    
  };
    $('#CalendarioWeb').fullCalendar('renderEvent',NuevaReserva);
    $("#ModalEventos").modal('toggle');
});


</script>

</body>
</html>