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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.21854663004391273" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9140811311252723" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6252821077969675" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6891295884155022" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7788818884227076" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8731770108110675" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9150000749236209"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.40775458414184773" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7429334206668163">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8266944912908498">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.09173041345127664">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9973519125705002">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.556331801349006"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5193235826662737"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5464506752279397"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9809911196142498"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5539152608458926"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8095913797988188"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5264646728942384"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.37608232058443236"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.1953475272797871"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7304390560502796"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.31236633986418116"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.12295352408667592"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.3418556484633517"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9682129319532093"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9174381841485082"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6295302790406094"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.0648045965407571"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.3019943223058228"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.26494802443627585"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
