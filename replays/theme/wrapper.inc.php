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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.1569361074561788" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.3078716069102352" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.19403509391146145" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7447143503691429" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.283297035638846" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.08594428009329236" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.10060409050363361"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9544901827324661" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.17429003167208656">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5720837464092094">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.29675507036550397">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8233577065617064">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8938216557408201"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8676551468821716"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9947298487702194"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.45423869273659934"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7011093169380886"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7172055769073149"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8399613890334863"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.40683532167725756"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8089024351021183"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.1435580868020192"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6620436025255465"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9444836957598108"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.15355914830721584"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.0833311992816077"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.05078425961752964"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7462703768953574"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5826366130137637"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8954293500118073"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.20723012325521073"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
