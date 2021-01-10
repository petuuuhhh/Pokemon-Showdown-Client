<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.37012591959909713" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.9171734954321351" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.25628256311860653" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7761879479008893" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9865499118481038" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4577136408014266" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.03780120613944593"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.4298554745234069" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6648300651362109">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6053466046265839">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.06374289122481347">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.40824173490597393">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5516275120402987"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.15999469778200592"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.577702905120709"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.489830943968498"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.23671374567660375"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.1275550580386955"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.2448725861354517"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.2656708182976588"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.40005184559602136"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.2799492356136668"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.07430746535610222"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.003653446329425325"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.4448822001167796"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.77423008868831"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8161862376763531"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.08148908713717828"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.2463963009620127"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7405477270280527"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.01403504659690702"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
