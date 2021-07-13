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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6779962387189438" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8711718166754672" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.38045991395824585" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6208942088169134" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.015554307225304154" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.13784381665803558" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.35174065582641934"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8337640372112984" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8923475048696257">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.21729696105776397">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.10809609689092281">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4531829767205633">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.31842079673483115"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9162063370670772"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.48215922732002414"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.44697676764905614"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.3512388844557568"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.08098617160485433"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.308290006471839"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.042901911154628714"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8549406075813377"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.1254345105170127"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9421566780370769"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7963471538102411"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7052717871864222"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.1859726089933249"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.4527590167692346"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5848278746790125"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7424712592286367"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6194923767812361"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9875585866778209"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
