	function load(page){
		var parametros = {"action":"ajax","page":page};
		$("#loader").fadeIn('slow');
		$.ajax({
			url:'v_sede.php',
			data: parametros,
			success:function(data){
				$(".outer_div").html(data).fadeIn('slow');
				$("#loader").html("");
			}
		})
	}
 
		$('#dataUpdate').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var ruc = button.data('ruc') // Extraer la información de atributos de datos
		  var id = button.data('id') // Extraer la información de atributos de datos
		  var nombre = button.data('nombre') // Extraer la información de atributos de datos
		  var email = button.data('email') // Extraer la información de atributos de datos
		  var telefono = button.data('phone') // Extraer la información de atributos de datos
		  
		  var modal = $(this)
		  modal.find('.modal-title').text('Modificar oficina: '+id)
		  modal.find('.modal-body #id').val(id)
		  modal.find('.modal-body #ruc').val(ruc)
		  modal.find('.modal-body #nombre').val(nombre)
		  modal.find('.modal-body #email').val(email)
		  modal.find('.modal-body #phone').val(telefono)
		  $('.alert').hide();//Oculto alert
		})
		
		$('#dataDelete').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id = button.data('id') // Extraer la información de atributos de datos
		  var modal = $(this)
		  modal.find('.modal-title').text('Eliminar elemento: '+id)
		  modal.find('#id_oficina').val(id)		
		})
 
	$( "#actualizarDatos" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "modificar.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos_ajax").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#datos_ajax").html(datos);
					
					load(1);
				  }
			});
		  event.preventDefault();
		});
		