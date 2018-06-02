function imgSetHeights(){
    var bigestHeight;
    $.each($('.img-wrap img'), function(){
        if($(this).outerHeight() > bigestHeight){
            bigestHeight = $(this).outerHeight();
        }
    });
    $.each($('.photo-wrap'), function(){
        $(this).css('height', (bigestHeight + 40) + 'px');
    });

}
$(window).load( imgSetHeights());