  	<div class="main">
  		<h2>Inscription</h2>
  		<p>
  			Veuillez remplir les champs du formulaire ci-dessous afin de créer votre compte personnel.
  		</p>
  		<form action="./index.php?page=inscription" method="post">
  	        	<ul>
  	        		<li>
  	        			<label for="idpseudo">Nom d'utilisateur : </label>
  	        			<input type="text" name="username" id="idlogin" required />
  	        		</li>
  	        		<br>
  	        		<li>
  	        			<label for="idmpw">Mot de passe : </label>
  	        			<input type="password" name="pwd" id="idpw" required />
  	        		</li>
  	        		<br>
  	        		<li>
  	        			<label for="idfn">Prénom : </label>
  	        			<input type="text" name="forname" id="idfn" required />
  	        		</li>
  	        		<br>
  	        		<li>
  	        			<label for="idsn">Nom : </label>
  	        			<input type="text" name="surname" id="idsn" required />
  	        		</li>
  	        		<br>
  	        		<li>
  	        			<label for="ida1">Adresse 1 : </label>
  	        			<input type="text" name="add1" id="ida1" required />
  	        		</li>
  	        		<br>
  	        		<li>
  	        			<label for="ida2">Adresse 2 : </label>
  	        			<input type="text" name="add2" id="ida2" required />
  	        		</li>
  	        		<br>
  	        		<li>
  	        			<label for="idpc">Code postal : </label>
  	        			<input type="number" name="postcode" id="idpc" minlength="5" maxlength="5" required />
  	        		</li>
  	        		<br>
  	        		<li>
  	        			<label for="idpn">Numéro de téléphone : </label>
  	        			<input type="tel" name="phone" id="idpn" minlength="10" maxlength="10" required />
  	        		</li>
  	        		<br>
  	        		<li>
  	        			<label for="idem">Adresse e-mail : </label>
  	        			<input type="email" name="email" id="idem" required />
  	        		</li>
  	        	</ul>
              <input type="hidden" name="createUser" />
  	        	<input class="btn btn-success" type="submit" value="Créer votre compte"/>
              <a href="./index.php?page=accueil" role="button" class="btn btn-outline-secondary">Retour</a>
  	    </form>
  	</div>
