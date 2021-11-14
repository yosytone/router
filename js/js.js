// JavaScript Document


$("#formIMG").submit(function(event){			  
    event.preventDefault();				
    $.ajax({
        type: 'POST',
        url: '../handler.php',
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false			
    });	
// удаляем значения инпутов
$("#title").val('');
$("#pics").val('');
$("#text").val('');

});