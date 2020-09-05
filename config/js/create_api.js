
$("#api-form").submit(function(){
    
    event.preventDefault();
    var email = $('#email').val();
    $.ajax({
        'method': 'POST',
        'url': "config/create_api.php",
        'data':{'email': email , 'origin':true },
        success:function(data){
            document.getElementById('api-holder').innerHTML = "<h4>" 
            + data + "<i>       -Copy API or it will be lost.</i> </h4>";
        }
    });
})
