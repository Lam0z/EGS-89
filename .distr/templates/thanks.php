<?php
$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
$BASE_HREF = '//' . $_SERVER['HTTP_HOST'] . (!empty($_SERVER['DOCUMENT_URI']) ? str_replace( substr(str_replace('index.php', '', $_SERVER['DOCUMENT_URI']), 1), '', $_SERVER['REQUEST_URI'] ) : '');
$URL = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$version = isset($_GET['version']) ? urldecode( strtolower($_GET['version']) ) : '';
$partner = isset($_GET['partner']) ? urldecode( strtolower($_GET['partner']) ) : '';
$lang = $get_lang = isset($_GET['lang']) && $_GET['lang'] != '' ? urldecode(strtolower($_GET['lang'])) : 'ru';
include_once $ROOT . 'version.php';
include_once $ROOT . 'chunks/translation.php';
include_once $ROOT . 'chunks/common.php';
include_once $ROOT . 'config.php';
include_once $ROOT . 'elastic.php';
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">

<head>
  <base href="<?=$BASE_HREF?>">

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-KKFVSMP');</script>
  <!-- End Google Tag Manager -->

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  {% block meta %}
  {% endblock %}
  
  <meta name="description" content="<?=$descr?>">
  <meta name="application-name" content="<?=$title?>">
  <meta name="robots" content="index, follow">
  <title><?=$title?></title>


  <meta property="og:title" content="<?=$title?>">
  <meta property="og:description" content="<?=$descr?>">
  <meta property="og:url" content="https://<?=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">

  <!-- <link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="icon">
  <link href="//synergy.ru/img/favicon.ico" type="image/x-icon" rel="shortcut icon"> -->

  <link rel="apple-touch-icon" sizes="180x180" href="img/common/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/common/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/common/favicon-16x16.png">

	<link rel="stylesheet" href="https://cdn.synergy.ru/libs/bootstrap/bootstrap-4.5.2.min.css">
  <link rel="stylesheet" href="https://cdn.synergy.ru/libs/fancybox/jquery.fancybox-3.5.7.min.css" />
  <link rel="stylesheet" href="https://cdn.synergy.ru/libs/swiper/swiper-5.4.5.min.css" />

  {% block styles %}
  <link rel="stylesheet" href="css/thanks.style.css">
  <link rel="stylesheet" href="css/thanks.responsive.css">
  {% endblock %}

	<link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="icon">
	<link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="shortcut icon">

</head>



<body class="<?= $version ? 'version-' . $version : '' ?>" id="body">

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KKFVSMP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->


  {% import 'form/macro.php' as form %}

  <div class="wrapper">
    {% block blocks %}
    {% endblock %}

    <section class="popups" hidden>
			{% block popups %}
			{% endblock %}
		</section>

    <a href="http://sydi.ru" style="display: none">Synergy Digital</a>

  </div><!-- wrapper -->



  <script src="https://cdn.synergy.ru/libs/jquery/jquery-3.4.1.js"></script>
  <script src="https://cdn.synergy.ru/libs/fancybox/jquery.fancybox-3.5.7.min.js"></script>
  <script src="https://cdn.synergy.ru/libs/swiper/swiper-5.4.5.min.js"></script>

  <script src="https://syn.su/js/lander.js?v=2" defer="defer"></script>

  {% block js %}
  {% endblock %}

  {% block thanks %}
  <script>
    function thanks_page() {
      setTimeout(function(){
        location.href = '<?= $BASE_HREF ?><?= _('registration__link')?>';
      }, 100);
    }
  </script>
  {% endblock %}

</body>
</html>