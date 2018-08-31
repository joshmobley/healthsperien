$('.card__content').click(function() {
    $(this).siblings('.card__modal').addClass('card__modal--active');

    $('.card__modal--active .card__modal-bg, .card__close').click(function() {
        $('.card__modal--active').removeClass('card__modal--active');
        $(this).unbind('click');
    });
});


$('.tabs__link').click(function() {
    $('.tabs__link.is-active').removeClass('is-active');
    $(this).addClass('is-active');

    var child = $(this).data('child');

    $('.tabs__content.is-active').removeClass('is-active');
    $('#' + child).addClass('is-active');
})
