$(document).ready(function () {
    $(window).scroll(function () {
        // sticky navbar on scroll script
        if (this.scrollY > 20) {
            $('.navbar').addClass("sticky");

            $('#information').addClass('hitam');
            $('#information').removeClass('light');

            
        } else {
            $('.navbar').removeClass("sticky");

            $('#information').addClass('light');
            $('#information').removeClass('hitam');

            
        }

        // scroll-up button show/hide script
        if (this.scrollY > 500) {
            $('.scroll-up-btn').addClass("show");
        } else {
            $('.scroll-up-btn').removeClass("show");
        }
    });
});