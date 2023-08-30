

/*   // Calcular o fatorial de um numero qualquer 
     Ex. $numero = 5.
     (5!)  =>  5  *4  *3  *2  *1 = 120;

 */

      $numero = 5;
      $fatorial = 1;
      $contador = 1;

      while ($contador <=$numero ){

      $fatorial *= $contador ;
       $contador ++;
      }

       echo "o fatorial é ", "="," $fatorial, ";
      
