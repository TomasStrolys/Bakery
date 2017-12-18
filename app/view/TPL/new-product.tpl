
<div style="text-align: center">
<form method="POST" action="?view=product&action=create" enctype="multipart/form-data">


    <div> Ean:</div>
    <input type="number" name="ean"> <br>

    <div> Mato vienetas:</div>
    <select name="unit">
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

    <div> Nuotrauka:</div>
    <input type="file" multiple accept="image/jpeg, image/png" name="picture"> <br>

    <br>

    <input type="submit" class="btn btn-primary" value="Registruoti duomenis"> <br>


</form>

</div>
