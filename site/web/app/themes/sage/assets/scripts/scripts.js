// Blog remove sidebar
$( document ).ready(function() {
    if ($('body').hasClass('blog')){
        $('body').removeClass('sidebar-primary');
        $('.sidebar').addClass('hidden');
    }

    if ($('body').hasClass('single')){
        console.log('has class is true');
        var mainTitle = $('.sidebar > h5 > a').text();
        var sidebarTitle = $('.main > h2').text();

        jQuery.each(sidebarTitle, function (i, val){
            console.log('Hello:' + i + sidebarTitle + val + mainTitle);
        });

        if (mainTitle === sidebarTitle){
            console.log('names');
            console.log(mainTitle);
        }
    }
});

$(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});