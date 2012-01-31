<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="<?php print $language->language ?>" xml:lang="<?php print
$language->language ?>" xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">

<title>
<?php print $head_title ?></title>
<?php require_once("sites/all/files/navbar/osu-navbar-h.html"); ?>
<?php print $head ?>
<?php print $styles ?>
<?php print $scripts ?>
</head>

<body class="<?php print $body_classes; print $leftbottom?" blocks-left":""; ?>">
<?php require_once("sites/all/files/navbar/osu-navbar-b.html"); ?>


<div id="secondary" <?php print (count($secondary_links) ? ' class="p2"' : ' class="p1"') ?>>

	<div id="navcontainer" style="<?php if($logo){print "background-image: url('".$logo."');"; } ?>" >
		<?php if($logo){ ?>
			<a href="<?=url() ?>" title="<?php print $head_title; ?> Home" class="homelink">
				  <span style="display: none;"><?php print $head_title; ?></span>
			</a>
		<?php } ?>

		<?php if ($primary_links) { ?>
			<?php print theme('links', $primary_links, array('class' => 'links primary_menu')) ?>
		<?php } ?>
	</div>

	<div id="maincontent">
		<?php if ($left != '' || $leftbottom != ""){ ?>
			<div id="left-blocks">
				<?php if($left) { ?>
					<div id="miscMenu">
						<?php print $left; ?>
					</div>
				<?php } ?>
				<?php if($leftbottom) { ?>
					<div id="leftbottom">
						<?php print $leftbottom; ?>
					</div>
				<?php } ?>
			</div>
		<?php } ?>
		<div id="maincontentbody">
			<a name="page-content"></a>
			<?php if ($messages != ""){ ?>
				<div id="message"><?php print $messages ?></div>
			<?php } ?>
			<?php if ($mission != ""){ ?>
				<div id="mission"><span><?php print $mission ?></span></div>
			<?php } ?>
			<?php if ($title != ""){ ?>
				<h1><?php print $title ?></h1>
			<?php } ?>
			<?php if ($help != ""){ ?>
				<p id="help"><?php print $help ?></p>
			<?php } ?>
			<?php if ($tabs != ""){ ?>
				<?php print $tabs ?>
			<?php } ?>
			<?php print $before_content ?>
			<?php print $content ?>
		</div>
	</div>

</div>


<div id="secondaryfooter">
	<div id="footer" class="footer">
		<?php if ($footer_message){ ?>
			<?php print $footer_message;?>
			<?php include("sites/all/files/icons/uicons.php"); ?>
		<?php } ?>
	</div>
</div>


><?php print $closure;?>
</body>
</html>
