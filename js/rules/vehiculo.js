const rules_vehiculo = {
  tipo_vehiculo: { name: "tipo de vehiculo",rule: "required|alpha",required: "*" },
  placa: { name: "placa", rule: "required|alpha_num", required: "*" },
  soat: { name: "vencimiento soat", rule: "required", required: "*" },
  rtm: { name: "vencimiento rtm", rule: "required", required: "*" },
  observaciones: { name: "observaciones", rule: "", required: "" },
};
