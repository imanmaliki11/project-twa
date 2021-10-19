// change navbar color when scroll
$(function () {
    $(document).scroll(function () {
        var $navbar = $('.navbar');
        $navbar.toggleClass('scrolled', $(this).scrollTop() > $navbar.height());
    })
})