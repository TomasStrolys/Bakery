<!DOCTYPE html>
<html>
<head>
	<title>Nauji Duomenys</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="text-align: center;">
     <form method="POST" action="create.php">

     

     	<div> Data : </div>
     	<input type="date" name="Data"> <br>

     	<div> Prekė: </div>
     	<select name="product">
     		<option value="1">Varškės</option>
     		<option value="2">Aguoninė</option>
     	</select> <br>

     	<div> Vakarykštis likutis : </div>
     	<input type="number" name="Vl"> <br>
     	
     	<div> Pagaminta : </div>
     	<input type="number" name="PG"> <br>
     	
     	<div> Parduota : </div>
     	<input type="number" name="PR"> <br>
     	
     	<div> Sugadinta : </div>
     	<input type="number" name="SG"> <br>
     	
     	<div> Galutinis likutis : </div>
     	<input type="number" name="GL"> <br>

     	<input type="submit" value="Registruoti duomenis">   

     </form>

</body>
</html>