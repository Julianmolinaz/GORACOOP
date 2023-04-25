let rules_conyuge = {
  p_nombrey: { name: "primer nombre", rule: "required|alpha_spaces" },
  s_nombrey: { name: "segundo nombre", rule: "alpha_spaces" },
  p_apellidoy: { name: "primer apellido", rule: "required|alpha_spaces" },
  s_apellidoy: { name: "segundo apellido", rule: "alpha_spaces" },
  tipo_docy: { name: "tipo documento", rule: "" },
  num_docy: { name: "numero de documento", rule: "numeric" },
  diry: { name: "direccion", rule: "regex:^([a-zA-Z0-9-]+[ ]?)+$" },
  movily: { name: "celular", rule: "required|numeric|min:10|max:10" },
  fijoy: { name: "telefono", rule: "numeric|min:7|max:10" },
};
