<?php //netteCache[01]000389a:2:{s:4:"time";s:21:"0.30722600 1293556897";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:67:"/Users/simekadam/Sites/SugarBook/app/templates/Logout/@layout.latte";i:2;i:1293556200;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"f195947 released on 2010-12-16";}}}?><?php

// source file: /Users/simekadam/Sites/SugarBook/app/templates/Logout/@layout.latte

?><?php
$_l = Nette\Templates\LatteMacros::initRuntime($template, NULL, 'fef1a0d7aa'); unset($_extends);


//
// block _flashMesagesHomePage
//
if (!function_exists($_l->blocks['_flashMesagesHomePage'][] = '_lb17b10bae72__flashMesagesHomePage')) { function _lb17b10bae72__flashMesagesHomePage($_l, $_args) { extract($_args); $control->validateControl('flashMesagesHomePage')
;foreach ($iterator = $_l->its[] = new Nette\SmartCachingIterator($flashes) as $flash): ?>
        <div class="flash-message">
                <?php echo Nette\Templates\TemplateHelpers::escapeHtml($flash->message) ?>

        </div>
<?php endforeach; array_pop($_l->its); $iterator = end($_l->its) ;
}}

//
// end of blocks
//

if ($_l->extends) {
	ob_start();
} elseif (isset($presenter, $control) && $presenter->isAjax() && $control->isControlInvalid()) {
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
    <link href="<?php echo Nette\Templates\TemplateHelpers::escapeHtml($basePath) ?>/css/default.css" type="text/css" rel="stylesheet" />
    <script language="javascript" type="text/javascript" src="<?php echo Nette\Templates\TemplateHelpers::escapeHtml($basePath) ?>/js/jquery-1.4.4.js"></script>
    <script language="javascript" type="text/javascript" src="<?php echo Nette\Templates\TemplateHelpers::escapeHtml($basePath) ?>/js/jquery.nette.js"></script>
    <script language="javascript" type="text/javascript" src="<?php echo Nette\Templates\TemplateHelpers::escapeHtml($basePath) ?>/js/jquery.ajaxform.js"></script>
  </head>
  <body>
      <div id="header">
Welcome dude!!
      </div>
<div id="<?php echo $control->getSnippetId('flashMesagesHomePage') ?>"><?php call_user_func(reset($_l->blocks['_flashMesagesHomePage']), $_l, $template->getParams()) ?></div>      <a href="<?php echo Nette\Templates\TemplateHelpers::escapeHtml($control->link("Default:default")) ?>">Login with your Facebook account</a>
  </body>
</html>
<?php Nette\Debug::barDump(get_defined_vars(), "Template " . str_replace(dirname(dirname($template->getFile())), "\xE2\x80\xA6", $template->getFile())) ;
if ($_l->extends) {
	ob_end_clean();
	Nette\Templates\LatteMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render();
}
