$(document).ready(function () {
//Delete the object itself you click
  $('.js-click-remove').click(function () {
    $(this).remove();
  });
  $('.js-click-switch-remove').click(function () {
    link = $(this).attr('href');
    $(link).fadeIn();
    $(this).remove();
    return false;
  });
});
function js_window_maxHeight() {
  $(window).on('load scroll resize', function () {
    var h = window.innerHeight ? window.innerHeight : $(window).height();
    $('.js-window-maxHeight').css('height', h);
  });
}


function js_currentUrl() {
  $(function () {
    var activeUrl = location.pathname.split("/")[2];
    navList = $(".js-currentUrl").find("a");
    navList.each(function () {
      if ($(this).attr("href").split("/")[2] == activeUrl) {
        $(this).addClass("active");
      }
      ;
    });
  });
}


$(function () {
//If you want the window size to the flag
//////////////////////////////////////
  $(window).on('load scroll resize', function () {
    var wid = $(window).width();
    deviceFlug = wid <= 480;


//If you want the user agent to the flag
//////////////////////////////////////
//var ua = navigator.userAgent;
//var deviceFlug = navigator.userAgent.indexOf('iPhone') > 0 && navigator.userAgent.indexOf('iPad') == -1 || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0;



//////////////////////////////////////////////////////////////
//RETINA corresponding to switch the image is for smartphone and for PC
//////////////////////////////////////////////////////////////
    if (deviceFlug) {
//Processing to change the image of and for the _pc for PC smartphone to _sp
      $('.js-device-img-change').each(function () {
        $(this).attr("src", $(this).attr("src").replace('_pc', '_sp'));
      });
      //Half in and displays the image at the time of smartphone (retina support)
      $('.js-device-img-retina').each(function () {
        var imageObj = new Image();
        //Preloading processing of the image
        imageObj.src = $(this).attr('src');
        $(this).on('load', function () {
          width = imageObj.width;
          $(this).attr("width", width / 2);
        });
      });
    }

//////////////////////////////////////////////////////////////
//Replace the image in the text of the alt at the time of smartphone
//////////////////////////////////////////////////////////////
    if (deviceFlug) {
      $(".js-device-text-change").each(function (i) {
        var txt = $("img", this).attr("alt");
        $(this).attr("data-label", txt);
      });
    }

//////////////////////////////////////////////////////////////
//Remove the link of the PC at the phone number.
//////////////////////////////////////////////////////////////
    if (!deviceFlug) {
      var ua = navigator.userAgent;
      if (ua.indexOf('iPhone') < 0 && ua.indexOf('Android') < 0) {
        $('.js-tel-href').each(function () {
          $(this).contents().unwrap();
        });
      }
    }
  });
});




