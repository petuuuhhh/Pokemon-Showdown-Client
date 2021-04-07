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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.0314026308158899" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7824692118600669" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.39491518091505706" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.17615109696387776" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.04197958239476485" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.24891723325351034" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9254422010562531"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.27376432217317315" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4318293055705771">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5138320527391729">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.4123647830400148">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9516605258589939">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.15875490875054843"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9090937616967716"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6978389558999383"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2310582852101346"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5303742952053834"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.08710833390952533"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3514924982755907"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7055706954992258"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.3593500510997212"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.2806411574246428"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.720992522642955"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6300374707219814"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6720027578131063"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.360139050259775"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5138650479322928"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6324936739798606"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.19307053975843136"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.44067727045053084"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9657371894127655"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
