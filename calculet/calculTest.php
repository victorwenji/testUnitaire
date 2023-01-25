<?php
    //class de test
    use PHPUnit\Framework\TestCase;
    include("calcul.php");
    // use calcul;
    class CalculTest extends TestCase
    {
        //verifie si laddition fonctionne 
        public function TestAdd()
        {
            $calc = new calcul();
            $this->assertEquals(5, $calc->add(2, 3));
        }

        public function TestAddN1IsNull()
        {
            $calc = new calcul();
            $this->expectException(Exception::class);
            $this->expectExceptionMessage("N1 ne dois pas etre null!! remplacer N1!");
            $calc->add(null, 5);
            //$this->assertEquals(5, $calc->add(2,3));
        }
        public function TestAddN2IsNull()
        {
            $calc = new calcul();
            $this->expectException(Exception::class);
            $this->expectExceptionMessage("N2 ne dois pas etre null!! remplacer N2!");
            $calc->add(5, null);
            //$this->assertEquals(5, $calc->add(2, 3));
        }
        public function TestSou()
        {
            $calc = new calcul();
            $this->assertEquals(5, $calc->sou(8, 3));
        }
        public function TestMul()
        {
            $calc = new calcul();
            $this->assertEquals(6, $calc->Mul(2, 3));
        }
        public function TestDivN2IsNull()
        {
            $calc = new calcul();
            
            $this->expectException(Exception::class);
            $this->expectExceptionMessage("impossible de diviser par 0 !");
            $calc->div(15, 0);
            // $this->assertEquals(5, $calc->div(15, 0));
        }
        public function testDiv()
        {
            $calc = new calcul();
            $this->assertEquals(5, $calc->div(15, 3));
        }
    }
?>