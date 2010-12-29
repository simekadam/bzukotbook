<?php //netteCache[01]000390a:2:{s:4:"time";s:21:"0.81487600 1293001605";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:68:"/Users/simekadam/Sites/SugarBook/app/templates/Default/default.latte";i:2;i:1293001597;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"f195947 released on 2010-12-16";}}}?><?php

// source file: /Users/simekadam/Sites/SugarBook/app/templates/Default/default.latte

?><?php
$_l = Nette\Templates\LatteMacros::initRuntime($template, NULL, 'c30f4c6580'); unset($_extends);


//
// block statuses
//
if (!function_exists($_l->blocks['statuses'][] = '_lbd01f2bdbf8_statuses')) { function _lbd01f2bdbf8_statuses($_l, $_args) { extract($_args)
?><div id="<?php echo $control->getSnippetId('zkouska') ?>"><?php call_user_func(reset($_l->blocks['_zkouska']), $_l, $template->getParams()) ?></div><?php
}}


//
// block _zkouska
//
if (!function_exists($_l->blocks['_zkouska'][] = '_lb31abd77543__zkouska')) { function _lb31abd77543__zkouska($_l, $_args) { extract($_args); $control->validateControl('zkouska')
;foreach ($iterator = $_l->its[] = new Nette\SmartCachingIterator($statuses['data']) as $status): ?>
<div class="post">
    <img alt=""  class="profilePicture" src="http://graph.facebook.com/<?php echo Nette\Templates\TemplateHelpers::escapeHtml($status['from']['id']) ?>/picture" />
    <div class="post_user"><?php echo Nette\Templates\TemplateHelpers::escapeHtml($status['from']['name']) ?></div>
    <div class="statusMessage"><?php echo Nette\Templates\TemplateHelpers::escapeHtml($status['message']) ?></div>
<?php if (isset($status['comments'])): foreach ($iterator = $_l->its[] = new Nette\SmartCachingIterator($status['comments']['data']) as $datas): ?>
    <div class="comments"><?php echo Nette\Templates\TemplateHelpers::escapeHtml($datas['message']) ?></div>
<?php endforeach; array_pop($_l->its); $iterator = end($_l->its) ;endif ;if (isset($status['likes'])): endif ?>
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
if (!$_l->extends) { call_user_func(reset($_l->blocks['statuses']), $_l, get_defined_vars()); }  
if ($_l->extends) {
	ob_end_clean();
	Nette\Templates\LatteMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render();
}
