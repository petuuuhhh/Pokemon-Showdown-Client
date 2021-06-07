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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6223783373518905" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.654121797553274" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.29474800235072696" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.16594407264191902" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7247161681463745" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9930173669920008" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.21189218086907435"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.35630399884788533" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.35940720934382275">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5780906177990195">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.049908490489606994">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.551677473823482">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.098101687095552"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6499691243582744"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.27920281514681156"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.40182119968815755"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.21845520580366506"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6861392253041905"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6566487775709342"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8173242614154343"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.20956996665398675"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7581427276884314"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8755462279376833"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.4559209749591411"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8808993646346452"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.34257719038358925"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.34128509528741535"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7323461452440321"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.44997818725243866"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7589433239785732"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6459398363509872"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
