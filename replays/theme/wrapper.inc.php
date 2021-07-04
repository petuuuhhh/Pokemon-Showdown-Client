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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5124901940116517" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.05728896643095083" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.29147002427898405" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.12233976805544278" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.48225428849628926" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.2640298789845634" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5430596712532965"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.50789991514351" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.12804307498871736">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.006164269204411044">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.3738412255780421">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8432846710900013">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.23755403818652066"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.3633969678598312"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.48702742041887426"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.11781862355392914"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6940570860915658"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.37662921097665714"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.1780402643255401"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6238311316366008"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.3267643309698418"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.19382846241101603"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.714379052096465"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.28505025036878595"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7618102119832266"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5417134767941019"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7006950354131722"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.36687211885563853"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.2495116970174236"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.3128596777733612"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.37998665056980596"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
