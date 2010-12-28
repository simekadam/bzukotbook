<?php //netteCache[01]000389a:2:{s:4:"time";s:21:"0.14404500 1293549784";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:67:"/Users/simekadam/Sites/SugarBook/app/templates/Logout/default.latte";i:2;i:1293549698;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"f195947 released on 2010-12-16";}}}?><?php

// source file: /Users/simekadam/Sites/SugarBook/app/templates/Logout/default.latte

?><?php
$_l = Nette\Templates\LatteMacros::initRuntime($template, NULL, 'd30ba8be5f'); unset($_extends);


//
// block statuses
//
if (!function_exists($_l->blocks['statuses'][] = '_lb9988760f5e_statuses')) { function _lb9988760f5e_statuses($_l, $_args) { extract($_args)
?>

ahoj
<?php
}}

//
// end of blocks
//

if ($_l->extends) {
	ob_start();
} elseif (isset($presenter, $control) && $presenter->isAjax() && $control->isControlInvalid()) {
	return Nette\Templates\LatteMacros::renderSnippets($control, $_l, get_defined_vars());
}
if (!$_l->extends) { call_user_func(reset($_l->blocks['statuses']), $_l, get_defined_vars()); }  
if ($_l->extends) {
	ob_end_clean();
	Nette\Templates\LatteMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render();
}
