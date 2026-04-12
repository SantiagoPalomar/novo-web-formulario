function cambiarFormulario() {
    const tipo = document.getElementById('tipo_documento').value;
    const camposPersona = document.getElementById('campos_persona');
    const camposNit = document.getElementById('campos_nit');
    const primerNombre = document.getElementById('primer_nombre');
    const primerApellido = document.getElementById('primer_apellido');
    const razonSocial = document.getElementById('razon_social_input');

    if (tipo === 'NIT' || tipo === 'NIC') {
        camposPersona.classList.add('hidden');
        camposNit.classList.remove('hidden');
        primerNombre.disabled = true;
        primerApellido.disabled = true;
        razonSocial.disabled = false;
        razonSocial.setAttribute('required', 'required');
    } else {
        camposPersona.classList.remove('hidden');
        camposNit.classList.add('hidden');
        primerNombre.disabled = false;
        primerApellido.disabled = false;
        razonSocial.disabled = true;
        razonSocial.removeAttribute('required');
    }
}

function calcularDigito() {
    const tipo = document.getElementById('tipo_documento').value;
    const nit = document.getElementById('documento').value.replace(/\D/g, '');
    const container = document.getElementById('digito_container');
    const digitoInput = document.getElementById('digito_verificacion');

    if ((tipo === 'NIT' || tipo === 'NIC') && nit.length > 0) {
        container.classList.remove('hidden');
        const factores = [3, 7, 13, 17, 19, 23, 29, 37, 41];
        let suma = 0;
        const nitReversado = nit.split('').reverse();
        for (let i = 0; i < nitReversado.length && i < factores.length; i++) {
            suma += parseInt(nitReversado[i]) * factores[i];
        }
        const residuo = suma % 11;
        let digito;
        if (residuo === 0) digito = 0;
        else if (residuo === 1) digito = 1;
        else digito = 11 - residuo;
        digitoInput.value = digito;
    } else {
        container.classList.add('hidden');
        digitoInput.value = '';
    }
}