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
           return $nombre1 + $nombre2;
            
        }
        function sou($nombre1, $nombre2)
        {
            if ($nombre1 == null) {
                throw new InvalidArgumentException("".T);
            }
            if ($nombre2 == null) {
                throw new InvalidArgumentException("".N);
            }
            return $nombre1 - $nombre2;
        }
        function mul($nombre1, $nombre2)
        {
            if ($nombre1 == null) {
                throw new InvalidArgumentException("".T);
            }
            if ($nombre2 == null) {
                throw new InvalidArgumentException("".N);
            }
            return $nombre1 * $nombre2;
           
        }
        function div($nombre1, $nombre2)
        {
            if ($nombre2==0) {
                throw new InvalidArgumentException("impossible de diviser par 0 !");
            }
            return $nombre1 / $nombre2;
            
        }
    }

    