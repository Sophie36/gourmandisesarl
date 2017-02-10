<?php

class Login {
   
    private $login;
    private $motpasse;
    private $CXN; //database object
    
    function __construct($login, $motpasse)
    {
        //set data
        $this->setData($login, $motpasse);
        //connect db
        $this->connectToDb();
        //get data        
        
    }
    
    private function setData($login,$motpasse)
    {
        $this->login = $login;
        $this->motpasse = $motpasse;
    }
    
    private function connectToDb()
    {
        //on a creer un objet de la classe database
        
        include 'modele/DataBase.php';
        $vars='include/infoConnexion.php';
        $this->CXN=new DataBase($vars);
    }
    
    function getData()
    {
        $query =("SELECT * FROM utilisateurs  WHERE login = '$this->login' AND motpasse = '$this->password' ");
        $sql   =mysql_query($query);
        if (mysql_num_rows($sql)>0)
        {
            return TRUE;
        }
        else
        {
            throw new Exception('login ou motpassse wrong');
        }
    }
    
    function close()
    {
        $this->CXN->close();
    } 
}

?>

