class Producto {
  constructor(producto_id, nombre) {
    this.id = "";
    this.producto_id = producto_id;
    this.otros = 0;
    this.expedido_a = "";
    this.nombre = nombre;
    this.precredito_id = "";
    this.proveedor_id = "";
    this.num_fact = null;
    this.fecha_exp = "";
    this.costo = 0;
    this.estado = "En proceso";
    this.iva = 0;
    this.observaciones = "";
    this._tipo_vehiculo_id = "";
    this._placa = "";
    this._vencimiento_soat = "";
    this._vencimiento_rtm = "";
  }
}
