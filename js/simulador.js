$('#registro').click(function(){
	
  var periodo = $('#periodo').val();
  var meses = $('#meses').val();

//Calcular el número de cuotas del crédito

if(periodo == "Quincenal"){
	$('#num_cuotas').val(meses * 2);
		}
	else if(periodo == "Mensual"){
		$('#num_cuotas').val(meses);
	}
	else{
		$('#num_cuotas').val(0);
	}
//calcular el valor de la cuota mediante una peticion ajax

  var dato1 = $("#monto").val();
  var dato2 = $("#meses").val();
  var dato3 = $('#periodo').val();
  //var route = "/start/simulador";
  var route = "{{url('start/simulador')}}";

  var token = $("#token").val();

  $.post(route, {monto: dato1, meses: dato2, periodo: dato3, _token:token}, function(resultado){
        $("#valor_cuota").val(resultado)},"json");


});

