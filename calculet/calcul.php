<?php 
    class Calcul
    {       
        function Add($N1,$N2)
        {
            if($N1 == NULL)
            {
                throw new Exception("N1 ne dois pas etre null!! remplacer N1!");
            }
            if($N2 == NULL)
            {
                throw new Exception("N2 ne dois pas etre null!! remplacer N2!");
            }
            $R = $N1 + $N2;
            return $R;  
        }
        
        function Sou($N1,$N2)
        {
            if($N1 == NULL)
            {
                throw new Exception("N1 ne dois pas etre null!! remplacer N1!");
            }
            if($N2 == NULL)
            {
                throw new Exception("N2 ne dois pas etre null!! remplacer N2!");
            }
            $R = $N1 - $N2;
            return $R;
        }
        function Mul($N1,$N2)
        {
            if($N1 == NULL)
            {
                throw new Exception("N1 ne dois pas etre null!! remplacer N1!");
            }
            if($N2 == NULL)
            {
                throw new Exception("N2 ne dois pas etre null!! remplacer N2!");
            }
            $R = $N1 * $N2; 
            return $R;
        }
        function Div($N1,$N2)
        {
            if($N2==0)
            {
                throw new Exception("impossible de diviser par 0 !"); 
            }
            $R = $N1 / $N2; 
            return $R;     
        }
    }
?>
