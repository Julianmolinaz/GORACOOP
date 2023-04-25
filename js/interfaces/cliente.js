class Cliente {
  constructor() {
    this.id = "";
    this.tipo = "";
    this.info_personal = "";
    this.info_ubicacion = "";
    this.info_economica = "";
    this.conyuge = "";
    this.calificacion = "";
  }
}

class InfoPersonal {
  constructor() {
    this.primer_nombre = "";
    this.segundo_nombre = "";
    this.primer_apellido = "";
    this.segundo_apellido = "";
    this.tipo_doc = "";
    this.num_doc = "";
    this.fecha_nacimiento = "";
    this.lugar_exp = ""; //*
    this.fecha_exp = ""; //*
    this.lugar_nacimiento = ""; //*
    this.nivel_estudios = ""; //*
    this.estado_civil = ""; //*
    this.genero = ""; //*
  }
}

class InfoUbicacion {
  constructor() {
    this.direccion = "";
    this.barrio = "";
    this.municipio_id = "";
    this.movil = "";
    this.fijo = "";
    this.email = "";
    this.estrato = ""; //*
    this.anos_residencia = ""; //*
    this.meses_residencia = ""; //*
    this.tipo_vivienda = ""; //*
    this.envio_correspondencia = ""; //*
    this.nombre_arrendador = ""; //*
    this.telefono_arrendador = ""; //*
  }
}

class InfoEconomica {
  constructor() {
    this.ocupacion = "";
    this.tipo_actividad = "";
    this.empresa = "";
    this.tel_empresa = "";
    this.dir_empresa = "";
    this.doc_empresa = ""; //*
    this.cargo = ""; //*
    this.fecha_vinculacion = ""; //*
    this.tipo_contrato = ""; //*
    this.descripcion_actividad = ""; //*
  }

  reset(arr) {
    arr.forEach((item) => {
      if (item == "ocup") this.ocupacion = "";
      else if (item == "t1") this.tipo_actividad = "";
      else if (item == "empr") this.empresa = "";
      else if (item == "tel") this.tel_empresa = "";
      else if (item == "dir") this.dir_empresa = "";
      else if (item == "doc") this.doc_empresa = "";
      else if (item == "cargo") this.cargo = "";
      else if (item == "t2") this.tipo_contrato = "";
      else if (item == "fech") this.fecha_vinculacion = "";
      else if (item == "desc") this.descripcion_actividad = "";
    });
  }
}
