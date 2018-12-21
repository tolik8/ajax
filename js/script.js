$(document).ready(function() {

$('.getInfo').click(function() {

    var $login = $('#login').text();
    var $n = (this).id.substr(7);
    var $random = Math.random();
    
    $.ajax({
        method: "POST",
        url: "ajax/get_phone.php",
        data: {login: $login, n: $n, random: $random}
    }).done(function(msg){
        $('#tel_' + $n).html(msg);
        $('#getTel_' + $n).attr('class', 'hide');
    });

});

});