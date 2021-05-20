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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7361885305773073" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.943190624662815" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.49838950605132437" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8023381547623909" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.587318318274554" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8935295043084042" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5029499466278196"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.3045613959120943" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8615450941591767">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9994965114870817">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.1744107082322972">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5197041437242251">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.05189903308279775"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9992974361296458"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.4212501762954295"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2517323291234874"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.11111142851464129"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8524939446896183"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8257391551433126"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.4167956579143881"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.1280321595664955"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.567715627665645"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.3948451078171171"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.46271592481509405"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.17199495407073662"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5804399023268858"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7051105555475883"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5646355974576007"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3098532461359407"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9146832478904665"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8281459144694228"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
