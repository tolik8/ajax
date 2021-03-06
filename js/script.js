$(document).ready(function() {

$('.getInfo').click(function() {

    let $login = $('#login').text();
    let $n = (this).id.substr(7);
    
    let request = $.ajax({
        url: "ajax/get_phone.php",
        method: "POST",
        cache: false,
        data: {login: $login, n: $n},
        dataType: "json",
        beforeSend: function() {
            $('#tel_' + $n).html('Loading ...');
        }
    });
    
    request.done(function(msg){
        $('#tel_' + $n).html(msg.phone);
        $('#getTel_' + $n).attr('class', 'hide');
    });

    request.fail(function(jqXHR, textStatus) {
        alert("Request failed: " + textStatus);
    });
});

});