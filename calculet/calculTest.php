
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
            $Calc = new calcul();
            $this->assertEquals(5, $Calc->add(2, 3));
        }

        public function TestAddN1IsNull()
        {
            $Calc = new calcul();
            $this->expectException(Exception::class);
            $this->expectExceptionMessage("N1 ne dois pas etre null!! remplacer N1!");
            $Calc->add(null, 5);
            //$this->assertEquals(5, $calc->add(2,3));
        }
        public function TestAddN2IsNull()
        {
            $Calc = new calcul();
            $this->expectException(Exception::class);
            $this->expectExceptionMessage("N2 ne dois pas etre null!! remplacer N2!");
            $Calc->add(5, null);
            //$this->assertEquals(5, $calc->add(2, 3));
        }
        public function TestSou()
        {
            $Calc = new calcul();
            $this->assertEquals(5, $Calc->sou(8, 3));
        }
        public function TestMul()
        {
            $Calc = new calcul();
            $this->assertEquals(6, $Calc->Mul(2, 3));
        }
        public function TestDivN2IsNull()
        {
            $Calc = new calcul();
            
            $this->expectException(Exception::class);
            $this->expectExceptionMessage("impossible de diviser par 0 !");
            $Calc->div(15, 0);
            // $this->assertEquals(5, $calc->div(15, 0));
        }
        public function testDiv()
        {
            $Calc = new calcul();
            $this->assertEquals(5, $Calc->div(15, 3));
        }
    }
?>