// Blog remove sidebar
$( document ).ready(function() {
    if ($('body').hasClass('blog')){
        $('body').removeClass('sidebar-primary');
        $('.sidebar').addClass('hidden');
    }
});