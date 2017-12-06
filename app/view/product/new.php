<!DOCTYPE html>
<html>
<head>
    <title>Naujas produktas</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="text-align: center">
<form method="POST" action="?view=product&action=create">


    <div> Ean:</div>
    <input type="number" name="ean"> <br>

    <div> Mato vienetas:</div>
    <select>
        <option value="KG">Kg</option>
        <option value="PCS">VNT</option>
    </select>

    <div> Pavadinimas:</div>
    <input type="text" name="name"> <br>

    <div> Svoris:</div>
    <input type="number" step="0.01" name="weight"> <br>

    <div> Savikaina:</div>
    <input type="number" step="0.01" name="prime_cost"> <br>

    <div> Pardavimo kaina:</div>
    <input type="number" step="0.01" name="sale_price"> <br>
    <br>

    <input type="submit" value="Registruoti duomenis"> <br>


</form>

</body>
</html>