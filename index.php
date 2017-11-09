<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Bakery</title>
</head>
<body>

<table>
	<thead>
		<tr>
			<td rowspan="2">Pavadinimas</td>
			<td colspan="5">2017.11.09</td>
			<td colspan="5">2017.11.10</td>
		</tr>
		<tr>
			<td>VL</td> <!--  Vakarykštis -->
			<td>PG</td> <!--  Pagaminta -->
			<td>PR</td> <!--  parduota -->
			<td>SG</td> <!--  Sugadinta -->
			<td>GL</td> <!--  Galutinis likutis -->
			<td>VL</td> <!--  Vakarykštis -->
			<td>PG</td> <!--  Pagaminta -->
			<td>PR</td> <!--  parduota -->
			<td>SG</td> <!--  Sugadinta -->
			<td>GL</td> <!--  Galutinis likutis -->
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Aguoninė</td>
			<td>5</td>
			<td>20</td>
			<td>19</td>
			<td>4</td>
			<td>2</td>
			<td>5</td>
			<td>20</td>
			<td>19</td>
			<td>4</td>
			<td>2</td>
		</tr>
		<tr>
			<td>Varškės</td>
			<td>3</td>
			<td>28</td>
			<td>25</td>
			<td>2</td>
			<td>4</td>
			<td>3</td>
			<td>28</td>
			<td>25</td>
			<td>2</td>
			<td>4</td>
		</tr>
		<tr>
			<td>Duona_balta</td>
			<td>1</td>
			<td>17</td>
			<td>15</td>
			<td>0</td>
			<td>3</td>
			<td>1</td>
			<td>17</td>
			<td>15</td>
			<td>0</td>
			<td>3</td>
		</tr>
		<tr>
			<td>Duona_juoda</td>
			<td>0</td>
			<td>50</td>
			<td>50</td>
			<td>0</td>
			<td>0</td>
			<td>0</td>
			<td>50</td>
			<td>50</td>
			<td>0</td>
			<td>0</td>
		</tr>
		<tr>
			<td>Džemas</td>
			<td>2</td>
			<td>18</td>
			<td>16</td>
			<td>2</td>
			<td>2</td>
			<td>2</td>
			<td>18</td>
			<td>16</td>
			<td>2</td>
			<td>2</td>
		</tr>
	</tbody>


</table>

<script type="text/javascript">
	
/**var date ={
	"Aguoninė"=[5 20 19 4 2 ],
	"Varškės"=[3 28 25 2 4],
	"Duona_balta"=[3 28 25 2 4],
	"Duona_juoda"=[3 28 25 2 4],
	"Džemas"=[3 28 25 2 4],
};

/**var preke={
	"VL"=
    "PG"=
    "PR"=
    "SG"
    "GL"
}
*/

//option1

var _arrayofobjects =[
    {
    	"date":"2017-11-09",
    	"products":"Aguoninė",
    	"data": [5, 20, 19, 4, 2 ],
    },
    {
    	"date":"2017-11-09",
    	"products":"Aguoninė",
    	"data": [5, 20, 19, 4, 2 ],
    }];


//option2

var _objectbyday = {

	"2017-11-09":
	[
	   {
		"product": "Aguoninė",
		"data":[5, 10, 6, 7, 5]
	   },
	   {
		"product": "Varškės",
		"data":[5, 10, 6, 7, 5]
	   },
	   {
		"product": "Duona_balta",
		"data":[5, 10, 6, 7, 5]
	   },
	   {
		"product": "Duona_juoda",
		"data":[5, 10, 6, 7, 5]
	   },
	   {
		"product": "Džemas",
		"data":[5, 10, 6, 7, 5]
	   }
	],
	"2017-11-09":
	[
	   {
		"product": "Aguoninė",
		"data":[5, 10, 6, 7, 5]
	   },
	   {
		"product": "Varškės",
		"data":[5, 10, 6, 7, 5]
	   },
	   {
		"product": "Duona_balta",
		"data":[5, 10, 6, 7, 5]
	   },
	   {
		"product": "Duona_juoda",
		"data":[5, 10, 6, 7, 5]
	   },
	   {
		"product": "Džemas",
		"data":[5, 10, 6, 7, 5]
	   }
	]

};


var _objectbyproduct = {
	"Varškės":
	[
       {
       	"date":"2017.11.09",
       	"data":[3, 3, 4, 6, 6]
       },
       {
       	"date":"2017.11.09",
       	"data":[3, 3, 4, 6, 6]
       },
     ],
     "Aguoninė":
     [
       {
       	"date":"2017.11.09",
       	"data":[3, 3, 4, 6, 6]
       },
       {
       	"date":"2017.11.09",
       	"data":[3, 3, 4, 6, 6]
       }
	  ],
};

console.log(_arrayofobjects);
console.log(_objectbyproduct);
console.log(_objectbyday);
</script>


</body>
</html>