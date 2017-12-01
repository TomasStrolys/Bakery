<?php

$days = $rows  = [];
$keys = '';



 foreach ($product_history as $value) 
          {
 
                	if (!isset($days[$value['date']]))
                  {
                    $days[$value['date']] = $value['date'];
                    $keys .="<td>VL</td>
			              <td>PG</td>
		               	 <td>PR</td>
			             <td>SG</td>
			             <td>GL</td>";
                 }

          }
                    //print_r($key);
                    //print_r($value);
	                //   }
                    //return;}

			         // foreach ($products as $key => $name) {

            //             if (!isset($rows[$key]))
            //             {
            //                 $rows[$key] = "<td>$name</td>";
            //             }
            //             if (isset($value[$key]))
            //             {
            //             	foreach ($value[$key] as $amount) 
            //             	{
            //             		$rows[$key] .= "<td>$amount</td>";
            //             	}
            //             }
            //             else 
            //             {
            //             	$rows[$key] .= "<td></td><td></td><td></td><td></td><td></td>";
            //             }
                        //else (!isset($))

			         	//$names .="<tr><td>$name</td></tr>";

			// foreach ($data as $amount) {

   //              $rows[$name] .= "<td>$amount</td>";
   //             //echo ("<td>$amount</td>");
				
				
			// }
//return;


  ?>
 

<table>
	<thead>
		<tr>
			<td rowspan="2">Pavadinimas</td>
			<?php
               foreach ($days as $date) 
               {
                 echo '<td colspan="5">' . $date . '</td>';
               }
                
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



