<?php 
// la fonction identification permet de selectioner l'utilisateur  par rapport au cookie creer par l'utilisateur lors de la connexion au site ///////
function identification_cookie() 
{

if (isset ($_COOKIE['sid']))
	{
		$mavariablecookie=$_COOKIE['sid']; // creation de la variable en l'assignant au cookie ///
		$sql=mysql_query ("SELECT count(*) as total FROM utilisateur WHERE sid='$mavariablecookie'"); // requette de selection ////
		$data=mysql_fetch_array($sql); // execution de la requette

			if($data['total']) // stockage du resultat dans un tableau ///
				{
					return true; 
				}

						else

							{
								return false;
							}

	}
									else

										{				
											return  false;
										}


}

?>