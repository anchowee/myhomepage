/*
  ___  __  __   ___ __  __   ___   __    __  ____  ____
 // \\ ||\ ||  //   ||  ||  // \\  ||    || ||    ||   
 ||=|| ||\\|| ((    ||==|| ((   )) \\ /\ // ||==  ||== 
 || || || \||  \\__ ||  ||  \\_//   \V/\V/  ||___ ||___
*/
$(document).ready(function(){
$("#so360_keyword").attr("x-webkit-speech","");
$("#so360_keyword").attr("lang","zh-CN");
$(window).resize(function() {
var width = $(window).width();
// width:1500 900 600 500
if( width >=960)
{
$("div.aside").show();
$("#content").css("margin-left","0%");
$("span.label.label-info").show();
$("nav.navbar.navbar-inverse").css("font-size","100%");
}
else if(width <=600)
{
$("div.aside").hide();
$("span.label.label-info").hide();
$("nav.navbar.navbar-inverse").css("font-size","0.7em");
$("#content").css("margin-left","18%");
}
else
{
$("span.label.label-info").hide();
$("div.aside").hide();
$("#content").css("margin-left","18%");
}
});
});
//rotate code
(function ($) {

	$.fn.extend({
		rotate: function (deg) {

			// cache dom element
			var $this = $(this);

			// make deg random if not set
			if (deg === null) {
				deg = Math.floor(Math.random() * 359);
			}

			// rotate dom element
			$this.css({
				'-webkit-transform': 'rotate(' + deg + 'deg)',
				'-moz-transform': 'rotate(' + deg + 'deg)',
				'-ms-transform': 'rotate(' + deg + 'deg)',
				'-o-transform': 'rotate(' + deg + 'deg)',
				'transform': 'rotate(' + deg + 'deg)'
			});

			// make chainable
			return $this;
		}
	});

})(jQuery);
//img.img-circle
//$(document).ready(function()
//{
//$('#rota').rotate();
//}
//)