<div style="text-align: center">
<form method="POST" action="?view=product_history&action=create">



    <div> Data : </div>
    <input type="date" name="date"> <br>

    <div> Prekė: </div>
    <select name="product_id">
        <?php

        mysqli_connect("localhost","root","");
        mysqli_select_db(ts_bakery);
        $result=mysqli_query("SELECT `id`,`name` FROM `bakery_products` WHERE
        `delete_at` IS NULL ORDER BY `name` ASC ");


        $result = db_query($query);

        foreach ($result as $value)
        {
            echo '<option value= "' . $value['id'] . '" >' . $value['name'] . '</option>';
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
</div>

