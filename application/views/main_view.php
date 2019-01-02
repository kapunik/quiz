<section class="hello">
    <h1>Quiz for Beer&Beard Bar</h1>


    <div class="games_list">
        <?php
            foreach ($data as $game){
               echo "<div>{$game['number']}</div>";
               echo "<div>{$game['date']}</div>";
            }
        ?>
    </div>
</section>

