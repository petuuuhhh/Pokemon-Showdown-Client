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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.4240551188594064" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6454478261370924" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.16064129801336668" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.42551563717468" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6112024604931272" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5525153269564447" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.3959364240772132"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8889800364740099" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5698206532245218">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4613255282504354">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.725601240075501">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5574615306355066">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5262200468033367"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8816395894113076"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.819417084916668"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.43769100330777766"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9957640614081928"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9769474812776309"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6566278547609221"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.10646704270172358"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7731113986580349"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4625832628234454"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.40904901698796303"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5678371859275766"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.07753395019170495"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3409331840296099"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.4371656381773792"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6689941379852127"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.920397542050376"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.35135496835273083"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7836760855060285"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
