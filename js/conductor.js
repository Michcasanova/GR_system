		$(document).ready(function(){
			load(1);
		});

		function load(page){
			var q= $("#q").val();
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'./ajax/buscar_conductor.php?action=ajax&page='+page+'&q='+q,
				 beforeSend: function(objeto){
				 $('#loader').html('<img src="./img/ajax-loader.gif"> Cargando...');
			  },
				success:function(data){
					$(".outer_div").html(data).fadeIn('slow');
					$('#loader').html('');
					
				}
			})
		}

	
		
			function eliminar (id)
		{
			var q= $("#q").val();
		if (confirm("Realmente deseas eliminar el cliente")){	
		$.ajax({
        type: "GET",
        url: "./ajax/buscar_conductor.php",
        data: "id="+id,"q":q,
		 beforeSend: function(objeto){
			$("#resultados").html("Mensaje: Cargando...");
		  },
        success: function(datos){
		$("#resultados").html(datos);
		load(1);
		}
			});
		}
		}
		
		
	
$( "#guardar_conductor" ).submit(function( event ) {
  $('#guardar_dat').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/nuevo_conductor.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax").html(datos);
			$('#guardar_dat').attr("disabled", false);
			load(1);
		  }
	});
  event.preventDefault();
})

$( "#editar_conductor" ).submit(function( event ) {
  $('#actualizar_datos').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/editar_conductor.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax2").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax2").html(datos);
			$('#actualizar_datos').attr("disabled", false);
			load(1);
		  }
	});
  event.preventDefault();
})

	function obtener_datos(id){
			var Nombre = $("#mod_Nombre"+id).val();
			var Direccion = $("#mod_Direccion"+id).val();
			var Seguro_social = $("#mod_Seguro_social"+id).val();
			var tipo_licencia = $("#mod_tipo_licencia"+id).val();
			var Num_licencia = $("#mod_status"+id).val();
			var telefono = $("#mod_telefono"+id).val();
			var fam_cercano = $("#mod_fam_cercano"+id).val();
			var tel_fam = $("#mod_tel_fam"+id).val();
			var Antecedente_clinico = $("#mod_Antecedente_clinico"+id).val();
			var status = $("#status"+id).val();
	
			$("#mod_Nombre").val(Nombre);
			$("#mod_Direccion").val(Direccion);
			$("#mod_Seguro_social").val(Seguro_social);
			$("#mod_tipo_licencia").val(tipo_licencia);
			$("#Num_licencia").val(Num_licencia);
			$("#telefono").val(telefono);
			$("#fam_cercano").val(fam_cercano);
			$("#tel_fam").val(tel_fam);
			$("#Antecedente_clinico").val(Antecedente_clinico);
			$("#status").val(status);
			$("#mod_id").val(id);

		
		}
	
		
		

