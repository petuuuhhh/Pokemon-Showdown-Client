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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6675676779661865" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9247666470574842" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.589986183362728" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.38502444007485526" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.3656049557058627" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.14116824938397166" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.24615255311111084"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.27295975329068933" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5552538581074111">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3890224286937052">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9775414578393389">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.33028755213880023">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.710637939689327"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.821844839967492"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7204518168719438"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5421666953492461"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.059313325931451555"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9340225956259445"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9318106243015802"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7971981528718546"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.31468527860339246"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4798588632881071"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5721873902620829"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6031139431415806"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.15020885244918158"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3961206495183449"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7498193964860853"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7823805896740981"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5302777218135888"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.4909057850717904"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8444807689008862"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
