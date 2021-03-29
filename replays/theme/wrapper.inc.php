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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.3114514826869905" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6270114166730869" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.46606345123838144" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.22574686167148816" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5415481050288673" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.216699780928286" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7962498022463829"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.27206524882202343" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.017347996126287235">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5738538295241764">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.2133019715588531">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.06900926951520403">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9041850270165965"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.1858599005622923"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.19090377921268753"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.30054644668963193"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.09732680244971159"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2044764013304432"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.23585117646564746"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7281894322126559"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.4042825556633549"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5430533094630945"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.2924046100269224"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9904448074869903"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8342373831074097"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.4783914472983932"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.03837700477024519"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.2359619512225679"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6352493274693682"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.782989423034467"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.1247567483778067"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
