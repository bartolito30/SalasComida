$('#btnOfertas').click(function (e) { 
    let right = $('#divOfertas').css('right');
    $('#divOfertas').css('right', (right == '0px' ? '-25%' : 0));    
    $('#divOfertas').css('transition', '1s');    
});