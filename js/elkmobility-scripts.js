jQuery(document).ready(function($){

  //testimonials slider
  if(typeof $.fn.lightSlider == 'function'){
    $('#hp-testimonials').lightSlider({
      item:1,
      loop:true,
      pager:false,
      gallery:false,
      auto:true,
      pauseOnHover:true,
      keyPress:true,
      adaptiveHeight:true,
      //prevHtml:'',
      //nextHtml:''
    });
  }

});