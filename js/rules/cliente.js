const rules_personales = {
    primer_nombre: {
        name: 'primer nombre',
        rule: 'required|alpha_spaces'
    },
    segundo_nombre: {
        name: 'segundo nombre',
        rule: 'alpha_spaces'
    },
    primer_apellido: {
        name: 'primer apellido',
        rule: 'required|alpha_spaces'
    },
    segundo_apellido: {
        name: 'segundo apellido',
        rule: 'alpha_spaces'
    },
    tipo_doc: {
        name: 'tipo de documento',
        rule: 'required'
    },
    num_doc: {
        name: 'numero de documento',
        rule: 'required|numeric'
    },
    lugar_exp: {
        name: 'lugar de expedicion',
        rule: 'required|alpha_spaces'
    },
    fecha_exp: {
        name: 'fecha de expedicion',
        rule: 'required'
    },
    fecha_nacimiento: {
        name: 'fecha de nacimiento',
        rule: 'required'
    },
    lugar_nacimiento: {
        name: 'lugar de nacimiento',
        rule: 'required|alpha_spaces'
    },
    genero: {
        name: 'genero',
        rule: 'required'
    },
    nivel_estudios: {
        name: 'nivel de estudios',
        rule: 'required'
    },
    estado_civil: {
        name: 'estado civil',
        rule: 'required'
    }
}

const rules_ubicacion = {
    direccion: {
        name: 'direccion',
        rule: 'required|regex:^([a-zA-Z0-9-]+[ ]?)+$'
    },
    barrio: {
        name: 'barrio',
        rule: 'required|regex:^([a-zA-Z0-9-]+[ ]?)+$'
    },
    municipio: {
        name: 'municipio',
        rule: 'required'
    },
    movil: {
        name: 'celular',
        rule: 'required|numeric|min:10|max:10'
    },
    fijo: {
        name: 'telefono',
        rule: 'numeric|min:7'
    },
    email: {
        name: 'correo electronico',
        rule: 'required|email'
    },
    estrato: {
        name: 'estrato',
        rule: 'required'
    },
    anos_residencia: {
        name: 'años en residencia',
        rule: 'required|integer|min_value:0|max_value:75'
    },
    meses_residencia: {
        name: 'meses en residencia',
        rule: 'required|integer|max_value:11'
    },
    tipo_vivienda: {
        name: 'tipo de vivienda',
        rule: 'required'
    },
    envio_correspondencia: {
        name: 'envio de correspondencia',
        rule: ''
    },
    nombre_arrendador: {
        name: 'nombre arrendador',
        rule: ''
    },
    telefono_arrendador: {
        name: 'telefono arrendador',
        rule: 'numeric|min:7|max:10'
    }
}

const rules_economica = {
    ocupacion: {
        name: 'ocupacion',
        rule: 'required',
        required: '*'
    }, // general
    tipo_actividad: {
        name: 'tipo de actividad',
        rule: 'required',
        required: '*'
    }, // general
    empresa: {
        name: 'nombre empresa',
        rule: 'alpha_spaces',
        required: ''
    }, // empleado e independiente
    tel_empresa: {
        name: 'telefono empresa',
        rule: 'min:7|max:15',
        required: ''
    }, // empleado e independiente
    dir_empresa: {
        name: 'direccion empresa',
        rule: 'required|regex:^([a-zA-Z0-9-]+[ ]?)+$',
        required: ''
    }, // empleado e independiente
    doc_empresa: {
        name: 'identificacion empresa',
        rule: 'numeric|required',
        required: '*'
    }, // empleado
    cargo: {
        name: 'cargo',
        rule: 'alpha_spaces',
        required: ''
    }, // empleado
    tipo_contrato: {
        name: 'tipo de contrato',
        rule: '',
        required: ''
    }, // empleado
    fecha_vinculacion: {
        name: 'fecha de vinculacion',
        rule: '',
        required: ''
    }, // empleado e independiente
    descripcion_actividad: {
        name: 'descripcion de la actividad',
        rule: '',
        required: ''
    }, // indeṕendiente
}
