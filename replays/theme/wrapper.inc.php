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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5662592630679157" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8575806506405785" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.20931619355111275" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8259420680976626" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6708438756637729" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9778257024561985" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8441081689560708"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5277568871946576" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2778376453427127">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5477038976050601">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.4920696871962378">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.44362586753977973">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8643415948250484"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.06041892042368402"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.15151309453908413"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2360257011935709"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.40175062254374705"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5322193887743949"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.1660201271999675"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.40684065716261064"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5877141751456134"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6237600305978073"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5366211536945018"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.11622763195133645"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7339987974956663"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9484367766032438"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7948862921149906"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5421461702705992"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6375512939431711"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9965088176099914"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.23847250692979927"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
