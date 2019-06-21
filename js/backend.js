$(document).ready(function () {
    console.log("se cargo correctamente el DOM");

    // Eventos
    $('#btnSubmit').on("click", function (e) {
      console.log('click submit...');
      registrar_contacto();
    });

});   // fin ready


/* Registrar contacto */
function registrar_contacto(){
  var nom = $("#name").val();
  var rol = $("#roleList option:selected").val();
  var ema = $("#email").val();
  var com = $.trim($("#coment").val());
  var dataString ='acc=1&nom=' + nom + '&rol=' + rol+'&ema='+ema+'&com=' + com;
  console.log(dataString);
  $.ajax({
         type   : 'POST',
         url    : 'respuesta.php',
         data   :  dataString,
         success:function(data) {
           console.log(data);
           if (data!='success') {
             messSubmit(0);
           } else {
             messSubmit(1);
             $("#name").val("");
             $("#email").val("");
             $("#coment").val("");
             $("#roleList")[0].selectedIndex = 0;
           }
         }
  });
}
