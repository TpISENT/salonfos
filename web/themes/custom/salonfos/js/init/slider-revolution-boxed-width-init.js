(function ($, Drupal, drupalSettings) {
  Drupal.behaviors.mtSliderRevolutionBoxedWidth = {
    attach: function (context, settings) {

      if (drupalSettings.salonfos.sliderRevolutionBoxedWidthInit.slideshowBoxedWidthNavigationStyle == "bullets") {
        var bulletsEnable = true,
        tabsEnable = false;
        thumbsEnable = false;
      } else if (drupalSettings.salonfos.sliderRevolutionBoxedWidthInit.slideshowBoxedWidthNavigationStyle == "titles_carousel") {
        var tabsEnable = true,
        bulletsEnable = false;
        thumbsEnable = false;
      } else {
        var tabsEnable = false,
        bulletsEnable = false;
        thumbsEnable = true;
      }

      $(context).find('.slideshow-boxedwidth .slider-revolution').once('mtSliderRevolutionBoxedWidthInit').revolution({
        sliderType:"standard",
        sliderLayout: "auto",
        gridwidth: [1140,970,750,450],
        gridheight: drupalSettings.salonfos.sliderRevolutionBoxedWidthInit.slideshowBoxedWidthInitialHeight,
        delay: drupalSettings.salonfos.sliderRevolutionBoxedWidthInit.slideshowBoxedWidthEffectTime,
        disableProgressBar:'off',
        responsiveLevels:[1199,991,767,480],
        navigation: {
          onHoverStop:"off",
          arrows:{
            enable:true,
            tmp: "",
            left:{
              h_align:"left",
              v_align:"top",
              h_offset:50,
              v_offset:40
            },
            right:{
              h_align:"left",
              v_align:"top",
              h_offset:120,
              v_offset:40
            }
          },
          bullets:{
            style:"",
            enable:bulletsEnable,
            direction:"horizontal",
            space: 5,
            h_align: drupalSettings.salonfos.sliderRevolutionBoxedWidthInit.slideshowBoxedWidthBulletsPosition,
            v_align:"bottom",
            h_offset: 0,
            v_offset: 20,
            tmp:"",
          },
          thumbnails: {
            style:"",
            enable:thumbsEnable,
            width:370,
            height:95,
            min_width:240,
            tmp:'<div class="tp-thumb-content"><span class="tp-thumb-title">{{title}}</span></div><div class="tp-thumb-image"><span class="tp-thumb-img-wrap">  <span class="tp-thumb-image"></span></span></div>',
            visibleAmount:5,
            wrapper_padding:70,
            wrapper_color:"transparent",
            hide_onmobile:true,
            hide_onleave:false,
            direction:"vertical",
            span:true,
            position:"inner-right",
            space:20,
            h_align:"right",
            v_align:"top",
            h_offset:0,
            v_offset:0
          },
          tabs: {
            style:"",
            enable:tabsEnable,
            width:410,
            height:95,
            min_width:240,
            wrapper_padding: 0,
            wrapper_opacity:"1",
            tmp:'<div class="tp-tab-content"><span class="tp-tab-title">{{title}}</span></div>',
            visibleAmount: 6,
            hide_onmobile: false,
            hide_onleave: false,
            direction:"horizontal",
            span: true,
            position:"outer-bottom",
            space:0,
            h_align:"left",
            v_align:"bottom",
            h_offset:0,
            v_offset:0
          },
          touch:{
            touchenabled: drupalSettings.salonfos.sliderRevolutionBoxedWidthInit.slideshowBoxedWidthTouchSwipe,
            swipe_treshold:75,
            swipe_min_touches:1,
            drag_block_vertical:false,
            swipe_direction:"horizontal"
          }
        }
      });

      $(context).find('.slideshow-boxedwidth .slider-revolution').once('mtSliderRevolutionBoxedWidthFade').bind("revolution.slide.onloaded",function (e) {
        $(context).find('.slider-revolution-wrapper:not(.one-slide) .tparrows').fadeIn("slow");
      });
      $(context).find('.transparent-background').once('mtSliderRevolutionBoxedWidthBG').css("backgroundColor", "rgba(0,0,0," + drupalSettings.salonfos.slideshowCaptionOpacity + ")");

    }
  };
})(jQuery, Drupal, drupalSettings);
