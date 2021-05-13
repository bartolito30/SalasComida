$('#btnHideRest').click(function (e) { 
    $('#divRest').css('left', '-35%');
    $('#divRest').css('transition', '1s');
});
$('#optionsRest button').click(function (e) {     
    let numOption = $(this).val();
    let optionSelected = $(this).text();
    $('#detalleOptionRest h1').text(optionSelected);
    $('.fondoModal').css('bottom', 0);
    $('.fondoModal').css('transition', '0.7s');
});