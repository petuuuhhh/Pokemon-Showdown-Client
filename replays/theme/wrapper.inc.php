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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7496250763552668" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.19329220963726157" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.48865043535717456" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.2459739980325255" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8021339842681661" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.09025310200044467" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.11787066070039365"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.31001726091807535" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8564053225796238">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9113991843497997">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7111478468319057">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6143250177137101">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2068178801487135"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5719627420659286"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.16070289152709605"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8165407675687111"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.3419535977904693"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.02418011459393088"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.2978699346930591"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5982260496037788"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5571059416878918"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.38480072711796254"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7278827830646355"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5252396308983174"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6641458972116328"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.0019338336092562525"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.06275424101334592"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5140380356349554"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.19774396768530478"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5859190397717713"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6874053518259624"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
