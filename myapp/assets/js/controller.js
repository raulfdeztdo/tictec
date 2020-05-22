//controller.js
$(function () {
    console.log( "DOM ready!" );
    $('#password').keyup('input', compContraseñas);
    $('#password2').keyup('input', compContraseñas);
    $('#image').change('input', pasarValor);
    $('#compra').click('input', compra);
    $('#enviardatos').click('input', creacurso);
    $('#registro').click('input', registro);

});
function compContraseñas( event ){
    var pass1= $('[name=password]').val();
    var pass2= $('[name=password2]').val();

    if (pass1 === pass2 && (pass1.length>=6 || pass2.lenght>=6)) {
         $('#password').addClass("alert-success");
         $('#password2').addClass("alert-success");
         $('#password').removeClass("alert-danger");
         $('#password2').removeClass("alert-danger");
         $("#password").css({"border": "1px solid"});
         $("#password2").css({"border": "1px solid"});
         $('#registro').prop('disabled', false);
         $('#errContraseñas').fadeOut(800);

    } else {
        $('#password').addClass("alert-danger");
        $('#password2').addClass("alert-danger");
        $('#password').removeClass("alert-success");
        $('#password2').removeClass("alert-success");
        $("#password").css({"border": "1px solid"});
        $("#password2").css({"border": "1px solid"});
        $('#registro').prop('disabled', true);
        $('#errContraseñas').fadeIn(800);
    }
}
function pasarValor( event ){
    var img = $("#image").val();
    $('#imageValue').val(img);
}
function compra( event ){
  var txt;
  var r = confirm("¿Quieres confirmar la compra?");
  if (r == true) {
        $('#compra').attr("type", 'submit');
  }
}
function creacurso( event ){
  var txt;
  var r = confirm("¿Quieres subir el curso?");
  if (r == true) {
        $('#enviardatos').attr("type", 'submit');
  }
}
  function registro( event ){
    var txt;
    var r = confirm("¿Confirmas los datos para el registro?");
    if (r == true) {
          $('#registro').attr("type", 'submit');
    }
}
