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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5333260737502643" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9264687360499877" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.364043619754314" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9794381012340301" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5373807168145479" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.1263188512455986" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.13586861410245632"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.43518464917431854" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6920239909238075">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8006458369626872">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6083699345495346">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4036449417988879">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.051447504084877416"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.2975785910689903"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6818761748927136"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.440004893587995"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.4678459958811958"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.014377953860601256"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8931567151145592"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.2855642652455386"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.923169047534985"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4344333161009559"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.32526681579319283"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.09949721630813935"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6990311112306173"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.279124251101049"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.4403646612715586"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.2947121247367037"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5144002104177292"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.23449015098245352"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.26631557732831856"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
