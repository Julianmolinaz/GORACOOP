function format(input){
    var num = input.value.replace(/\./g,'');
    if(!isNaN(num)) {
        num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
        num = num.split('').reverse().join('').replace(/^[\.]/,'');
        return num;
    }
 
    else { alert('Solo se permiten numeros');
        return input.value.replace(/[^\d\.]*/g,'');
    }
}


function formatVue(value){

    var num = value.toString().replace(/\./g,'');
    if(!isNaN(num)) {
        num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
        num = num.split('').reverse().join('').replace(/^[\.]/,'');
        return num;
    }
 
    else { alert('Solo se permiten numeros');
        return input.value.replace(/[^\d\.]*/g,'');
    }
}
