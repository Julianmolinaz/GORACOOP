const rules_solicitud = {


    fecha_solicitud: {
        name: 'fecha',
        rule: 'required',
        required: '*'
    },
    num_fact: {
        name: 'consecutivo',
        rule: 'required',
        required: '*'
    },
    cartera: {
        name: 'cartera',
        rule: 'required',
        required: '*'
    },
    aprobado: {
        name: 'aprobado',
        rule: '',
        required: ''
    },
    centro_costo: {
        name: 'centor de costos',
        rule: 'required|decimal',
        required: '*'
    },
    funcionario_id: {
        name: 'Vendedor',
        rule: 'required',
        required: '*'
    },
    cuota_inicial: {
        name: 'cuota inicial',
        rule: 'required|decimal',
        required: '*'
    },
    meses: {
        name: 'meses',
        rule: 'required',
        required: '*'
    },
    periodo: {
        name: 'periodo',
        rule: 'required',
        required: '*'
    },
    cuotas: {
        name: 'numero de cuotas',
        rule: 'required|numeric',
        required: '*'
    },
    valor_cuotas: {
        name: 'valor cuotas',
        rule: 'required|decimal',
        required: '*'
    },
    f_pago_1: {
        name: 'fecha de pago 1',
        rule: 'required',
        required: '*'
    },
    f_pago_2: {
        name: 'fecha de pago 2',
        rule: '',
        required: ''
    },
    estudio: {
        name: 'estudio',
        rule: 'required',
        required: '*'
    },
    observaciones: {
        name: 'observaciones',
        rule: '',
        required: ''
    }

}
