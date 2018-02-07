/*********************************************************************** "ÍNDEX"
Iniciar els components de plugins que estiguem emprant.

# Twitter Bootstrap
## Tooltips
# Editor de text
## Summernote
*******************************************************************************/
$(function () {
  /*
  # Twitter Bootstrap
  --------------------------------------------------------------------------- */
  /*
  ## Tooltips
  --------------------------------------------------------------------------- */
  $('[data-toggle="tooltip"]').tooltip()


  /*
  # Editor de text
  --------------------------------------------------------------------------- */
  /*
  ## Summernote
  --------------------------------------------------------------------------- */
  $('textarea#summernote').summernote({
    placeholder: 'Començar a publicar a eShared',
    tabsize: 2,
    height: 350,
    lang: 'ca-ES'
  });

});
