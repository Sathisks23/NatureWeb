

<?php


class Connection{
    public $connect ;
    public $host;
    public $dbname;
    public function __construct($config,$user ='dckap',$password='Dckap2023Ecommerce'){
        try{
            $dsn ='mysql:'.http_build_query($config,'',';');
            $this->connect = new PDO($dsn,$user,$password,[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
          );
        }catch(Exception $e){
             echo('dddf');
        }
    }

    function insert($name,$email,$password){
        $sql = "INSERT INTO nuser(name,email,password) values(?,?,?)";
        $add = $this->connect->prepare($sql);
        $add->execute([$name,$email,$password]);
    }

    function getUserByEmail($email){
        $sql = "SELECT * FROM nuser WHERE email = ?";
        $result = $this->connect->prepare($sql);
        $result->execute([$email]);
        return $result->fetch();
    }


    function getUser(){
        $sql = "SELECT * FROM nuser";
        $result = $this->connect->prepare($sql);
        $result->execute();
        return $result->fetchAll();
    }

    function getUserByID($id){
        $sql = "SELECT * FROM nuser WHERE id = ?";
        $result = $this->connect->prepare($sql);
        $result->execute([$id]);
        return $result->fetch();
    }

    function UpdateUserById($id,$name,$email){
        $sql = "UPDATE nuser set name=?,email=? WHERE id = ? ";
        $result = $this->connect->prepare($sql);
        $result->execute([$name,$email,$id]);
        return "Updated Sussesfully";
    }

    function Delete($id){
        $sql = "DELETE from nuser WHERE id=?";
        $result = $this->connect->prepare($sql);
        $result->execute([$id]);
        return "Delete Sussesfully";
    }

    function InsertBYID($name,$email,$password,$id,$profile){
        $sql ="INSERT INTO nuser (name,email,password,profile) values(?,?,?) WHERE id=?";
        $result = $this->connect->prepare($sql);
        $result->execute([$name,$email,$password,$id,$profile]);
        return "Insert Sussesfully";
    }
}



