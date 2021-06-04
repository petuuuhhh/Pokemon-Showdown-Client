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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.017721213769793076" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6742183374394288" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.15004713017307258" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6829235722047893" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6969644105146195" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.34638324569967516" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.692526859947671"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.3551845192137755" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9693932624330883">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4023418148153266">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.3542937954903729">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6759998282712805">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6456966786367386"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.32866303454185575"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.07555197282639958"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6993421262526109"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.22415144427014222"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7019714386511535"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3183784314112592"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.06661748291116365"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.14845900542719082"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.530006371734741"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.2085631586580976"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7435187160108201"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.35237548548020303"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7864208431872992"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8858699135884123"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.338934479919343"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8918581383127038"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5565270469168078"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.36982073845315355"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
