jQuery(document).ready(function ($) {
    $(".dtooltip").tooltip();
    $('span.menu-toggle').click(function () {
        $('body').toggleClass('menu-open');
    });
    $('.region-navigation').click(function (e) {
        if ($(e.target).hasClass('region-navigation')) {
            $('body').removeClass('menu-open');
        }
        //if(alert($(e.target))
    });
    $('.region-top').hide();
    $('.search-toggle').click(function () {
        $('.region-top').show();
        return false;
    });
    $('.search-close').click(function () {
        $('.region-top').hide();
        return false;
    });
    $('.dexp-fading').each(function () {
        var $this = $(this);
        var $slides = [];
        $this.find('> *').each(function (index) {
            $(this).wrap('<div>');
            $slides[index] = $(this).parent().html();
            $(this).remove();
        });
        var counter = 1;
        $this.html($slides[0]).removeClass('fadeout');
        setInterval(function () {
            $this.addClass('fadeout');
            setTimeout(function () {
                $this.html($slides[counter = (counter + 1) % $slides.length]).removeClass('fadeout');
            }, 500);
        }, 5000);
    });
});

//        Tung added for scroll to top
window.onscroll = function () {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Chrome, Safari and Opera 
    document.documentElement.scrollTop = 0; // For IE and Firefox
}
