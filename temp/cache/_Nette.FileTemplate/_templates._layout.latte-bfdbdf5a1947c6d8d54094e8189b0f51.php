<?php //netteCache[01]000382a:2:{s:4:"time";s:21:"0.95632100 1293001601";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:60:"/Users/simekadam/Sites/SugarBook/app/templates/@layout.latte";i:2;i:1293001585;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"f195947 released on 2010-12-16";}}}?><?php

// source file: /Users/simekadam/Sites/SugarBook/app/templates/@layout.latte

?><?php
$_l = Nette\Templates\LatteMacros::initRuntime($template, NULL, '57db08b74e'); unset($_extends);

if (isset($presenter, $control) && $presenter->isAjax() && $control->isControlInvalid()) {
	return Nette\Templates\LatteMacros::renderSnippets($control, $_l, get_defined_vars());
}
?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="<?php echo Nette\Templates\TemplateHelpers::escapeHtml($basePath) ?>/css/default.css" type="tetext/css" rel="stylesheet" />
    <script language="javascript" type="text/javascript" src="<?php echo Nette\Templates\TemplateHelpers::escapeHtml($basePath) ?>/js/jquery-1.4.4.js"></script>
    <script language="javascript" type="text/javascript" src="<?php echo Nette\Templates\TemplateHelpers::escapeHtml($basePath) ?>/js/jquery.nette.js"></script>
  </head>
  <body>
      <div id="header">
          <div id="ajax-spinner">nacitam</div>
          <ul>
              <li><a href="<?php echo Nette\Templates\TemplateHelpers::escapeHtml($control->link("newsFeed:default")) ?>" class="ajax">home ::</a></li>
              <li><a href="<?php echo Nette\Templates\TemplateHelpers::escapeHtml($control->link("default:default")) ?>" class="ajax">  status ::</a></li>
              <li><a href="" class="ajax"> wall</a></li>
      </ul>
          </div>
<?php Nette\Templates\LatteMacros::callBlock($_l, 'statuses', $template->getParams()) ?>
  </body>
</html>
