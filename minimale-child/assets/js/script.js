
(function($){
  $(document).ready(function(){
    $('#hamburger-button').click(function(){
      $(this).toggleClass('open');
      $('#main-menu').slideToggle('fast');
    });
  });
})(jQuery);


