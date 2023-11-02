$(window).on('load', function() {

    $('#fotoPet').on('change', function(e) {
        var input = e.target;
    
        if (input.files && input.files[0]) {
          var reader = new FileReader();
    
          reader.onload = function (e) {
            
            var novaFoto = $('<img class="w-100 h-100 img-fluid">');
    
            
            novaFoto.attr('src', e.target.result);

            $('.foto').html(novaFoto);
          };
    
          reader.readAsDataURL(input.files[0]);
        }
      });




    
})


function mostrarCampos(element) {
    let valor = $(element).val()
    $('.data_desaparecimento').hide()

    if(valor == 'desaparecido') {
        $('.data_desaparecimento').fadeIn();
    }
    
    $(".detalhes").slideDown();
}