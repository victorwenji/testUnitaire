<?php 
    class Calcul
    {      
        function add($nombre1, $nombre2)
        {
            if ($nombre1 == NULL)
            {
                throw new Exception("N1 ne dois pas etre null!! remplacer N1!");
            }
            if ($nombre2 == NULL)
            {
                throw new Exception("N2 ne dois pas etre null!! remplacer N2!");
            }
            $result = $nombre1 + $nombre2;
            return $result;  
        }
        
        function Sou($nombre1, $nombre2)
        {
            if ($nombre1 == NULL)
            {
                throw new Exception("N1 ne dois pas etre null!! remplacer N1!");
            }
            if ($nombre2 == NULL)
            {
                throw new Exception("N2 ne dois pas etre null!! remplacer N2!");
            }
            $result = $nombre1 - $nombre2;
            return $result;
        }
        function Mul($nombre1, $Nombre2)
        {
            if ($nombre1 == NULL)
            {
                throw new Exception("N1 ne dois pas etre null!! remplacer N1!");
            }
            if ($nombre2 == NULL)
            {
                throw new Exception("N2 ne dois pas etre null!! remplacer N2!");
            }
            $result = $nombre1 * $nombre2; 
            return $result;
        }
        function Div($nombre1, $nombre2)
        {
            if ($nombre2==0)
            {
                throw new Exception("impossible de diviser par 0 !"); 
            }
            $result = $nombre1 / $nombre2; 
            return $result;     
        }
    }
?>
