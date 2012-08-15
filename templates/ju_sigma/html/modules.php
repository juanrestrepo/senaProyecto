<?php

// no direct access
defined('_JEXEC') or die('Restricted access');

/*
 * Module chrome for rendering the module in a clean manner
 */
function modChrome_justyle($module, &$params, &$attribs)
{
	if (!empty ($module->content)) : ?>
	<div class="module">
		<?php if ($module->showtitle != 0) : ?>
		<h3 class="module-title"><?php echo $module->title; ?></h3>
		<?php endif; ?>
	    <div class="module-body">
        <div class="inner">
	        <?php echo $module->content; ?>
        </div>
        </div>
	</div>
	<?php endif;    
}

function modChrome_light($module, &$params, &$attribs)
{

if (!empty ($module->content)) : ?>
<div class="white">
<?php if ($module->showtitle != 0) : ?>
<h3 class="title"><?php echo $module->title; ?></h3>
<?php endif; ?>
<?php echo $module->content; ?>
<div style="clear:both;"></div>
</div>

<?php endif;
}

function modChrome_dark($module, &$params, &$attribs)
{

if (!empty ($module->content)) : ?>

<div class="dark">
<?php if ($module->showtitle != 0) : ?>
<h3 class="title"><?php echo $module->title; ?></h3>
<?php endif; ?>
<?php echo $module->content; ?>
<div style="clear:both;"></div>
</div>

<?php endif;
}

?>