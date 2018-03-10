/*********************************************************************** "ÍNDEX"
Iniciar els components de plugins que estiguem emprant.

# Twitter Bootstrap
## Tooltips
# Editor de text
## Summernote
*******************************************************************************/
$(function() {
  /*
  # Twitter Bootstrap
  --------------------------------------------------------------------------- */
  /*
  ## Tooltips
  --------------------------------------------------------------------------- */
  $('[data-toggle="tooltip"]').tooltip()
  $('[data-tooltip="tooltip"]').tooltip()


  /*
  # Editor de text
  --------------------------------------------------------------------------- */
  /*
  ## Summernote
  --------------------------------------------------------------------------- */

  $('#addStar').change('.star', function(e) {
    $(this).submit();
  });

});