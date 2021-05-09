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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.11305273534120674" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9008452968128271" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.36079080691068754" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8096844505164635" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.2661485482125676" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4712920131931284" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6440317148144823"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7790794498441396" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9858520775132991">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8820860212462309">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.24468197071810605">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.487764434738601">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8124348584219747"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.2880495761498738"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7634696090624069"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8676222957785207"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.1634317881987839"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.11658560208550006"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.533623067934462"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.10714930956124524"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7432072375508749"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7238479984857786"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.18949845040007762"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8356683683286548"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.36472746366428854"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.31225285277299997"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.1964466725391385"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4334170908292321"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.573204970925145"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.767319705407415"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6877965809578332"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
