/*var tabla;

//funcion que se ejecuta al inicio
function init(){
   listar();
      
$("#formulario").on("submit",function(e){
   	guardaryeditar(e);
   })

    //cargamos los items al select cliente
   $.post("../ajax/asistencia.php?op=selectPersona", function(r){
   	$("#idcliente").html(r);
   	$('#idcliente').selectpicker('refresh');
   });

  

}
/*function buscar(){
	//var parametros = {"buscar":buscar};
	var buscar = $('#buscar').val()
	$.ajax({
	
	type: 'POST',
	url:'../ajax/asistencia.php?op=buscar',
	data: {'idusuario': buscar},
  
	success: function(data){
	document.getElementById("tablasis").innerHTML = data;
	}
	});
}*/


/*
function listar(){
	tabla=$('#tablasis').dataTable({
		"aProcessing": true,//activamos el procedimiento del datatable
		"aServerSide": true,//paginacion y filrado realizados por el server
		dom: 'Bfrtip',//definimos los elementos del control de la tabla
		buttons: [
                  'excelHtml5',
                  'pdf'
		],
		"ajax":
		{
			url:'../ajax/asistencia.php?op=listar',
			type: "get",
			dataType : "json",
			error:function(e){
				console.log(e.responseText);
			}
		},
		"bDestroy":true,
		"iDisplayLength":10,//paginacion
		"order":[[0,"desc"]]//ordenar (columna, orden)
	}).DataTable();
}





init();*/