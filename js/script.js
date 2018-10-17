$(document).ready(function() {

$('.getInfo').click(function() {
  var login = $('#login').text();
  var n = (this).id.substr(7);
  var rnd = Math.random();

  $.post('ajax/get_phone.php', {login:login, n:n, rnd:rnd}, function(data) {
    $('#tel_'+n).html(data);
    $('#getTel_'+n).attr('class', 'hide');
  });
});

});