(function ($) {

  Drupal.behaviors.colorBox = {
    attach: function() {
        $('a.lightbox').colorbox({maxWidth: '90%', scalePhotos: true});
    }
  };  
  
  Drupal.behaviors.cycleImages = {
    attach: function() {
        // Preload the thumbnails
        for(var i in brochureLarge) {
            jQuery.preLoadImages(brochureLarge[i]);
        }
        for(var i in brochureThumbnails) {
            jQuery.preLoadImages(brochureThumbnails[i]);
        }
    }
  };

  var cache = [];
  // Arguments are image paths relative to the current page.
  $.preLoadImages = function() {
    var args_len = arguments.length;
    for (var i = args_len; i--;) {
      var cacheImage = document.createElement('img');
      cacheImage.src = arguments[i];
      cache.push(cacheImage);
    }
  }
  
   $.cycleImages = function() {
      imageCounter++;
      if (imageCounter == brochureLarge.length) {
         imageCounter = 0;
      }
    
      var counter = 0;
      $('#main-images img').each(function(index) {
         if (counter == 0) {
            $(this).attr("src", brochureLarge[imageCounter]);
         } else {
            var i = imageCounter + counter;
            if (i >= brochureLarge.length) {
                i = i - brochureLarge.length;
            }
            $(this).attr("src", brochureThumbnails[i]);
         }
         counter++;
      });
      
      counter = 0;
      $('#main-images a').each(function(index) {
         if (counter == 0) {
            $(this).attr("href", brochureLink[imageCounter]);
         } else {
            var i = imageCounter + counter;
            if (i >= brochureLarge.length) {
                i = i - brochureLarge.length;
            }
            $(this).attr("href", brochureLink[i]);
         }
         counter++;
      });    
      setTimeout("jQuery.cycleImages()", 20000);  
   }
})(jQuery);

var brochureLarge = new Array();
var brochureThumbnails = new Array();
var brochureLink = new Array();
var imageCounter = 0;

setTimeout("jQuery.cycleImages()", 20000); 
