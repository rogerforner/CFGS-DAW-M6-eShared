/*********************************************************************** "ÍNDEX"
# CÀRREGA DE LA PÀGINA
## Buscar paraula (Regex)
# FUNCIONS
## Validar formulari
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
function validaFormulari() {
  // Obtenir valors dels camps.
  var titol = $('#inputTitol').val();
  var cos   = $('textarea#summernote').val().replace(/<[^>]*>/g, '');

  // Si el títol està buit o està format per menys de 70 caràcters, no permetem
  // que es dugui a terme el sumbmit i, a més a més, avisem que s'ha d'emplenar.
  if (titol == null || titol.length <= 70 || /^\s+$/.test(titol)) {
    alert('[ERROR] El camp títol és obligatori i no pot tenir menys de 70 caràcters.');
    return false;
  }

  // Si el títol està buit, no permetem que es dugui a terme el sumbmit i, a més
  // a més, avisem que s'ha d'emplenar.
  if (cos == null || cos.length == 0 || /^\s+$/.test(cos)) {
    alert('[ERROR] El cos és obligatori i no pot estar buit.');
    return false;
  }
}

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
