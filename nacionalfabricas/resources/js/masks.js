function ola (){

    alert('ola');
}

$(document).ready(function() {
    // Apply the CNPJ mask to the input field with the id "cnpj"
    $('#cnpj').inputmask('99.999.999/9999-99');
});