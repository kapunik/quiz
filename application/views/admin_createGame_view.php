<div class="create_game_layout mdl-tabs mdl-js-tabs">
<section class="aside_menu mdl-tabs__tab-bar">

    <a href="#starks-panel" class="mdl-tabs__tab is-active mdl-button mdl-js-button mdl-button--fab mdl-button--colored" id="game_main_setting_button">
        <i class="material-icons"> assignment </i>
    </a>
    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="game_main_setting_button">Основные параметры</div>

    <a href="#lannisters-panel" class="mdl-tabs__tab mdl-button mdl-js-button mdl-button--fab" id="add_round_button">
        <i class="material-icons">add</i>
    </a>
    <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="add_round_button">Добавить раунд</div>
</section>
<section class="game_main_setting mdl-tabs__panel is-active" id="starks-panel">
        <div class='docs-text-styling component-title'>
          <h3>Игра номер <?= $data['game_number']?></h3>
          <p>Сейчас нужно будет указать имя <s>Валдисфельшера</s> Автора, и дату проведения Викторины.</p> <p>Указывайте, пожалуйста:</p>
        </div>

  
        <form action='' method='post'>

            <div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label'>
                <input class='mdl-textfield__input' type='text' id='author' name='author'>
                <label class='mdl-textfield__label' for='login'>Автор</label>
            </div>

            <div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label'>
                <input class='mdl-textfield__input' type='date' id='date' name='date'>
                <label class='mdl-textfield__label' for='login'></label>
            </div>



		    <input type='submit' value='Сохранить' name='btn'  class='mdl-button mdl-js-button mdl-button--raised'>

		</form>
</section>

    <section class="mdl-tabs__panel" id="lannisters-panel">
        ssss
    </section>
</div>
