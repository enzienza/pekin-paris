/*
* Name : menu.js
* Description : menu top transparent, background color au scroll
* Author: Enza Lombardo
* Author URI: www.enzalombardo.be
* copyright : 2019 © Enza Lombardo
* Version : 1.0
*/

(function($) {

    var selectedClass = "";
    $(".fil-cat").click(function(){
        selectedClass = $(this).attr("data-rel");
        $("#portfolio").fadeTo(100, 0.1);
        // $('#portfolio').addClass(theme);
        $("#portfolio div").not("."+selectedClass)
                           .fadeOut()
                           .removeClass('scale-anm');
        setTimeout(function() {
            $("."+selectedClass).fadeIn().addClass('scale-anm');
            $("#portfolio").fadeTo(300, 1);
        }, 300); // end -> setTimeout

    }); // end -> click .fil-cat

})(jQuery);
