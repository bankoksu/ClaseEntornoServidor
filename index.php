<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link href="select2.css" rel="stylesheet"/>
    <script src="select2.js"></script>
	<title>sistema de ordenacion de numeros</title>
</head>
<body class="panel panel-default">
	<select id="select1" class="panel-body">
        <option value="burbuja">metodo burbuja</option>
        <option value="insercion">metodo insercion</option>
        <!--<option value="met3">metodo3</option>
        <option value="met4">metodo4</option>-->
    </select>
    <select id="select2" class="panel-body">
    	<option value="Array1">array1</option>
    	<option value="Array2">array1</option>
    	<option value="Array3">array1</option>
    </select>

    <input type="button" value="Presionar" onclick="function()">		
    <script >
    	$(document).ready(function(){
    		var opcion = $("select1").select2('val');
    		var opcion2 = $("select2").select2('val');
    		console.log(opcion)
    		console.log(opcion2)
    		/* ?? */ <?php echo prueba(opcion,opcion2);  ?>
    	};

    </script>

	<?php
	$array1=array(10,7,8,5,6);
	$array2=array(10,8,6,4,2);
	$array3=array(1,2,3,4,5);


			/* primera forma de ordenar
			* inserción directa
			*$lista array o lista de números
			*$lengh número de elementos en la lista
			*/
	    function insercionDirecta($lista,$lengh){
		        for ($i = 1; $i < $lengh; $i++)
		        {
		                 $v = $lista[$i];
		                 $j = $i - 1;
		                 while ($j >= 0 && $lista[$j] > $v)
		                 {
		                          $lista[$j + 1] = $lista[$j];
		                          $j--;
		                 }
		                 $lista[$j + 1] = $v;
		        }
		        return $lista;
		    }
		    



		    /* segundo metodo	
			* Burbuja
			*$lista es la array o números a ordenar
			*$lengh elementos dentro de una lista
		    */

		    function burbuja($lista,$lengh){
		        for($i=1;$i<$lengh;$i++)
		        {
		                for($j=0;$j<$lengh-$i;$j++)
		                {
		                        if($lista[$j]>$lista[$j+1])
		                        {$k=$lista[$j+1]; $lista[$j+1]=$lista[$j]; $lista[$j]=$k;}
		                }
		        }
		      return $lista;
		    }
	function prueba(opcion,opcion2)			
		if opcion == "burbuja"{

		} else{
			
		}    





			/*
			* esta parte eran pruebas para que al menos ordenaban la array
		    function prueba1()
		    {
		        $VectorA=array(5,4,3,2,1);
		        $VectorB=burbuja ($VectorA,sizeof($VectorA));
		        for($i=0;$i<sizeof($VectorB);$i++)
		            echo $VectorB[$i]."\n";
		    }
		    prueba1();
		    		    function prueba2()
		    {
		        $VecA=array(10,7,8,5,6);
		        $VecB=insercionDirecta($VecA,sizeof($VecA));
		        for($i=0;$i<sizeof($VecB);$i++)
		            echo $VectorB[$i]."\n";
		    }
		    prueba2();
		    */

	?>

</body>
</html>

