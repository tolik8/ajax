$(document).ready(function() {

$('.getInfo').click(function() {

    var $login = $('#login').text();
    var $n = (this).id.substr(7);
    
    var request = $.ajax({
        url: "ajax/get_phone.php",
        method: "POST",
        cache: false,
        data: {login: $login, n: $n}
    });
    
    request.done(function(msg){
        $('#tel_' + $n).html(msg);
        $('#getTel_' + $n).attr('class', 'hide');
    });

    request.fail(function(jqXHR, textStatus) {
        alert("Request failed: " + textStatus);
    });
});

});