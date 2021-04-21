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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.01278214077262918" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8801395184751082" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.06801509274462081" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7028979378680709" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9460966962711028" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.569646336178361" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.36992958063767856"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5682806214851066" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8502498969337406">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6057497056924703">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5399759749424176">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.589376989651708">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3696227382263424"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.006972883694147836"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.1844168232687362"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7843277334262508"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.43952829738712595"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.01492461358267616"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.39863897364553114"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7262450289930347"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9536709989290706"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5255036108714579"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.317940490204101"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7017516364694456"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5304437154157642"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.788966773819012"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9232955735345694"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.08490934227333602"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.4248446920599134"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.817205269024958"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6670607436442608"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
