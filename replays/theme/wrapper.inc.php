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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7983281194696166" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.2425336751167544" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9300905597984261" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.22678183485358283" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.1078736556405917" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.40366652923219726" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.14449648196510512"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.976916280451452" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8378841916954556">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6650226741735452">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6617920199250074">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.03936791851057242">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5940594949846516"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.3669992461576388"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.2346796961291273"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.12952688372890053"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6395959549260695"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7126891859346567"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7722904460872149"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.406754387497416"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.22951180829251716"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.1758988499202203"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.0925954582392039"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.73798984585864"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.20807094784100633"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.4460278728627223"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9001047168997198"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7672257796712076"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.89820775760253"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.14519369821098715"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5657390728879168"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
