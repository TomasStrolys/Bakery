<?php

$days = $keys = $names = '';


 foreach ($data as $key => $value) {
                	
                	$days .= "<td colspan=\"5\">$key</td>";
                    $keys .="<td>VL</td>
			              <td>PG</td>
		               	 <td>PR</td>
			             <td>SG</td>
			             <td>GL</td>";

			         foreach ($value as $name => $array) {

			         	$names .="<tr><td>$name</td></tr>";

			foreach ($array as $amount) {

				$arrayelm .="<td>$amount</td>";
				
			}
		}
	}

var_dump($value);
var_dump($key);

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
        <tr>
        	<td>Varškės</td>
        	<?php
        	echo $arrayelm;
        	?>

        </tr>
        <tr>
        	<td>Aguoninės</td>
        	<?php
        	echo $arrayelm;
        	?>

        </tr>

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


