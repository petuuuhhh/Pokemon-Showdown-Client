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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.06570256785701889" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.16658333808079728" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.3018159229377866" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.43051279048245106" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.06044044161682649" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8275744554499307" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5679958228914739"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5501541860376242" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5881887130331969">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.01592232209463651">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7467094872425135">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5229604536939949">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9881871669516535"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.4179853285172852"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8007786697842005"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2725012163795284"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7858995497472667"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4392539246485039"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.0017711786604812652"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.1278734583075487"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.34836893989796125"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4427871744998739"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.12685764210913542"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8593674352679808"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.1938671814987556"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.4312611241940847"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5401670735121427"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4203625394508317"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9282610474446524"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.26102599730938647"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8932284469971468"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
