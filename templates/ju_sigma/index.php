<?php 
defined( '_JEXEC' ) or die( 'Restricted access' ); define( 'YOURBASEPATH', dirname(__FILE__) );
$logo			= $this->params->get('logo');
$logotype		= $this->params->get('logotype');
$width   		= $this->params->get("width", "960");
$rightWidth     = $this->params->get ("rightWidth");
$app			= JFactory::getApplication();
$doc			= JFactory::getDocument();
$templateparams	= $app->getTemplate(true)->params; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
<jdoc:include type="head" />
<?php require(YOURBASEPATH . DS . "functions.php"); ?>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/styles.css" type="text/css" />
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/script.js"></script>
<style type="text/css">
#wrapper, #mods1, #header-i, #bottom, #nav { width: <?php echo $width ?>px; }
#widget_80  { width: <?php echo ($width) - ($rightWidth);?>px;}
#rightbar-w { width: <?php echo ($rightWidth);?>px;}
</style>
</head>
<body class="bgr">

<div id="header">
<div id="header-i">
<?php if ($logotype == 'image' ) : ?>
<?php if ($logo != null ) : ?>
<div class="logo"><a href="<?php echo $this->baseurl ?>"><img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($logo); ?>" alt="<?php echo htmlspecialchars($templateparams->get('sitetitle'));?>" /></a></div>
<?php else : ?>
<div class="logo"><a href="<?php echo $this->baseurl ?>/"><img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/logo.png" border="0"></a></div>
<?php endif; ?><?php endif; ?> 
<?php if ($logotype == 'text' ) : ?>
<div class="logo text"><a href="<?php echo $this->baseurl ?>"><?php echo htmlspecialchars($templateparams->get('sitetitle'));?></a></div>
<?php endif; ?>
<?php if ($this->countModules('search')) : ?>
<div id="search">        
<jdoc:include type="modules" name="search" style="none" />
</div>
<?php endif; ?> 
<div class="clr"></div>                                   
</div></div>
<?php if ($this->countModules('header')) : ?> 
<div id="slide-w">
<jdoc:include type="modules" name="header"  style="none"/>           
</div>
<?php endif; ?> 


<div id="main">      
<?php if ($this->countModules('mainmenu')) : ?>
<div id="nright"><div id="nleft"><div id="nav">          
<jdoc:include type="modules" name="mainmenu" style="none" />
</div></div></div>
<?php endif; ?>  
<?php if ($this->countModules('user1 or user2 or user3')) : ?>
<div id="mods1" class="spacer<?php echo $mainmod1_width; ?>">
<jdoc:include type="modules" name="user1" style="justyle" />
<jdoc:include type="modules" name="user2" style="justyle" />
<jdoc:include type="modules" name="user3" style="justyle" />
<div class="clr"></div>
</div>
<?php endif; ?>               
<div id="wrapper" class="wrapper_<?php echo $compwidth ?>">
<div id="main-content">
<div id="message">
<jdoc:include type="message" />
</div>        
<div class="full">                        
<div id="widget_<?php echo $compwidth ?>">
<div id="comp-i">
<!-- START FLASH HEADER -->
<?php if($templateparams->get('show-header',1)) : ?>
<?php if (JRequest::getVar('view') == 'featured') : ?>
<div id="flashed">
<object type="application/x-shockwave-flash" data="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/images/header.swf" width="680" height="300">
<param name="wmode" value="transparent" />
<param name="movie" value="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/images/header.swf" />
</object>
</div>	
<?php endif; ?>
<?php else: ?>
<div id="flashed">
<object type="application/x-shockwave-flash" data="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/images/header.swf" width="680" height="300">
<param name="wmode" value="transparent" />
<param name="movie" value="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/images/header.swf" />
</object>
</div>	
<?php endif; ?>
<!-- END FLASH HEADER -->
<?php if ($this->countModules('breadcrumbs')) : ?>
<div id="breadcrumbs">
<jdoc:include type="modules" name="breadcrumbs"  style="none"/>
</div>
<?php endif; ?>
<jdoc:include type="component" />
<div class="clr"></div>
<?php if ($this->countModules('user4 or user5 or user6')) : ?>
<div id="mods2" class="spacer<?php echo $mainmod2_width; ?>">
<jdoc:include type="modules" name="user4" style="justyle" />
<jdoc:include type="modules" name="user5" style="justyle" />
<jdoc:include type="modules" name="user6" style="justyle" />
<div class="clr"></div>
</div>
<?php endif; ?> 
</div>
</div>
<?php if ($ju_right) : ?>
<div id="rightbar-w">
<div id="sidebar">
<jdoc:include type="modules" name="login" style="dark" />
<jdoc:include type="modules" name="right" style="light" />
</div>
</div>
<?php endif; ?>
<div class="clr"></div>
</div>

</div>        
</div>
</div>

<div id="bottom"> 
<?php if ($this->countModules('user7 or user8 or user9 or user10')) : ?>
<div id="mods3" class="spacer<?php echo $mainmod3_width; ?>">
<jdoc:include type="modules" name="user7" style="justyle" />
<jdoc:include type="modules" name="user8" style="justyle" />
<jdoc:include type="modules" name="user9" style="justyle" />
<jdoc:include type="modules" name="user10" style="justyle" />
<div class="clr"></div>
</div>
<?php endif; ?>   
<?php if ($this->countModules('copyright')) : ?>
<div class="copy">
<jdoc:include type="modules" name="copyright"/>
</div>
<?php endif; ?>
<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
global $_VERSION;
require_once('libraries/joomla/utilities/date.php');
$date  = new JDate();
$config = new JConfig();
?>
<div class="coright">
Copyright &copy; <?php echo $date->toFormat( '%Y' ) . ' ' . $config->sitename;?>. Designed by <a href="http://www.joomla2you.com/" title="Visit joomla2you.com!" target="blank">joomla2you</a>
</div>
</div>
</body>
</html>