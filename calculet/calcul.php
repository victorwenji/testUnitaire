<?php
    class Calcul
    {
       const T = "N1 ne dois pas etre null!! remplacer N1!";
       const N = "N2 ne dois pas etre null!! remplacer N2!";
        function add($nombre1, $nombre2)
        {
            if ($nombre1 == null) {
                throw new InvalidArgumentException("".T);
            }
            if ($nombre2 == null) {
                throw new InvalidArgumentException("".N);
            }
            $result = $nombre1 + $nombre2;
            return $result;
        }
        function Sou($nombre1, $nombre2)
        {
            if ($nombre1 == null)
            {
                throw new InvalidArgumentException("".T);
            }
            if ($nombre2 == null)
            {
                throw new InvalidArgumentException("".N);
            }
            $result = $nombre1 - $nombre2;
            return $result;
        }
        function mul($nombre1, $Nombre2)
        {
            if ($nombre1 == null)
            {
                throw new InvalidArgumentException("".T);
            }
            if ($nombre2 == null)
            {
                throw new InvalidArgumentException("".N);
            }
            $result = $nombre1 * $nombre2;
            return $result;
        }
        function div($nombre1, $nombre2)
        {
            if ($nombre2==0)
            {
                throw new InvalidArgumentException("impossible de diviser par 0 !");
            }
            $result = $nombre1 / $nombre2;
            return $result;
        }
    }
?>
