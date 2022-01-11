<?php
$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
$BASE_HREF = '//' . $_SERVER['HTTP_HOST'] . (!empty($_SERVER['DOCUMENT_URI']) ? str_replace( substr(str_replace('index.php', '', $_SERVER['DOCUMENT_URI']), 1), '', $_SERVER['REQUEST_URI'] ) : '');
$partner = isset($_GET['partner']) ? trim($_GET['partner']) : '';
$version = isset($_GET['version']) ? trim($_GET['version']) : '';
$lang = $get_lang = isset($_GET['lang']) && $_GET['lang'] != '' ? urldecode(strtolower($_GET['lang'])) : 'ru';


require_once 'version.php';
include_once $ROOT . 'chunks/translation.php';
include_once $ROOT . 'chunks/common.php';
include_once $ROOT . 'config.php';
include_once $ROOT . 'elastic.php';
?>

<!DOCTYPE html>
<html lang="<?=$lang?>">

<head>

  <base href="<?= $BASE_HREF ?>">
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?=$descr?>">
  <meta name="application-name" content="<?=$title?>">
  <meta name="robots" content="index, follow">
  <title><?=$title?></title>

  <meta property="og:title" content="<?=$title?>">
  <meta property="og:description" content="<?=$descr?>">
  <meta property="og:url" content="https://<?=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">

  <meta name="facebook-domain-verification" content="u8aofu2o8672sjjolt2n22quds06se" /> 

  <!-- <link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="icon">
  <link href="//synergy.ru/img/favicon.ico" type="image/x-icon" rel="shortcut icon"> -->

  <link rel="apple-touch-icon" sizes="180x180" href="img/common/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/common/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/common/favicon-16x16.png">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">

  <link href="css/style.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">

  <!-- Google Tag Manager --> <script> (function(w, d, s, l, i) { w[l] = w[l] || []; w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' }); var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f); })(window, document, 'script', 'dataLayer', 'GTM-KKFVSMP'); </script> <!-- End Google Tag Manager -->

</head>

<body class="<?= $version ? 'version-'.$version : '' ?>">

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KKFVSMP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  {% import 'form/macro.php' as form %}

  <div class="wrapper">

    {% block blocks %}
    {% endblock %}

  </div>
  <div hidden>

    {% block popups %}
    {% endblock %}

  </div>

  <!-- Плагины и хелперы -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/jquery.marquee@1.5.0/jquery.marquee.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" defer="defer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" defer="defer"></script>

  <!-- Скрипт ALM Lander -->
  <script src="https://syn.su/js/lander.js" defer="defer"></script>
  <script src="js/script.js" defer="defer"></script>

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
