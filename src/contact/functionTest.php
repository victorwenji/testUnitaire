<?php
    use contact\function;

    use PHPUnit\Framework\TestCase;

    class FunctionTest extends TestCase
    {
        protected $pdo;
        public function testinsert()
        {
            $info = new information();
            $info->insert(5, "pascal", "loic");
            assertEquals("Le produit ne peut pas être null", e.getMessage());
        }
    }

