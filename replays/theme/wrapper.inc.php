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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.3183053621541989" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5805807892539581" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8696612247712805" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3789814910963123" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8060534531235481" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7581220182063784" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.16719188098952298"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.04023538650283731" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9692436273353626">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9510972504938413">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.10402727964316227">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.94245971395852">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2811166849345774"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5691669169009288"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.10287616219616447"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.17664106509419786"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.35929398824536696"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.023128443938588816"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.1399738182161896"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.13506365040205282"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9108844885656959"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6879764178946515"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7762203959406169"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6648009850633163"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.4132355476321896"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.336683104646166"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.2675408700097408"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.3022120441612395"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3512053865867302"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.766839601555716"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.37686717410737525"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
