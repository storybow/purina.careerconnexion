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
  $('.somePositions').hide();
  $('.noPositions').hide();
  $('.connecting').hide();
  $('select').change(function() {
    var gradValue = $('#gradDate :selected').val();
    var majorValue = $('#major :selected').val();
    bothValues = '.' + gradValue + '.' + majorValue;
  });
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





























