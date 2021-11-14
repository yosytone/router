$(function(){

    const prod_link = $('.product_link_id');
    const cart_value = $("#cart_count");

    $.each(prod_link, function(){
         $(this).bind('click', function(){
            let current_id = $(this).attr('data-id');

            $.post("../config/api.php", {"prod_id": current_id})
            .done(function(data) {
                cart_value.html(data);
            });
         });
    });

});