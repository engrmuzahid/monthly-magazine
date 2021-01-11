(function($) {

    $(document).ready(function () {
        $(window).on('scroll', function () {
            var scroll = $(window).scrollTop();
            if (scroll > 40) {
                $(".hedar-baner-section").addClass("fixed-top");
            } else {
                $(".hedar-baner-section").removeClass("fixed-top");
            }
        });

        /*main search bar*/
        // $('.search-btn').on('click',function () {
        //     $('.main-search-form').css("display", "block");
        //     $('.header-baner').css("display", "none");
        // });
        
    

    });

})( jQuery );

function openNav() {

    document.getElementById("Sidenav_mobile_menu").style.width = "250px";

}



function closeNav() {

    document.getElementById("Sidenav_mobile_menu").style.width = "0";

}



jQuery(document).ready(function($){

	/* Scroll Up JS*/

    $('.scroll-to-up').fadeOut();



    $(window).scroll(function () {

        if ($(this).scrollTop() > 200) {

            $('.scroll-to-up').fadeIn();

        } else {

            $('.scroll-to-up').fadeOut();

        }

    });



    $('.scroll-to-up').on('click', function () {

        $("html, body").animate({

            scrollTop: 0

        }, 800);

        return false;

    });





    $('#slicknav_menu').slicknav({

        prependTo:'#responsive_menu'

    });

    

});







