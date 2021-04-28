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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.850168280967208" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.49810960248545366" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5962980084697445" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.013998376540189206" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7075742697638989" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7645696946647009" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5485219931917145"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.3000714792877006" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.11694370084107675">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6160554646423768">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.948758297898797">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.33369710772426653">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6632617778508016"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.2853058230522938"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.21782598970692857"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9040845156279615"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.3855312699508999"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.48432755388166493"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.4357098894041427"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5462443379818469"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.09886300427639672"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.898799473678646"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.2852426424460355"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6577987705673398"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9238573377400874"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7172827662354828"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8645449310074675"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6538253788242665"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.4600117280799745"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.1258845266926525"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.08232155484722292"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
