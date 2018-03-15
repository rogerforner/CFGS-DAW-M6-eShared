/*********************************************************************** "ÍNDEX"
Iniciar els components de plugins que estiguem emprant.

# Twitter Bootstrap
## Tooltips
# Estrelles
# Efecte escroll en àncores
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
  # Estrelles
  --------------------------------------------------------------------------- */
  $('#addStar').change('.star', function(e) {
    $(this).submit();
  });

  /*
  # Efecte escroll en àncores
  --------------------------------------------------------------------------- */
  $(document).on('click', 'a[href^="#"]', function(event) {
    event.preventDefault();

    $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
  });
});