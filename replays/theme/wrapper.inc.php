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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7052420218095481" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.03127624773407245" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.26581966529120615" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8999573785963897" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8942458957940795" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5486462782041863" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.3903629833216222"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.24621782478532928" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5191194824944352">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2081013390186317">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9974234471817376">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.22075902790454416">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3586298954246958"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6648980125218242"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.920316827658896"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9636869091103515"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.07341993595473117"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.577813442600811"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.30002758555731535"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5616803546129767"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7048280795191775"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.1376657600555511"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.15725216225912675"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.2286491626718472"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5964538503764585"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9567294525142733"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6777933546670749"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.432676579650759"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7320097052227412"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.846767193351855"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.794592816752117"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
