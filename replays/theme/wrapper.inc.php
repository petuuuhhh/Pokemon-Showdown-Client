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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.32024841111009983" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.018688268178884693" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5800525850162668" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.20934362948413576" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5884943265957101" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.22562546792844995" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6344183744157517"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9118617115384509" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.0928912594707183">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6583891316044204">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.09193630924520435">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.32611381098375336">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.469021229489887"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.935963841603904"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9473333829349624"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.32592395620472847"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8647608144876122"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4708558276860282"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.822089966209838"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6375978038553594"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.4926430058258291"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.18791996559535096"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5686315147171217"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.16358727608686907"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.572492142672749"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.18639952915282243"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6387837076294134"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7640817536342845"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3244490861300233"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.044045044027410274"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.2033246067670238"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
