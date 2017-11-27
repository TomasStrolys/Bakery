<!DOCTYPE html>
<html>
<head>
	<title>Nauji Duomenys</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="text-align: center;">
     <form method="POST" action="create.php">

     

     	<div> Data : </div>
     	<input type="date" name="date"> <br>

     	<div> Prekė: </div>
     	<select name="product_id">
     		<?php
                   $products = json_decode ( file_get_contents('data/products.json'), true);

                   foreach ($products as $key => $value) 
                   {

                       
                         echo "<option value= \"$key\" >$value</option>";
                        
                   }
               

               ?>
     	</select> <br>

     	<div> Vakarykštis likutis : </div>
     	<input type="number" name="initial"> <br>
     	
     	<div> Pagaminta : </div>
     	<input type="number" name="produced"> <br>
     	
     	<div> Parduota : </div>
     	<input type="number" name="sold"> <br>
     	
     	<div> Sugadinta : </div>
     	<input type="number" name="damaged"> <br>
     	
     	<div> Galutinis likutis : </div>
     	<input type="number" name="closed"> <br>

     	<input type="submit" value="Registruoti duomenis">   

     </form>

</body>
</html>