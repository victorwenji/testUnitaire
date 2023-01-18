<?php
 //fonction de la table
//  require 'DBcon.php';
class information{
    private $pdo;

    function __construct() {
        $this->pdo  = new PDO('sqlite:C:\\Sqlite\\info');
    }
     
    function insert($id,$firstname,$lastname){  
        $sql = "INSERT INTO contact(id, name, lastname) values(?, ?, ?)";
        $q = $this->pdo->prepare($sql);
        $q->execute(array( $id, $firstname, $lastname));     
    }

    function select($id){
        $pdo=Database::connect();
        $sql = "SELECT * FROM contact where id =?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);

        Database::disconnect();
    }

    function update($id, $name, $lastname)
    {
        $pdo=Database::connect();
        $sql = "UPDATE contact SET id =$id, name = $name, lastname = $lastname";
        $q = $pdo->prepare($sql);
        $q->execute(array($id, $name, $firstname));

        Database::disconnect();
    }
    function delete($id)
    {
        $pdo=Database::connect();
        $sql = "DELETE FROM user  WHERE id = $id";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));

        Database::disconnect();
    }

}
?>





