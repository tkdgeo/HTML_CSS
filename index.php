<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8" />
		<link rel="stylesheet" href="style.css" />
		<title> Accueil </title>
	<head>
	
	<body>
		<header>
			<div id = "logo">
				<img src = "images/logo.png" alt = "logo php & MySQL" id = "img_logo"/>
				<h1>Coder en PHP et MySQL</h1>
				<h2>Mes premiers pas en PHP et MySQL</h2>
			</div>
			
			<nav>
				<ul>
					<li><a href = "index.html">Accueil</a></li>
				</ul>
			</nav>
		</header>
		
		<div id = "html">
			Mais avant de continuer, il faut connaitre le HTML et le CSS, pour apprendre c'est ici :
			<a href = "HTML/test.html" ><img src = "images/html.jpg" alt = "HTML & CSS" id = "img_html" /></a>
		</div>
		
		<section>
			<aside>
			
			</aside>
			
			<article>
				<div>
					<h1> Mise en place d'un nouveau projet </h1>
					<p>
						On va utiliser le paquetage WAMP (Apache couplé avec php et MySQL) pour coder un site dynamique.
						Vous pouvez aller voir l'icône en bas à droite correspondante a WAMPSERVER pour plus de détails 
						(clic gauche puis localhost). Une fenetre internet s'ouvre alors et montre qu'un serveur est bien
						mis en place sur l'ordinateur. Dans la section Projets vous pouvez voir tous vos sites.
						<br />
						Pour créer un nouveau projet, il faut ce rendre dans le dossier "C:\wamp\www". Vous créez ici un 
						dossier avec le nom de votre projet.
						<br />
						Il faut ensuite retourner sur la page web et cliquer sur le nouveau projet, par exemple tests. Une 
						page d'erreur s'affiche, entrez l'adresse suivante dans la barre de recherche :  "http://localhost/tests/"
						et tout ira bien.
					</p>
				</div>
				
				<div>
					<h1> Les balises PHP </h1>
					<p>
						Le code PHP vient s'insérer au milieu du code HTML. Ce seront les données dynamiques de la page web.
						<br />
						Les balises PHP sont un peu special : elle commence par <span class = "special">< ?php</span> 
						et ce termine par <span class = "special">?></span>. Al'interieur, on écrira le code PHP.
						<br />
						<mark>Remarque :</mark> D'autres balises comme <span class = "special">< ? ?></span> ou
						<span class = "special"><% %></span> existent.
						<br />
						La balise précédente s'insère au milieu du code HTML, n'importe où dans celui-ci (dand le corps mais 
						aussi dans l'en-tête de la page ou encore au milieu d'une balise HTML).
					</p>
				</div>
				
				<div>
					<h1> Afficher du texte </h1>
					<p>
						Une instruction se termine toujours par un ";" !
						<br />
						L'instruction <span class = "special">echo</span> permet d'insérer du texte dans la page web.
						En voici un exemple : <span class = "special">< ?php echo "Ceci est du texte écrit en PHP"; ?></span> et sa mise 
						en pratique donne : <?php echo "Ceci est du texte écrit en PHP"; ?>.
						<mark>Remarque :</mark> l'instruction <span class = "special">print</span> fait la même chose mais est 
						moins couramment utilisée.
						<br />
						On peut aussi mettre des balises HTML dans le code PHP. Par exemple mettre en "strong" le mot "texte".
						En voici le résultat :<?php echo "Ceci est du <strong>texte</strong> écrit en \"PHP\""; ?>.
						<br />
						Pour afficher les guillemets dans le texte, il fait les faire précéder d'un antislash : \".
					</p>
				</div>
				
				<div>
					<h1> Enregistrer et tester une page en PHP </h1>
					<p>
						Il faut enregistrer la page avec l'extension ".php" dans le dossier projet (tests dans notre cas). L'important
						est qu'il soit situé dans le dossier "www" ou l'un de ces sous-dossier sinon il ne sera pas exécuté.
					</p>
					<p>
						Pour la tester, il faut se rendre sur la page "localhost" de WAMP comme expliqué précédemment. Puis cliquez sur
						"tests". Si cela ne fonctionne pas, entrez l'adresse suivante "http://localhost/tests/index.php"
					</p>
				</div>
				
				<div>
					<h1> Les commentaires </h1>
					<p>
						Les commentaires monolignes avec "//" dans la balise PHP et les commentaires multilignes avec "/*" et "*/".
					</p>
				</div>
			</article>
		</section>
		
		<footer>
			
		</footer>
	</body>
</html>