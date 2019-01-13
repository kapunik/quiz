
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

    <style>
        #<?php echo $data['highlight_menu'];?>{
        color: rgb(245,0,87) !important;
        }
    </style>

    <title>Quiz</title>
</head>
<body>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title"><?php echo $data['title'];?></span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="/admin/create/" title="Новый квиз" id="create_game"><i class="material-icons"> add_circle_outline </i></a>
        <a class="mdl-navigation__link" href="/admin/" title="Кадендарь" id="events"><i class="material-icons"> dashboard </i></a>
        <a class="mdl-navigation__link" href="" title="WTF?!"><i class="material-icons"> help_outline </i></a>
        <a class="mdl-navigation__link" href="/admin/logout/" title="Выход"><i class="material-icons"> exit_to_app </i></a>
      </nav>
    </div>
  </header>

  <main class="mdl-layout__content">
    <div class="page-content">
      <?php include 'application/views/'.$content_view; ?>
    </div>
  </main>
</div>

</body>
</html>
