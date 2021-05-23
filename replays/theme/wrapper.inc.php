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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.09394815766143272" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.019477889570509888" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.36256733542771746" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.16239934495861963" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.11497502409665183" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.05763616889660894" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.3080885845426151"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7609618319286242" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8880600255345239">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.480420751215729">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.4194858012635567">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7838501749608766">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5580017776527046"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7731569426231171"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.20028727894994347"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9068133973324604"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.15344321549226492"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.37602802328155693"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.587200619909187"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5430431948425618"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.04145361100857747"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7737862204936516"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.2274659828712886"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5562722023065276"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.30223428877716385"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5789187359851424"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.509737534021905"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.009988436833262337"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6002900718530015"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9420032994920253"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.10741131936952164"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
