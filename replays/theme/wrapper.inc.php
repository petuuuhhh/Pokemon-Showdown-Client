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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.4301326954699485" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8153145140218121" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8921219533205775" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3041189280353338" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.263341178569372" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5964865190976472" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.34713846586140695"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.23398411066460745" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.31941094388579216">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.009417224812894531">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5605952572928092">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.3998048210994256">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.22486589117405642"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.40242495797458777"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.07019201639497008"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.36507918477701473"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.650466670298693"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4127262320130245"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.15632723605448495"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5488271479601796"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5061806617008813"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.06532038623516612"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.43434905917990174"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6872044580035757"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7488167879342518"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5514789360811703"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6554855803591657"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.2389060369618603"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9220554190370263"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.18497633863048835"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9088448490859298"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
