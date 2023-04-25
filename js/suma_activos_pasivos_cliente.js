//Función que realiza la suma
function SumaActivos() {
   var ingreso1 = document.cliente.total_sueldo.value;
   var ingreso2 = document.cliente.giros.value;
   var ingreso3 = document.cliente.otros_ingresos.value;

   try{
      //Calculamos el número escrito:
       ingreso1 = (isNaN(parseInt(ingreso1)))? 0 : parseInt(ingreso1);
       ingreso2 = (isNaN(parseInt(ingreso2)))? 0 : parseInt(ingreso2);
       ingreso3 = (isNaN(parseInt(ingreso3)))? 0 : parseInt(ingreso3);
       document.cliente.activos_total.value = ingreso1+ingreso2+ingreso3;
   }
   //Si se produce un error no hacemos nada
   catch(e) {}
}

function SumaPasivos() {
   var ingreso1 = document.cliente.gastos_fijos.value;
   var ingreso2 = document.cliente.entidades_financieras.value;
   var ingreso3 = document.cliente.otros_creditos.value;

   try{
      //Calculamos el número escrito:
       ingreso1 = (isNaN(parseInt(ingreso1)))? 0 : parseInt(ingreso1);
       ingreso2 = (isNaN(parseInt(ingreso2)))? 0 : parseInt(ingreso2);
       ingreso3 = (isNaN(parseInt(ingreso3)))? 0 : parseInt(ingreso3);
       document.cliente.pasivos_total.value = ingreso1+ingreso2+ingreso3;
   }
   //Si se produce un error no hacemos nada
   catch(e) {}
}
