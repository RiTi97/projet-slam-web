<center>
		<?php
		$i=0;
		echo "<div class=\"liste\">
					<div class=\"row\"><br>";
			while($unProduit=$lesProduits->fetch(PDO::FETCH_OBJ))
			{
				if($i==0){
					echo "<div class=\"col-lg-6\">
								<br>
								<img class=\"img-rounded\" height=\"392\" width=\"392\" style=\"max-width: 80%; height:auto;\" src=".$unProduit->lien.">
								<br>
						</div>
						<div class=\"col-lg-6\" align=\"left\">
							<div style=\"margin-left:10%; margin-right:10%;\">
								<h3 style=\"color:fff\">".$unProduit->nom."</h3>
								<h3 style=\"color:fff\">Prix : ".$unProduit->prix." € </h3>
								<h3 style=\"color:fff\">Description : <br>".$unProduit->description."</h3>
								<h3 style=\"color:fff\">Sélectionnez votre taille : </h3>
								<select class=\"selectpicker show-tick\" data-width=\"100px\">
					";
				}
				echo "		<option>".$unProduit->libelle."</option>";
				$i=$i+1;
			}
			$nb=1;
			echo"				</select>
								<h3 style=\"color:fff\">Quantité : </h3>
								<select class=\"selectpicker show-tick\" data-width=\"100px\" data-dropup-auto=\"false\">";
								while($nb != 11){
									echo"
											<option>".$nb."</option>
										";
										$nb=$nb+1;
								}
			echo"				</select>
								<br>
								<br>
								<button type=\"button\" class=\"btn btn-default btn-lg\">
								  <span class=\"glyphicon glyphicon-shopping-cart\"></span> Ajouter au panier
								</button>
							</div>
							<br>
						</div>
					</div>
				</div>";
		?>
</center>