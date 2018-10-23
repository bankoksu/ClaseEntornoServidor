<html>
	<?php



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
			

			/*
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
		    prueba2();*/




	?>


</html>

