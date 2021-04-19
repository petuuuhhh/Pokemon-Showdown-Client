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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.866322971069287" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.24872531700544864" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.3236361372737633" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5872030235614032" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.36418552402778737" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.2891746170035985" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.18404164543843948"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.3932340152983751" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.46587315060052803">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.816760153972965">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.4194763662359937">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7193772803816303">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.595130597739189"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7087157466977745"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.003739735928542931"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9687409710100015"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.05629253079526508"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.867231029822292"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9262486982429419"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8438651464455966"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.007882263099656006"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.07019064388344387"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.4993638303910106"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7180940927855342"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.24635648311617797"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.2709959510749347"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8943259263114418"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8756268329529091"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5854994734851771"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.31480695557062544"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.06173405550694833"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
