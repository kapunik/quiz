<style>
    .alarm {
        animation: timer_alarm <?= $data['question_timer'] ?>s linear;
    }
</style>

<?php
if (!empty($data['question_timer'])){
    echo "<div class='timer mel'>{$data['question_timer']}</div>";
}
?>



<div class="flex-column mel darken-transparent list">
    <?php
    echo "<div class='list_questions'><a href='/game/play/{$data['game_number']}-{$data['round_number']}-info'>I</a></div>";

    $i = 1;

    while($i <= $data['question_count']){
        echo "<div class='list_questions'><a href='/game/play/{$data['game_number']}-{$data['round_number']}-{$i}'>{$i}</a></div>";
        $i++;
    };

    echo "<div class='list_questions'><a href='/game/play/{$data['game_number']}-{$data['round_number']}-result'>R</a></div>";
    ?>
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
        <?php
        $next_question_number = $data['question_number'] + 1;
        $next_question = ($data['question_number'] == $data['question_count']) ? 'result' : $next_question_number;

        echo "<a href='/game/play/{$data['game_number']}-{$data['round_number']}-{$next_question}'>"; ?>
            <button autofocus class="next_question deadline">Следующий вопрос!
            </button>
        </a>
    </div>




</div>
