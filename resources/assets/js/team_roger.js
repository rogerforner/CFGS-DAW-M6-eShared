/*********************************************************************** "ÍNDEX"
# Pàgina de Publicació
## Validar formulari
## Buscar paraula (Regex)
# Pàgina de Contacte
# FUNCIONS
*******************************************************************************/
$( document ).ready(function() {
  /*
  # Pàgina de Publicació
  --------------------------------------------------------------------------- */
  /*
  ## Validar formulari
  --------------------------------------------------------------------------- */
  // Mirar FUNCIONS -> validaFormulari()

  /*
  ## Buscar paraula (Regex)
  --------------------------------------------------------------------------- */


  /*
  # Pàgina de Contacte
  --------------------------------------------------------------------------- */
});

/*
# FUNCIONS
*******************************************************************************/
function validaFormulari() {
  var titol = document.getElementById("inputTitol");
  var cos   = document.getElementById("inputCos");

  if (titol == null || titol.length == 0 || /^\s+$/.test(titol)) {
    alert("[ERROR] El camp títol és obligatori i no pot tenir menys de 70 caràcters.");

  }
}
