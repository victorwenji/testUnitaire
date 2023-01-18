<?php 
    class Calcul
    {       
        function Add($Nombre1, $Nombre2)
        {
            if ($Nombre1 == NULL)
            {
                throw new Exception("N1 ne dois pas etre null!! remplacer N1!");
            }
            if ($Nombre2 == NULL)
            {
                throw new Exception("N2 ne dois pas etre null!! remplacer N2!");
            }
            $Result = $Nombre1 + $Nombre2;
            return $Result;  
        }
        
        function Sou($Nombre1, $Nombre2)
        {
            if ($Nombre1 == NULL)
            {
                throw new Exception("N1 ne dois pas etre null!! remplacer N1!");
            }
            if ($Nombre2 == NULL)
            {
                throw new Exception("N2 ne dois pas etre null!! remplacer N2!");
            }
            $Result = $Nombre1 - $Nombre2;
            return $Result;
        }
        function Mul($Nombre1, $Nombre2)
        {
            if ($Nombre1 == NULL)
            {
                throw new Exception("N1 ne dois pas etre null!! remplacer N1!");
            }
            if ($Nombre2 == NULL)
            {
                throw new Exception("N2 ne dois pas etre null!! remplacer N2!");
            }
            $Result = $Nombre1 * $Nombre2; 
            return $Result;
        }
        function Div($Nombre1, $Nombre2)
        {
            if ($Nombre2==0)
            {
                throw new Exception("impossible de diviser par 0 !"); 
            }
            $Result = $Nombre1 / $Nombre2; 
            return $Result;     
        }
    }
?>
