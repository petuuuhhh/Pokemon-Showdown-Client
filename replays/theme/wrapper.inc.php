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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8582997162235706" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.16432876026633791" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7244189124813325" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.532732856932058" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.17300869400968244" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.14059561855744884" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.1261099800411125"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.09346951002080073" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.03834846543770598">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2868106771798713">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.05406311779083239">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6119084172484992">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4490704403853871"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5850591042951243"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.009192573565394824"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8890545908457177"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5415822767649214"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8267088805427245"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.16372447504528465"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.3234074900397126"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5231972927348478"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.270694920077831"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5110398840331531"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.19447886493980793"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.912415069787232"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6379830218209273"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5304033519031788"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.07500913350946381"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9167469136098805"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8969129454349793"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8100322188942704"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
