<?php

$days = $rows  = [];
$keys = '';

foreach ($products as $value) 
{

                        if (!isset($rows[$value['id']]))
                        {
                            $rows[$value['id']]= [];
                            $rows[$value['id']]['name'] = '<td>' . $value['name'] . '</td>';

                        }
}



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

                   foreach ($rows as &$product) 
                      {
                         $product[$value['date']] = '<td></td><td></td><td></td><td></td><td></td>';
                      }
                  }
                    $rows[$value['product_id']][$value['date']]='<td>' . $value['initial'] .'</td>
                                                    <td>' . $value['produced'] .'</td>
                                                    <td>' . $value['sold'] .'</td>
                                                    <td>' . $value['damaged'] .'</td>
                                                    <td>' . $value['closed'] .'</td>';
          }
      
          //print_r($rows);



          //        if (!isset($rows[$value['product_id']]))
          //               {
          //                   $rows[$value['product_id']] = '<td>' . $name . '</td>';
          //               }
          //        $rows[$value['product_id']] .= '<td>' . $value['initial'] .'</td>'
          //        $rows[$value['product_id']] .= '<td>' . $value['produced'] .'</td>'
          //        $rows[$value['product_id']] .= '<td>' . $value['sold'] .'</td>'
          //        $rows[$value['product_id']] .= '<td>' . $value['damged'] .'</td>'
          //        $rows[$value['product_id']] .= '<td>' . $value['damged'] .'</td>'
                
          // }
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
         foreach ($rows as $data) 
         { 

          echo '<tr>';
           foreach ($data as $key => $value) 
           {
             echo   $value  ;
           }
        
         	echo '</tr>';
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



