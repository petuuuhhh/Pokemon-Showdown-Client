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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.47229309779869855" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.010439695754271172" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.494149687126505" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7551538634530208" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.1613906130694538" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7858877336523313" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8010177823905822"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9655234753390249" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6634559128345479">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.42050030330111077">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.47912284399078753">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5033529483945829">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8405001374613836"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.01174585006325013"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5751525494699365"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1530468124304849"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9396355471554856"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6592341062607612"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5989908879259926"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.11189021784259823"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7321800284621911"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.016257481645543415"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8171513594750073"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.05703840940961813"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.3168948360447503"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.30263996998095344"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.04211259941484369"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4754110863625389"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7019439641186298"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6100999518129446"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9080729223396367"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
