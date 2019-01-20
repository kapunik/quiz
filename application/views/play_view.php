<?php
if (!empty($data['question_timer'])){
    echo "<div class='timer mel'> {$data['question_timer']}</div>";
}
?>



<div class="flex-column mel darken-transparent list">
  <div class="list_questions">1</div>
  <div class="list_questions">2</div>
  <div class="list_questions">3</div>
  <div class="list_questions">4</div>
  <div class="list_questions">5</div>
  <div class="list_questions">6</div>
  <div class="list_questions">7</div>
  <div class="list_questions">8</div>
  <div class="list_questions">9</div>
  <div class="list_questions">10</div>
</div>
<div class="flex-column mel darken-transparent" style="width: 100%">
<h1 class="star-gold">ИГРА <?= $data['game_number'] ?> РАУНД <?= $data['round_number'] ?> ВОПРОС <?= $data['question_number'] ?></h1>
<section class="description">
    <?= $data['description'] ?>
</section>

<section class="answers flex_wrap">
    <?php
    if(!empty($data['question_answers'])){
        foreach ($data['question_answers'] as $answer){
            echo "<div class='answer'> <span class='star-silver'>{$answer['number']}. </span> {$answer['description']}</div>";
        };
    }
    ?>
</section>

    <div class="deadline">
        <a href="/game/play/1-1-2">
            <button autofocus class="next_question deadline">Следующий вопрос!
            </button>
        </a>
    </div>




</div>
