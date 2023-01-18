<?php
    class Calcul
    {
       const text = "N1 ne dois pas etre null!! remplacer N1!";
       
        function add($nombre1, $nombre2)
        {
            if ($nombre1 == null) {
                throw new Exception(text);
            }
            if ($nombre2 == null)
            {
                throw new Exception("N2 ne dois pas etre null!! remplacer N2!");
            }
            $result = $nombre1 + $nombre2;
            return $result;  
        }
        function Sou($nombre1, $nombre2)
        {
            if ($nombre1 == null)
            {
                throw new Exception("N1 ne dois pas etre null!! remplacer N1!");
            }
            if ($nombre2 == null)
            {
                throw new Exception("N2 ne dois pas etre null!! remplacer N2!");
            }
            $result = $nombre1 - $nombre2;
            return $result;
        }
        function mul($nombre1, $Nombre2)
        {
            if ($nombre1 == null)
            {
                throw new Exception("N1 ne dois pas etre null!! remplacer N1!");
            }
            if ($nombre2 == null)
            {
                throw new Exception("N2 ne dois pas etre null!! remplacer N2!");
            }
            $result = $nombre1 * $nombre2; 
            return $result;
        }
        function div($nombre1, $nombre2)
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
