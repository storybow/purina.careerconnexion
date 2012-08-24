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

  // A little preliminary work
  $('.somePositions').hide(); // here we hide the congratulations text that is displayed after a match is made
  $('.noPositions').hide(); // here we hide the sorry message that is displayed if there is no match
  $('.connecting').hide(); // this hides the connecting button which is shown for a couple seconds while a match is being formulated

  // User selects their info and we save the values in variables
  $('select').change(function() { // change triggers when the user changes the selected item
    var gradValue = $('#gradDate :selected').val(); // we set a variable called gradValue equal to the value of the option selected in the select element
    var majorValue = $('#major :selected').val(); // we do the same for the Major select element
    bothValues = '.' + gradValue + '.' + majorValue; // we then concatenate these values and place it in a new variable called bothValues
  });

  // This is where we output a match, or if there is no match, a sorry message
  $('.connectMe').click(function() {
      $('body,html').animate({
				scrollTop: 500
			}, 800);
      $('.somePositions').fadeOut();
      $('.noPositions').fadeOut();
      $('.aResult').animate({
        opacity: 0,
        top: '-30px'
      });
      $('.aResult').fadeOut();
      $('.connecting').fadeIn();
      $('.connecting').delay(2000).fadeOut();
      $('p.' + bothValues).fadeIn();
      $(bothValues).delay(1500).animate({
        opacity: 1,
        top: '0'
      });
      $(bothValues + ' a').css('cursor','pointer');
      
      if ($('#results p' + bothValues).length > 0){
        $('.somePositions').delay(2000).fadeIn();
      } else {
        $('.noPositions').delay(2000).fadeIn();
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





























