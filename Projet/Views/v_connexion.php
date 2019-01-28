<div class="main">
		<h2>Identifiation Client</h2>
    <?= $_SESSION['username'] ?>
		<p>
Merci d'entrer votre identifiant et votre mot de passe pour acceder à votre espace client. Si vous n'avez pas de compte client vous pouvez en créer un gratuitement <a href="../controller/connexion.php?new=true"><strong>ICI</strong></a>
		</p>
		<form action="./index.php?page=connexion" method="post">
	        	<ul>
	        		<li>
	        			<label for="idpseudo">Votre nom d'utilisateur : </label>
	        			<input type="text" name="username" id="idlogin" required />
	        		</li>
	        		<br>
	        		<li>
	        			<label for="idmdp">Votre mot de passe : </label>
	        			<input type="password" name="pwd" id="idmdp" required />
	        		</li>
	        		<br>
	        		<li>
	        			<input class="btn btn-success" type="submit" value="Connexion"/>
	        		</li>
	        	</ul>
	    </form>
	</div>