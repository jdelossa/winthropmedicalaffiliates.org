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
    $('.navbar-static-top > a[href*="#"]:not([href="#"])').click(function() {
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

$(function() {
    var num_cols = 2,
        container = $('.pagination'),
        listItem = 'li',
        listClass = 'sub-list';

    container.each(function() {
        var items_per_col = new Array(),
            items = $(this).find(listItem),
            min_items_per_col = Math.floor(items.length / num_cols),
            difference = items.length - (min_items_per_col * num_cols);
        for (var i = 0; i < num_cols; i++) {
            if (i < difference) {
                items_per_col[i] = min_items_per_col + 1;
            } else {
                items_per_col[i] = min_items_per_col;
            }
        }
        for (var i = 0; i < num_cols; i++) {
            $(this).append($('<ul ></ul>').addClass(listClass));
            for (var j = 0; j < items_per_col[i]; j++) {
                var pointer = 0;
                for (var k = 0; k < i; k++) {
                    pointer += items_per_col[k];
                }
                $(this).find('.' + listClass).last().append(items[j + pointer]);
            }
        }
    });
});