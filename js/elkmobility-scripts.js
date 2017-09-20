jQuery(document).ready(function($){

  //hp-hero scroll down
  $('#scrollDown').on('click', function (e) {
    e.preventDefault;
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 57
        }, 1000);
        return false;
      }
    }
  });  

  //testimonials slider
  if(typeof $.fn.lightSlider == 'function'){
    var testimonialSlider = $('#testimonialSlider').lightSlider({
      item:1,
      loop:true,
      pager:false,
      controls:false,
      gallery:false,
      auto:true,
      pauseOnHover:true,
      keyPress:true,
      adaptiveHeight:true,
      pause:4000,
      prevHtml:'',
      nextHtml:''
    });
    $('#goToPrevSlide').on('click', function(e){
      e.preventDefault();
      testimonialSlider.goToPrevSlide();
    });
    $('#goToNextSlide').on('click', function(e){
      e.preventDefault();
      testimonialSlider.goToNextSlide();
    });
  }

});