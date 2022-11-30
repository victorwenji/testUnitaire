<?php
    include('function.php');
    
    use PHPUnit\Framework\TestCase;
    class functionTest extends TestCase
    {
        protected $pdo;
        public function getConnection()
        {
            
        }

        public function testinsert()
        {
            $info = new information();
            $info->insert(5,"pascal","loic");
        }        
}

?>