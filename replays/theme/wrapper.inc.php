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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.17454430785263342" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7326587455921405" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6000860998139796" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.27615671075658077" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7059816623047048" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7789057742032053" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.09716348862802482"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5654932630671963" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.0746010071649672">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4666128105864804">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.3865708143505271">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.013026844157260076">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.47978593196697794"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.12892214606071972"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7823957892131848"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.13977382076403844"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.15774366440512444"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4052576329980231"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6931166642737403"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.4507952507880981"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.08597348075542777"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9345818209221282"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5293571347157584"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.4185675400735367"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7070253306795138"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7389142974019598"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.4074278332333594"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7047166084165071"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9677721465031539"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.14662902353847707"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.48435886659723937"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
