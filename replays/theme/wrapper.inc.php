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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.02017550091648923" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.4944754698942422" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.31719257428719705" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8855120898634097" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.25567364084584066" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5709321731336978" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.906645444808962"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.4482308666011443" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5339204156951427">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6475136726281336">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6727467185505773">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.603418776539842">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1211828185574535"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.07101864708685124"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9266183227833562"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7356847838040455"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.15921121539069216"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.493309249574053"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6522053407922328"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.4634450292712067"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5068165445344033"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7165819706487953"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.47023729173488915"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.4264291088229639"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5749227434373865"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9049960494339426"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6156730545325542"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8448104422790237"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5884402783083822"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.08517794086836972"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.1899920347080819"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
