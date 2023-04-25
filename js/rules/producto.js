const rules_producto = {
  producto_id: {
    name: "nombre del producto",
    rule: "required",
    required: "*",
  },
  expedido_a: {
    name: "expedido a",
    rule: "required",
    required: "*",
  },
  proveedor_id: {
    name: "proveedor",
    rule: "required",
    required: "*",
  },
  num_fact: {
    name: "numero de factura",
    rule: "alpha_num",
    required: "",
  },
  fecha_exp: {
    name: "fecha de expedicion",
    rule: "",
    required: "",
  },
  costo: {
    name: "costo",
    rule: "required|decimal",
    required: "*",
  },
  otros: {
    name: "otros",
    rule: "decimal",
    required: "",
  },
  estado: {
    name: "estado",
    rule: "",
    required: "",
  },
  iva: {
    name: "iva",
    rule: "decimal",
    required: "",
  },
  observaciones: {
    name: "observaciones",
    rule: "",
    required: "",
  },
  vencimiento_rtm: {
    name: "observaciones",
    rule: "",
    required: "",
  },
  vencimiento_soat: {
    name: "observaciones",
    rule: "",
    required: "",
  },
  observaciones: {
    name: "observaciones",
    rule: "",
    required: "",
  },
};
