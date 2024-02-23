<?php
/*autor: Hamacek Martin, C3c, 2023/2024*/

		/*funkce součet
		vstupy: číslo a, číslo b
		vrací (int): součet a + b
		*/

		function soucet(int $a, int $b): int{
				return $a + $b;
		}

		/*funkce rozdíl
		vstupy: číslo a, číslo b
		vrací (int): rozdíl a - b
		*/

		function rozdil(int $a, int $b): int{
			return $a - $b;
		}
		
		/*funkce soucin
		vstupy: číslo a, číslo b
		vrací (int): násobek čísel a * b
		*/
		
		function soucin(int $a, int $b): int{
			return $a * $b;
		}
		
		/*funkce podíl
		vstupy: číslo a, číslo b
		vrací (float): podíl čísel a / b
		*/
		
		
		function podil(int $a, int $b): float{
			if($b == 0){ //ochrana proti tomu kdyby vstup b byl nula
					throw new Exception("Nulou nelze dělit"); //vytvoření výjimky
					return 0;
			}
			return $a / $b;
		}
		
		/*funkce mocninadruhou
		vstupy: číslo n, číslo b
		vrací (int): druhou mocninu čísla n
		*/
		
		function mocninadruhou(int $n):int{
			return $n * $n;
		}
		
		/*funkce mocninadruhou
		vstupy: číslo n, číslo b
		vrací (int): třetí mocninu čísla n
		*/
		
		function mocninatreti(int $n):int{
			return $n * $n * $n;
		}
		
		/*funkce mocninadruhou
		vstupy: číslo n, číslo b
		vrací (int): čtvrtou mocninu čísla n
		*/
		
		function mocninactvrtou(int $n):int{
			return $n * $n * $n* $n;
		}
		
		/*funkce mocninadruhou
		vstupy: číslo n, číslo b
		vrací (int): pátou mocninu čísla n
		*/
		
		function mocninapatou(int $n):int{
			return $n * $n * $n * $n * $n;
		}
?>