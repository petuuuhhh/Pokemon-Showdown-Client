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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.35757258410679804" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.33857803475180814" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5326270486672593" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8846966310159627" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.46428264536787633" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8416139203255322" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.33243166874551155"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.44560574762961136" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6806988163359513">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.42234786614406206">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8241143304147966">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5690306645346108">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5960228274452977"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5080444268828206"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.36471787457034033"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8999885587051915"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7884488640922152"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.45548765135879266"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5963608202989308"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9405000344652803"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5094530480058783"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9542450340927755"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.33780278281643694"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.35696410821941305"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.25091389432807665"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5170828844522781"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.4185094457486891"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9729185208809945"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6002790981909971"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7920814354424484"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7533007355928438"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
