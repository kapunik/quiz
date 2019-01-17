$(document).ready(function() {

  $('#roundStart').on('click', function() {

    $.ajax({
      type: 'post',
      url: "templates/question_with_four_answers.php", //Путь к обработчику
      data: ' ',
      response: 'text',
      success: function(data) {
        $(".main").html(data); //Выводим полученые данные в списке
      }
    });

  });

  $('#btn_hide_aside').on('click', function() {
    $('.aside').toggleClass('flatten');
    // $('.aside').slideToggle();
    $('#btn_hide_aside').toggleClass('rotate180');
  });


  function timer_start(sec) {
    $('.timer').addClass('alarm');

    var start = sec;

    var timerId = setInterval(function() {
      start = start - 1;
      $('.timer').html(start);
    }, 1000);

    var stop = sec * 1000;

    setTimeout(function() {
      clearInterval(timerId);
        $('.timer').addClass('spartak');
    }, stop);

  }

  $('.timer').on('click', function() {
    timer_start(30);
  });

});
