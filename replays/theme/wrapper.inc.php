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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.0874672350191934" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.573815094956432" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.2761957357675626" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.2977954859042118" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.347421446102155" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6332602160138274" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7548276464546353"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.45399666907932046" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.1757696391908179">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.24185244979932263">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.685966461224325">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4346734272403221">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2515949610194208"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.19292797069268808"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8299663837308981"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8277015942133348"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.4514940325351673"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7683878414174814"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.27582525542706815"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8369654810129852"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6941429532238836"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4755182407309846"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.3749287836035029"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8705621923400018"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.13487263192882337"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5464258751467559"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6182422894651673"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.07443809819570268"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.19440123278628874"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.11957755514336821"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9970260636872228"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
