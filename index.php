<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">

<!-- your webpage info goes here -->

    <title>Road Safety</title>
	
	<meta name="author" content="Paul&Mariam" />
	<meta name="description" content="" />

<!-- you should always add your stylesheet (css) in the head tag so that it starts loading before the page html is being displayed -->	
	<link rel="stylesheet" href="style/style.css" type="text/css" />
	
</head>
<body>

<!-- webpage content goes here in the body -->

	<div id="page">
		<div id="logo">
			<h1><font color="black">Vulnerability 1</h1>
		</div>
		<div id="nav">
			<ul>
				<li><a href="login.php">Login</a></li>
			</ul>
		</div>
		<div id="content">
			<h2>Détails</h2>
			<p>
				Cette page met en oeuvre la vulnérabilité numéro 1: Les injections SQL.
			</p>
			<p> 
				Pour réussir vous devrez pouvoir vous connecter sans identifiants ou mot de passe valide.
				Un premier exemple serait d'insérer :' OR (1 and username = '<usr>').Pour un utilisateur existant dans la base on arrive à se connecter sans son mot de passe. 
			</p>
			<p>
				Un deuxième exemple serait d'augmenter la somme d'argent sur le compte d'un utilisateur sur la page login. Ce dernier ferait une injection sql dans le mot de passe et sans se connecter il pourrait augmenter sa somme d'argent.
				password:<jhg';update Users set wallet = wallet+<somme argent> where username= '<usr>'>;
			</p>
		</div>
		<div id="footer">
			<p>
				Webpage made by <a href="/" target="_blank">[Paul&Mariam]</a>
			</p>
		</div>
	</div>
</body>
</html>