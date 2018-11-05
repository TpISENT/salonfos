(function ($, Drupal, drupalSettings) {
  Drupal.behaviors.mtOwlCarouselPostsSlider = {
    attach: function (context, settings) {
      $(context).find('.mt-slider-posts').once('mtOwlCarouselPostsSliderInit').each(function() {
        $(this).owlCarousel({
          items: 1,
          autoplay: drupalSettings.salonfos.owlCarouselPostsSliderInit.owlPostsSliderAutoPlay,
          autoplayTimeout: drupalSettings.salonfos.owlCarouselPostsSliderInit.owlPostsSliderEffectTime,
          nav: true,
          dots: false,
          loop: true,
          navText: false
        });
      })
    }
  };
})(jQuery, Drupal, drupalSettings);