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
        $("#content-emporter").fadeTo(100, 0.1);
        // $('#content-emporter').addClass(theme);
        $("#content-emporter > div").not("."+selectedClass)
                           .fadeOut()
                           .find('diw.row').removeClass('scale-anm');
        setTimeout(function() {
            $("."+selectedClass).fadeIn().addClass('div.scale-anm');
            $("#content-emporter").fadeTo(300, 1);
        }, 300); // end -> setTimeout

    }); // end -> click .fil-cat

})(jQuery);
