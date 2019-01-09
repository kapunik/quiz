
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--  иконки -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/icons/favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" href="/img/icons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!--  материал стили и скрипты-->
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/plugins/mdl/material.css">
    <script src="/plugins/mdl/material.js" charset="utf-8"></script>
    <script src="/js/jquery-3.3.1.min.js" charset="utf-8"></script>

    <!--  наши стили и скрипты -->
    <link rel="stylesheet" href="/css/admin.css?a=<?php echo time(); ?>">
    <script src="/js/admin.js?a=<?php echo time(); ?>" charset="utf-8"></script>


    <title>Авторизация</title>
		<style>
			form{
				display: flex;
				flex-direction: column;
				max-width: 300px;
				width: 300px;
				margin:auto;

			}
		</style>
</head>
<body>
<main>
    <div class="page-content">

				<form action="" method="post">

				<h2>Авторизация</h2>

						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					    <input class="mdl-textfield__input" type="text" id="login" name="login">
					    <label class="mdl-textfield__label" for="login">Логин</label>
  					</div>

						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="password" id="password" name="password">
							<label class="mdl-textfield__label" for="password">Пароль</label>
						</div>


					<input type="submit" value="Войти" name="btn"  class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">

				</form>
    </div>
  </main>


</body>
</html>






<?php extract($data); ?>
<?php if($login_status=="access_granted") { ?>
<p style="color:green">Авторизация прошла успешно.</p>
<?php } elseif($login_status=="access_denied") { ?>
<p style="color:red">Логин и/или пароль введены неверно.</p>
<?php } ?>
