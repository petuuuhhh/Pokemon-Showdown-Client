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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.3030882222190263" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.06898391068611676" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5590818911442654" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3683554832747733" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.16005253496801264" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4593403353989567" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.4990319175099607"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6659624130322483" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7313395061163928">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.19616069060075825">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8463410519308119">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.680873068434487">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3743056250791108"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.45293980949720236"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.06442692707057862"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.48644389167420243"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.38725829862724637"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.09187424561576996"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7353613120046119"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.12784785567651613"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.855220231267541"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5971870881988384"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9005311301587122"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.4035228607918717"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.47686898513375153"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3895898456202469"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.34377804476008045"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.1340202213955699"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.36951710509016644"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.32926203711611146"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6843064604265134"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
