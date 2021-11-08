$(function(){

    const prod_link = $('.product_link_id');

    $.each(prod_link, function(){
         $(this).bind('click', function(){
            let current_id = $(this).attr('data-id');
         });
    });

});