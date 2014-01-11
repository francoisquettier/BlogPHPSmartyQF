 </div>
<?php
//include ('fonction.php');
if (identification_cookie()==true)
 {
 
 ?>
 
          
          <nav class="span4">
            <h3>Menu</h3>
			<form method="GET" action="index.php">
			<input type="text" name="search" value="Moteur de recherche" onclick="this.value='';" /><br />
			<input type="submit" value="Rechercher" name=""/>
            </form>
			
            <ul>
                <li><a href="index.php">Accueil</a></li>
				<li><a href="formulaire.php">Formulaire</a></li>
				<li><a href="deco.php">Deconexion</a></li>
				
            </ul>
<?php
}
else
{
?>
    <nav class="span4">
            <h3>Menu</h3>
			<form method="GET" action="index.php">
			<input type="text" placeholder="Moteur de recherche" name="search" /><br />
			<input type="submit" value="Rechercher" name=""/>
            </form>
			
            <ul>
                <li><a href="index.php">Accueil</a></li>
				<li><a href="co.php">Connexion</a></li>
				
            </ul>     
          </nav>
		  <?php
		  }
		  ?>
        </div>
        
      </div>

      <footer>
        <p>&copy; ULCO 2013 - 2014</p>

      </footer>

    </div>

  </body>
</html>
