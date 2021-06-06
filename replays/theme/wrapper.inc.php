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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9142909862420439" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.545247011197896" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.32050838488670186" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.43182286204322784" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6510395529580704" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.29667860447480177" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5251366399289334"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6715775013155816" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.746924826274578">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7776489051921234">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.009710011236040206">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.24735033243926852">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3068619312846115"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8839803429153277"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.07304939555071766"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.21125254357145917"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.40425291836973654"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.27652574686356624"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8630026566585769"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.08348078256207647"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.061497422890949505"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.32942286818746047"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5803365481470408"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.11527238659616734"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5040936507841616"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3777029496838522"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8242179394054097"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7982047191356716"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5422596430751043"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6022939517450754"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.37774842246015905"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
