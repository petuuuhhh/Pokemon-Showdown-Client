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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.4389545227866054" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.27175465674922195" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5452270202167837" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.87074125600845" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6433193617479005" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6331484132939198" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.06522286966515622"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6134337408836257" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8694210439746979">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9807634020852478">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.2966311492222782">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.03681811390557299">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4702974832501252"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5334805220401677"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.32442076689405464"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.20384728148957754"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.23010031775176087"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9037605419658934"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.18605458089251958"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.1730762592983519"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6937403317843596"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.10991758199372303"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.3679841698887809"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9346804233804038"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8712008513764351"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6499346001696062"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.27281311000513897"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8824917089068733"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5097202240735474"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9719885118610176"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9631967005498796"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
