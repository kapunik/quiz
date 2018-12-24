$(document).ready(function() {

$('#roundStart').on('click', function(){

  $.ajax({
  	            type: 'post',
  	            url: "templates/question_with_four_answers.php", //Путь к обработчику
  	            data: ' ',
  	            response: 'text',
  	            success: function(data){
  	                $(".main").html(data); //Выводим полученые данные в списке
  	           }
  	       });

});

$('#btn_hide_aside').on('click', function(){
  $('.aside').toggleClass('flatten');
  // $('.aside').slideToggle();
  $('#btn_hide_aside').toggleClass('rotate180');
});

});
