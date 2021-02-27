
/*================ ON SCROLL FIX SIDE MENU =======================*/
 
$(function() {

    $(window).bind('scroll', function () {
        var windowScrollHeight = $(window).scrollTop()
        var scrollPlusWindowHeight = $(window).scrollTop() + $(window).height();
    var fixedContentHeight = $(".fixed-content").height();
    if(scrollPlusWindowHeight > fixedContentHeight){
        $(".fixed-content").addClass("fixed");
     }else{
        $(".fixed-content").removeClass("fixed");
     }
   });
});
$(function() {
  function openNav() {
    document.getElementById("mySidenav").style.width = "22rem";
    document.getElementById("main").style.marginRight = "22rem";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginRight = "0";
  }
});

/*========= ON CLICK BUTTON SCROLL TO TOP WITH ANIMATION ==========*/

$(document).ready(function () {
  $(window).scroll(function () {
    var top =  $(".goto-top");
        if ( $('body').height() <= (    $(window).height() + $(window).scrollTop() + 200 )) {
  top.animate({"margin-left": "0px"},1500);
        } else {
            top.animate({"margin-left": "-100%"},1500);
        }
    });

    $(".goto-top").on('click', function () {
        $("html, body").animate({scrollTop: 0}, 400);
    });
});

/*================ ON SCROLL HIDE BUTTON =======================*/

$(function() {
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos < currentScrollPos) {
    document.getElementById("goto-top").style.bottom = "0";
  } else {
    document.getElementById("goto-top").style.bottom = "-50px";
  }
  prevScrollpos = currentScrollPos;
}
});

/*================ ON TEXT INPUT FIELD EXPAND =======================*/
$(document).ready(function () {
 var autoExpand = function(field) {

  // Reset field height
  field.style.height = 'inherit';

  // Get the computed styles for the element
  var computed = window.getComputedStyle(field);

  // Calculate the height
  var height = parseInt(computed.getPropertyValue('border-top-width'), 10) +
    parseInt(computed.getPropertyValue('padding-top'), 10) +
    field.scrollHeight +
    parseInt(computed.getPropertyValue('padding-bottom'), 10) +
    parseInt(computed.getPropertyValue('border-bottom-width'), 10);

  field.style.height = height + 'px';

};

document.addEventListener('input', function(event) {
  if (event.target.tagName.toLowerCase() !== 'textarea') return;
  autoExpand(event.target);
}, false);
});
