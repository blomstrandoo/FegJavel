<!DOCTYPE html>
 <html>
 
 	<head>
 
 		<link rel="Stylesheet" href="CSS/Anmalan.css" >
 
 	</head>
 	
 	<body>
 		
 		<p id="rubrik"> Formulär </p>
 		
 		<main>
 		
 			<table>
 		
 				<form action="skicka/" method="post">
 				
 					<tr>
 						<td>
 							<p>Namn:</p><p class="color-red">*</p><br>
 							<input type="text" name="Namn" required>
 						</td>
					</tr>
 					
 					<tr>
 						<td>
 							<p>Efternamn:</p><p class="color-red">*</p><br>
 							<input type="text" name="Efternamn" size="30" required>
 						</td>
 					</tr>
 					
 					<tr>
 						<td>
 							<p>Favoritfilm:</p><p class="color-red">*</p><br>
 							<input type="text" name="Favorit_film" size="40" required>
 						</td>
 					</tr>
 					
 					<tr>
 						<td>
 							<p>Detaljerad beskrivning:</p><br>
 							<textarea type="text" name="Favorit_Anime" rows="5" cols="40"></textarea>
 						</td>
 				</tr>
 					
 					<tr>
 						<td>
 							<p> Prioritet</p><p class="color-red">*</p><r>
 							<input type="radio" name="Tycker_du_att_du_ar_cool" value="1" required> Mycket Hög
 							<input type="radio" name="Tycker_du_att_du_ar_cool" value="2"> Hög
 							<input type="radio" name="Tycker_du_att_du_ar_cool" value="3" checked> Medel  
 							<input type="radio" name="Tycker_du_att_du_ar_cool" value="4"> Låg 
 						</td>
 					</tr>
 					
 					<tr>
 						<td class="padding-0">
 							<p class="color-red font-size-8 float-right"> * = Obligatoriskt </p>
 						</td>
 					</tr>
 					
 					<tr>
 						<td class="center">
 							<input type="submit" name="Submit" value="Skicka">
 						</td>
 					</tr>
 					
 				
 			</form>
 				
 			</table>
 			
 		</main>
 	
	</body>
 	
 </html> 