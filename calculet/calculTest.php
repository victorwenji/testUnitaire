
<?php
    //class de test
    use PHPUnit\Framework\TestCase;
    include("calcul.php");
    // use calcul;
    class calculTest extends TestCase
    {
        //verifie si laddition fonctionne 
        public function testAdd()
        {
            $calc = new calcul();
            $this->assertEquals(5, $calc->add(2,3));
        }

        public function testAddN1IsNull()
        {
            $calc = new calcul();
            $this->expectException(Exception::class);
            $this->expectExceptionMessage("N1 ne dois pas etre null!! remplacer N1!");
            $calc->add(null,5);
            //$this->assertEquals(5, $calc->add(2,3));
        }
        public function testAddN2IsNull()
        {
            $calc = new calcul();
            $this->expectException(Exception::class);
            $this->expectExceptionMessage("N2 ne dois pas etre null!! remplacer N2!");
            $calc->add(5,null);
            //$this->assertEquals(5, $calc->add(2,3));
        }
        public function testSou()
        {
            $calc = new calcul();
            $this->assertEquals(5, $calc->sou(8,3));
        }
        public function testMul()
        {
            $calc = new calcul();
            $this->assertEquals(6, $calc->Mul(2,3));
        }
        public function testDivN2IsNull()
        {
            $calc = new calcul();
            
            $this->expectException(Exception::class);
            $this->expectExceptionMessage("impossible de diviser par 0 !");
            $calc->div(15,0);
            // $this->assertEquals(5, $calc->div(15,0));
        }
        public function testDiv()
        {
            $calc = new calcul();
            $this->assertEquals(5, $calc->div(15,3));
        }
    }
?>