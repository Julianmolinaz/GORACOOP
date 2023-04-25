function validText(valor) {
  valor = $.trim(valor);
  if (
    valor == null ||
    valor == "" ||
    valor.length == 0 ||
    /^\s+$/.test(valor)
  ) {
    return false;
  }
  return true;
}

function validNumber(valor) {
  valor = $.trim(valor);
  if (
    isNaN(valor) ||
    valor == null ||
    valor == "" ||
    valor.length == 0 ||
    /^\s+$/.test(valor)
  ) {
    return false;
  }
  return true;
}

function validCharacterRange(valor, min, max) {
  valor = $.trim(valor);
  if (valor.length >= min && valor.length <= max) {
    return true;
  }
  return false;
}

function validEmail(valor) {
  valor = $.trim(valor);
  var emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
  if (!emailRegex.test(valor)) {
    return false;
  }
  return true;
}

function validDate(year, month, day) {
  if (isNaN(month) || /^[1-9]\d$/.test(month) == false) {
    return false;
  }
  month = parseInt(month) - 1;
  var valor = new Date(year, month, day);

  if (!isNaN(valor)) {
    return false;
  }
  return true;
}

function validCheck($checkbox) {
  if (!$checkbox.checked) {
    return false;
  }
  return true;
}
