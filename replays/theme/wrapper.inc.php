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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.722329970409711" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7481043827419496" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.3677897869167883" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.601086791728664" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9800652550225661" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.07173591169730154" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.08226835621322848"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.039443975917966556" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9030536376958735">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5916929814534606">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7141061753939404">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.03250457807133844">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6184535179331108"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7484835580036515"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.23468305070541984"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9286433971492263"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.3666458783905786"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.42779670557387095"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.01999654866622058"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7121178949437601"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.18700344699761762"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5094423424319703"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.28130243984671366"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.19888209947422664"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8721347626679121"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6833000496287756"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7921744265535171"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9747367639490314"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3548529639739755"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.06979008880886672"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5750931316052821"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
