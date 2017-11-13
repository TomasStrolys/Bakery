<?php

$days = $keys ='';


 foreach ($data as $key => $value) {
                	
                	$days .= "<td colspan=\"5\">$key</td>";
                    $keys .="<td>VL</td>
			              <td>PG</td>
		               	 <td>PR</td>
			             <td>SG</td>
			             <td>GL</td>";
                     
      foreach ($value as $name => $data) {

      	"Varškės" => [ 3, 28, 25, 2, 4],

      	foreach ($data as $amount) {
      		//$amount
      		3
      	}
      }
  }

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
</table>


<?php
return
$html = '';

$html .= '<table>';
$html .= '<thead>';

$html .= '</thead>';
$html .= '</table>';

echo $html;


