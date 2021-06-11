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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.576773832723712" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8647921871297419" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.4579214137011671" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.27993308749994683" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6155894617636168" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8445369014753774" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.4983153614256095"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.07562466943360002" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6085053640609641">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.33666680692963746">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6073546812753257">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.748084598610699">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.39975753551596394"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.18140220252969264"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6250967868266928"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.06185013132044159"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8025132876990424"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7172450373069827"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.38519908135737957"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6275384973978408"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8461368208049425"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8614466957474869"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.09484781155397193"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9479521766419017"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.18350717614733414"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.4587856126676866"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.12562995945665945"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9487881249376378"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.20337616226347532"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.08562741572765953"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.4348291525006831"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
