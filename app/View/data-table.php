<?php

$days = $keys = $names = '';
$rows =[];


 foreach ($data as $key => $value) {
                	
                	$days .= "<td colspan=\"5\">$key</td>";
                    $keys .="<td>VL</td>
			              <td>PG</td>
		               	 <td>PR</td>
			             <td>SG</td>
			             <td>GL</td>";

			         foreach ($value as $name => $data) {

                        if (!isset($rows[$name]))
                        {
                            $rows[$name] = "<td>$name</td>";
                        }

			         	//$names .="<tr><td>$name</td></tr>";

			foreach ($data as $amount) {

                $rows[$name] .= "<td>$amount</td>";
               //echo ("<td>$amount</td>");
				
				
			}
		}
	}

var_dump($value);
var_dump($key);
var_dump($rows);


  ?>
 

<table>
	<thead>
		<tr>
			<td rowspan="2">Pavadinimas</td>
			<?php
                echo $days;
			?>
		</tr>
		<tr>

			<?php
              
                echo $keys;
			?>
		</tr>
	</thead>
	<tbody>


		<?php
         foreach ($rows as $row) {

         	echo '<tr>' . $row . '</tr>'  ;
         	
         }

     
		?>

	</tbody>

</table>


<?php
return
$html = '';

$html .= '<table>';
$html .= '<thead>';

$html .= '</thead>';
$html .= '</table>';
echo $html;



