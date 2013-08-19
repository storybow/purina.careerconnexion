  /* REPLACE ALIGN */
function replaceAlign() {
  if (!document.getElementsByTagName('img')) return false;
  $('img[align="left"]').addClass('left').removeAttr('align');
	$('img[align="right"]').addClass('right').removeAttr('align');
	$('img[align="middle"]').addClass('middle').removeAttr('align');
}
  /* REPLEACE TARGET ATTRIBUTE WITH CLASS */
function replaceTarget() {
  if (!document.getElementsByTagName('a')) return false;
  $('a[target]').addClass('newwindow').removeAttr('target');
}
  /* WEB STANDARDS POPUPS */
function strictNewWindow() {
  if (!document.getElementsByTagName('a')) return false;
  $('a.newwindow').click(function() {
		window.open($(this).attr('href'));
    return false;
	});
}

function connexion() {
  var connecting = $('.connecting');
  var somePositions = $('.somePositions');
  var noPositions = $('.noPositions');

  // run this when the select is changed (an option is selected)
  $('select').change(function() {
    var gradValue = $('#gradDate :selected').val();
    var majorValue = $('#major :selected').val();
    window.majorClass = '.' + majorValue;
    window.bothValues = '.' + gradValue + '.' + majorValue; // would output something like .f2.accounting
  });

  // run this when the connectMe button is clicked
  $('.double-filter .connectMe').click(function() {

    // fade out the connect me button, fade in the connecting button, fade out the connecting button, fade in the connect me button
    $(this).fadeOut();
    connecting.delay(300).fadeIn(300);
    connecting.delay(2000).fadeOut(300);
    $(this).delay(2000).fadeIn(300);

    /* scroll to the positions
    $('body,html').animate({
      scrollTop: 500
    }, 800);
    */

    // fade these out in case a user is running two searches in a row
    somePositions.slideUp();
    noPositions.slideUp();
    
    // this simply creates a slide up and fade out effect for window dressing when you start a new search
    $('.aResult').animate({
      opacity: 0,
      top: '-30px'
    });

    // but then we actually need to fade it out so that is has a display of none
    $('.aResult').fadeOut();

    $('#results').delay(1900).slideDown();

    // fade in all li's that have the classes we selected (but it still has opacity of 0 from above so we don't see it)
    $('li' + window.bothValues).fadeIn();

    // no we can make the opacity 1 to fade into view and slide down 
    $(window.bothValues).delay(1500).animate({
      opacity: 1,
      top: '0'
    });
    
    // this is where the magic happens
    // we want to know if any of the li's have the classes the user selected, so we check each one, and if the length is greater than 1, meaning there is a result, then we show the success message
    if ($('#results li' + window.bothValues).length > 0){
      // show this message if any of the li's have this class
      somePositions.delay(2000).fadeIn();
    } else {
      // show this message none of the li's have this class
      noPositions.delay(2000).slideDown();
    }
  });
}



//************************************************************************************************************************//
//************************************************** LOAD ALL FUNCTIONS **************************************************//
//************************************************************************************************************************//
$(document).ready(function(){
  replaceAlign();
  replaceTarget();
  strictNewWindow();
  connexion();
});





























