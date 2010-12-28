<?php //netteCache[01]000390a:2:{s:4:"time";s:21:"0.79795000 1293549852";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:68:"/Users/simekadam/Sites/SugarBook/app/templates/Default/default.latte";i:2;i:1293482758;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"f195947 released on 2010-12-16";}}}?><?php

// source file: /Users/simekadam/Sites/SugarBook/app/templates/Default/default.latte

?><?php
$_l = Nette\Templates\LatteMacros::initRuntime($template, NULL, '928c8bed81'); unset($_extends);


//
// block statuses
//
if (!function_exists($_l->blocks['statuses'][] = '_lb2c0da64f65_statuses')) { function _lb2c0da64f65_statuses($_l, $_args) { extract($_args)
?><div id="<?php echo $control->getSnippetId('zkouska') ?>"><?php call_user_func(reset($_l->blocks['_zkouska']), $_l, $template->getParams()) ?></div><?php
}}


//
// block _zkouska
//
if (!function_exists($_l->blocks['_zkouska'][] = '_lb99d6d02059__zkouska')) { function _lb99d6d02059__zkouska($_l, $_args) { extract($_args); $control->validateControl('zkouska')
;foreach ($iterator = $_l->its[] = new Nette\SmartCachingIterator($statuses['data']) as $status): ?>
<div class="post">
    <img alt=""  class="profilePicture" src="http://graph.facebook.com/<?php echo Nette\Templates\TemplateHelpers::escapeHtml($status['from']['id']) ?>/picture" />
    <div class="postSubDiv">
    <div class="post_user"><?php echo Nette\Templates\TemplateHelpers::escapeHtml($status['from']['name']) ?></div>
    <div class="statusMessage"><?php echo Nette\Templates\TemplateHelpers::escapeHtml($status['message']) ?></div>
<?php if (isset($status['comments'])): foreach ($iterator = $_l->its[] = new Nette\SmartCachingIterator($status['comments']['data']) as $datas): ?>
   
    <div class="comments"><?php echo Nette\Templates\TemplateHelpers::escapeHtml($datas['message']) ?></div>
<?php endforeach; array_pop($_l->its); $iterator = end($_l->its) ;endif ?>
    <div class="likeTag">
<?php if (isset($status['likes'])): if (count($status['likes']['data'])>0): ?>
            <?php echo Nette\Templates\TemplateHelpers::escapeHtml($status['likes']['data'][0]['name']) ;if (count($status['likes']['data'])>1): ?> and <?php  echo(count($status['likes']['data'])-1) ?> others<?php endif ?> like this.
<?php endif ;endif ?>
<span class="likeThis"><a class="ajax" id="clickMe" href="<?php echo Nette\Templates\TemplateHelpers::escapeHtml($control->link("like!", array($ouser['id']."_".$status['id']))) ?>">Like</a></span>
    </div>
    </div>
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
