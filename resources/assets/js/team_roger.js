/*********************************************************************** "ÍNDEX"
# CÀRREGA DE LA PÀGINA
# FUNCIONS
## Validar formulari
## Validar eMail
## Buscar paraula (Regex)
*******************************************************************************/

/*
# CÀRREGA DE LA PÀGINA
*******************************************************************************/
$( document ).ready(function() {

});

/*
# FUNCIONS
*******************************************************************************/
/*
## Validar formulari
----------------------------------------------------------------------------- */



/*
## Buscar paraula (Regex)
----------------------------------------------------------------------------- */
function buscarParaula() {
  var paraula = $('#buscaParaula').val();
  var text    = $('textarea#summernote').val().replace(/<[^>]*>/g, '');
  var regex   = new RegExp(paraula, 'g');

  // Marcar la paraula.
  var marcaParaules = text.replace(regex, '<mark>'+paraula+'</mark>');
  if (marcaParaules == null || marcaParaules.length == 0) {
    return false;

  } else {
    $('textarea#summernote').summernote('code', marcaParaules);
  }

  // Compta paraules.
  var numParaules = text.match(regex).length;
  if (numParaules == null || numParaules.length == 0) {
    $('span#numParaules').text('0');

  } else {
    $('span#numParaules').text(numParaules);
  }

}
