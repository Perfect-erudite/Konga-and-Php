<?php
    include("../php/connect.php");
    // class user{
    //     public $id, $email, $name, $gender, $age;
    // function __construct($id, $email, $name, $gender, $age){
    //     $this->id = $id;
    //     $this->email = $email;
    //     $this->name = $firstname;
    //     $this->gender = $lastname;
    //     $this->age = $age;
    // }

    //}
    // function getcurrentUserOrDie(){
    //     if(isset($_SESSION['id'])){
    //         return $_SESSION['id'];
    //     }
    //     else{
    //         echo "Not getting user";
    //     }
    // }


    // function getUser($id){
    //     $array = array();
    //     $sql = "SELECT * FROM users WHERE id = '$id'";
    //     $res=$con->query($sql);

    //     while($row = $result->fetch_assoc()){
    //         $array['id'] = $row['id'];
    //         $array['name'] = $row['name'];
    //     }
    //     return $array;
    // }

    // function getId($user){
    //     $sql = "SELECT id FROM users WHERE id = '$user'";
    //     $res=$con->query($sql);

    //     while($row = $result->fetch_assoc()){
    //         return $row['id'];
    //     }
    // }

    $email = $_POST['email'];
    $pwd = $_POST['password'];

    $sql = "SELECT * FROM users where email='$email' AND password='$pwd'";
    $result =$con->query($sql);

    if($num==1)
{
    session_start(); 
    echo $_SESSION['name']= $row['id'];
}

?>