<?php
session_start();

if(isset($_GET['js']))
{
	header('Content-Type: application/javascript');
	echo'
	function affiche(id)
	{
		let sections = document.querySelectorAll("#contenu div")
		for(let i = 0; i < sections.length - 1; i++)
		{
			sections[i].style.display = "none"
			let thisId = sections[i].id.substring(8)
			document.getElementById("span_" + thisId).style.display = "none"
			document.getElementById("lien_" + thisId).style.display = ""
		}
		document.getElementById("section_" + id).style.display = ""
		document.getElementById("span_" + id).style.display = ""
		document.getElementById("lien_" + id).style.display = "none"
	}

	let scrollY = 0
	const ascenseur = document.getElementById("ascenseur")
	if(!ascenseur.style.marginTop)
		ascenseur.style.marginTop = "0px"
	window.addEventListener("scroll", e => {
		let positionMenu = parseInt(ascenseur.style.marginTop, 10)
		let hauteurMenu = ascenseur.offsetHeight
		let hauteurNavigateur = document.body.clientHeight
		if(hauteurMenu < hauteurNavigateur)
		{
			scrollY = window.scrollY
			ascenseur.style.marginTop = scrollY + "px"
		}
		else
		{
			if(window.scrollY > scrollY)
			{
				scrollY = window.scrollY
				if(positionMenu + hauteurMenu < scrollY + hauteurNavigateur)
					ascenseur.style.marginTop = (scrollY - (hauteurMenu - hauteurNavigateur)) + "px"
			}
			else if(window.scrollY < scrollY)
			{
				scrollY = window.scrollY
				if(positionMenu > scrollY)
					ascenseur.style.marginTop = scrollY + "px"
			}
		}
	})
	';
}
elseif(isset($_GET['css']))
{
	header('Content-Type: text/css');
	echo'
	* {
		margin: 0px;
		padding: 0px;
		box-sizing: border-box;
	}

	html, body {
		height: 100%;
	}

	body {
		background-image: url(\'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAAECAIAAAAmkwkpAAAAKElEQVR42mNQV1fXBQMgg0FPT08LDIAMBn19fW0wADIYgGIGYABkAADTqAhBhcCA0AAAAABJRU5ErkJggg==\');
		font-family: "Source Sans Pro", Helvetica, Arial, sans-serif;
		font-size: 16px;
		font-weight: 400;
	}

	p {
		margin-bottom: 1em;
	}

	a {
		color: #369;
		text-decoration: underline;
		cursor: pointer;
	}

	a:hover {
		color: #ae508d;
	}

	table {
		border-collapse: collapse;
	}

	td {
		vertical-align: top;
	}

	@media screen and (max-width: 450px) {
		body {
			font-size: 15px;
		}
	}
	
	@media screen and (max-width: 400px) {
		body {
			font-size: 14px;
		}
	}
	
	@media screen and (max-width: 375px) {
		body {
			font-size: 13px;
		}
	}
	
	@media screen and (max-width: 350px) {
		body {
			font-size: 12px;
		}
	}
	
	@media screen and (max-width: 325px) {
		body {
			font-size: 11px;
		}
	}
	
	@media screen and (max-width: 300px) {
		body {
			font-size: 10px;
		}
	}
	
	@media screen and (max-width: 275px) {
		body {
			font-size: 9px;
		}
	}
	
	@media screen and (max-width: 250px) {
		body {
			font-size: 8px;
		}
	}
	
	@media screen and (max-width: 225px) {
		body {
			font-size: 7px;
		}
	}
	
	@media screen and (max-width: 200px) {
		body {
			font-size: 6px;
		}
	}
	
	@media screen and (max-width: 175px) {
		body {
			font-size: 5px;
		}
	}
	
	@media screen and (max-width: 150px) {
		body {
			font-size: 4px;
		}
	}
	
	@media screen and (max-width: 125px) {
		body {
			font-size: 3px;
		}
	}
	
	@media screen and (max-width: 100px) {
		body {
			font-size: 2px;
		}
	}
	
	@media screen and (max-width: 75px) {
		body {
			font-size: 1px;
		}
	}

	.bgViolet {
		background-color: #ddf;
	}

	#website {
		width: 100%;
		height: 100%;
	}

	#ascenseur {
		padding: 2em 0px;
	}

	#menu {
		width: 14vw;
		min-width: 14vw;
		font-size: 1.05em;
		text-align: center;
		color: #fff;
		background-color: #8892bf;
	}

		#menu img {
			width: 60%;
		}

		#menu p.titre {
			margin: 1.25em 1em 0.5em 1em;
			font-size: 1.1em;
			font-weight: bold;
			font-style: italic;
			color: #000;
		}

		#menu p.version {
			font-size: 0.9em;
		}

	#liens {
		padding-top: 1.5em;
		text-align: left;
	}

		#liens p {
			margin: 0px;
		}

		#liens a {
			display: block;
			padding: 0.5em 0px 0.5em 1.25em;
			text-decoration: none;
			color: #e2e4ef;
		}

		#liens a:hover {
			color: #fff;
		}

		#liens span {
			display: block;
			padding: 0.5em 0px 0.5em 1.25em;
			color: #fff;
			background-color: #4f5b93;
		}

	#separation {
		width: 4px;
		min-width: 4px;
		background-color: #4f5b93;
	}

	#contenu {
		padding: 1.75em;
		font-size: 0.9em;
		text-align: center;
	}

		#contenu table {
			margin: 0px auto 1.5em auto;
			width: 90%;
			background: #f2f2f2;
			border: 4px solid #5f5f5f;
		}

		#contenu td {
			padding: 0.35em 0.7em;
			text-align: left;
		}

	#footer #version {
		margin-bottom: 1.5em;
		font-size: 0.85em;
		color: #999;
	}

	#footer #auteur {
		font-size: 1.1em;
		color: #ccc;
	}

	#footer a {
		text-decoration: none;
		color: #ccc;
	}

	#footer a:hover {
		color: #ae508d;
	}

	#section_configuration {color: #222; }
	#section_configuration pre {margin: 0; font-family: monospace;}
	#section_configuration a {color: #fff; text-decoration: none;}
	#section_configuration a:link {color: #009; text-decoration: none; background-color: #fff;}
	#section_configuration a:hover {text-decoration: underline;}
	#section_configuration th {text-align: center !important;}
	#section_configuration td, th {border: 1px solid #5f5f5f; vertical-align: baseline; padding: 4px 5px;}
	#section_configuration h1 {font-size: 200%; color: #fff;}
	#section_configuration h2 {font-size: 150%; color: #fff;}
	#section_configuration .p {text-align: left;}
	#section_configuration .e {background-color: #ccf; width: 300px; font-weight: bold;}
	#section_configuration .h {background-color: #99c; font-weight: bold;}
	#section_configuration .v {background-color: #ddd; max-width: 300px; overflow-x: auto; word-wrap: break-word;}
	#section_configuration .v i {color: #999;}
	#section_configuration img {float: right; border: 0;}
	#section_configuration hr {width: 90%; background-color: #ccc; border: 0; height: 1px;}
	';
}
else
{
	$template = '
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="robots" content="noindex, nofollow">
		<title>php_global_infos()</title>
		<link rel="stylesheet" type="text/css" media="screen" href="?css">
		<link rel="icon" type="image/png" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAAAXNSR0IB2cksfwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAhNQTFRFAAAAjpS4mp6/lpu9lJm8mp+/qKzInaHBlZq8l5y9ipC2mZ2/e4GsV1+VUlqSYGebgoewlpu9mZ6/jZK3eoCrcXimcXeleYCrjJG2l5y+l5y+f4WuWGCWfIKtlZq8cHelaXCghIqxXWSZhYqyaG+gcXelk5i7hoyziI60YWmcY2qdU1uSVFyTYmqcZWyehoyzhoyziY60Zm2eh420U1uTc3mmZGudYmqccHeljJK3UlqSZm2fiI208fL24OHrYGibX2aa3t/q8PH2hIqyaXCgUlqShIqymZ6//v7/9fb5Zm2eZWye9fX5lpu9hImxmZ6/VV2UW2KYg4mxgYevlJm7WmKXm6DAmp6/XmaaX2eamZ6/i5C2b3akcXelfYOtiI20V1+VXmWZZGudh420lJm7dXuoZGudY2qdkZa6d36ql5y+ub3TkJW5dXyokpe6UlqSUlqSubzTdHunf4Wvz9Lhk5i7WmGXlJm7////qq7KW2OYW2OYZWyeio+1ZW2eVl6Vo6fF5ufvrrLMmp+/WGCWWWCWbXOjiI20fYOtkZa6qa3JdHuoXGSYjJG3ubzTZ26fdXuod32phYuylpu9i5G2iI20XGOYt7vSp6vIjpS4foStdXuofYOthYuyXWSZZm2fx8rceH+qfoSuyszecHelio+1X2aaY2qdYmmcbXSjbXSjaG+gZGuda3KiUlqSjJG2cHalKnEcXgAAALF0Uk5TAA5VjHg3Ajh5UwwZ2f///MgaMJzl8vLkmy8ezP7YGO72uP229+0WycP7+///+/q6tx33dP//////agP3///////////1Aa7/////////rU7///////9LJf39JAbs6gRI/vn5R1DW9fVz4bsFdddSCAkK8O8Ll/q8A3D++/eg8v+rBw20//7iLcvQHNP90CAIlMWSOwNt/nQxjMWuFwr7/EWi9THTtxnu8Dkw4u4zE4Ak1mPsyQAAAXJJREFUeJxjYKAGYGRiZmFlQxVjY+dg5uQCM7l5ePmAgF9AkEFIWERUTFxCkkFKmh8kJiMrx8AgJ88HBQqKShCGkrIKTExVjUGdDy/QYNDEr0CLQRu/Ah0GXfwK9Bj08RqhbcBgaIRPgYIhA4MxnGdiagaizC3ghmpbAgPKyhrGtbG1s+fjc3B0coaJuLiCgtINxnX38PTi4/P28fCFifiBw9o/AMoN9A0yAVoUHBIKFQgIAysIj8DlxMgosILoGFwKYuMgURufAOYmIryTBKYSkmGRn5Kalp6awZUJU5CVnZObnpaah5Q+8gsYGAqLYAqKSxgYCvIxElapDkS6jC+gHEu6q6is4quuASmoreOrb2hEl29qbmlta+8AKejs6u7R6e1Dle+fMHHS5CkMU0EKpk1nmzFz1uw52NL33HkgFfMXYJODgIXgiFy0GKeCuUvAHlmK24hly4HyK1biVsCwajXfmrV45BkY1q3fgFeeZAAAPbBZ1x6FzR4AAAAASUVORK5CYII=">
	</head>
	<body>
		<table id="website">
			<tr>
				<td id="menu">
					<div id="ascenseur">
						<a onclick="javascript:location.reload();">
							<img src="data:image/png;base64,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" alt="">
						</a>
						<p class="titre">php_global_infos()</p>
						<p class="version">PHP version : <b>::version::</b></p>
						<div id="liens">
							::menu::
						</div>
					</div>
				</td>
				<td id="separation"></td>
				<td id="contenu">
					::contenu::
					<div id="footer">
						<p id="version"><b>php_global_infos()</b> version <b>1.1</b></p>
						<p id="auteur">&copy; <a target="_blank" href="https://wltrdr.dev/">wltrdr.dev</a></p>
					</div>
				</td>
			</tr>
		</table>
		<script src="?js"></script>
	</body>
	</html>
	';

	ob_start();
	phpinfo(-1);
	$phpinfo = ob_get_contents();
	ob_end_clean();

	$glob_vars = array(
		'$_SERVER' => $_SERVER,
		'$_GET' => $_GET,
		'$_POST' => $_POST,
		'$_COOKIE' => $_COOKIE,
		'$_SESSION' => $_SESSION,
		'$_FILES' => $_FILES,
		'$_REQUEST' => $_REQUEST,
		'$_ENV' => $_ENV,
		'Configuration' => 'phpinfo'
	);

	if(preg_match('#<td[^>]*>PHP Version[^<]*</td><td[^>]*>([0-9\.]+)#i', $phpinfo, $matches))
	{
		$version = $matches[1];
	}
	else
	{
		$version = 'Inconnue';
	}

	$menu = '';
	$contenu = '';
	$disp_none = ' style="display: none;"';
	$i = 0;

	foreach($glob_vars as $k => $v)
	{
		if(isset($v) AND !empty($v))
		{
			$id = preg_replace('#[^a-z0-9]#', '', strtolower($k));
			$menu_txt = htmlentities($k, ENT_QUOTES);
			$menu_disp_a = '';
			$menu_disp_s = $disp_none;
			$contenu_disp = $disp_none;
			if($i == 0)
			{
				$menu_disp_a = $disp_none;
				$menu_disp_s = '';
				$contenu_disp = '';
				$i++;
			}
			$menu .= "<a id=\"lien_$id\" onclick=\"javascript:affiche('$id');\"$menu_disp_a>$menu_txt</a><span id=\"span_$id\"$menu_disp_s>$menu_txt</span>\n";
			$contenu .= "<div id=\"section_$id\"$contenu_disp>\n";
			if($v == 'phpinfo')
			{
				$contenu .= str_replace('</div>', '', preg_replace('#<div.*>#U', '', explode('</body>', explode('<body>', $phpinfo)[1])[0]))."\n";
			}
			else
			{
				$contenu .= "<table>\n";
				$j = 0;
				foreach($v as $var => $val)
				{
					if($j == 0)
					{
						$class = '';
						$j = 1;
					}
					else
					{
						$class = ' class="bgViolet"';
						$j = 0;
					}
					$contenu .= "<tr$class>\n<td><b>".htmlentities($var, ENT_QUOTES)."</b></td>\n<td>";
					if(is_array($val))
					{
						ob_start();
						print_r($val);
						$print_array = ob_get_contents();
						ob_end_clean();
						$contenu .= nl2br(htmlentities($print_array, ENT_QUOTES));
					}
					else
					{
						$contenu .= htmlentities($val, ENT_QUOTES);
					}
					$contenu .= "</td>\n</tr>\n";
				}
				$contenu .= "</table>\n";
			}
			$contenu .= "</div>\n";
		}
	}

	echo str_replace(
		array('::contenu::', '::menu::', '::version::'),
		array($contenu, $menu, $version),
		$template
	);
}
