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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5662783832294118" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.13232837589727353" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.11341675190376055" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.560154164004373" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9211456150494104" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.07393031863349431" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9316915384224604"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.807410383066345" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.0346737098031169">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8862216642830654">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9537021061890627">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.1673119348383898">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9143934496186812"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6038127366088941"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.38242841576019226"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5593795125727172"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.058824167519135884"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.578909048838377"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.16179748733652266"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.989807397237594"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8228430779021907"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4469705064209668"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5831468354449258"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7991696799647712"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8569869411806925"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.04533518684548188"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8557528312860492"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.2573162994060245"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.4061214910948061"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.23079468181396057"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6114650668643564"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
