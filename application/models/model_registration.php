<?php
class Model_Registration extends Model
{
    public  function __construct(){
        parent::__construct();
        $this->db=new Model();
    }
    function validation()
    {
        if(!isset($_SESSION)){
            session_start();
        }
        if(isset($_POST["register"])){
    if(!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])) {
        $full_name=$_POST['full_name'];
        $email=$_POST['email'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $query=$this->db->query("SELECT * FROM users WHERE username_u='$username'");
        $numrows=$query->fetch(PDO::FETCH_ASSOC);
    if($numrows==0)
    {
        $sql="INSERT INTO users
        (fullname_u,email_u,username_u,password_u)
	     VALUES('$full_name','$email', '$username', '$password')";
         $result=$this->db->query($sql);
    if($result){
        $_SESSION['message']= "<h3 style='color: green'>Account Successfully Created</h3>";
        return header("Location:/login");
    } else {
        $_SESSION['message']= "<h3 style='color: red'>Failed to insert data information!</h3>";
        return header("Location:/registration");
    }
} else {
        $_SESSION['message']= "<h3 style='color: red'>That username already exists! Please try another one!</h3>";
        return header("Location:/registration");
}
	} else {
        $_SESSION['message']= "<h3 style='color: red'>All fields are required!</h3>";
        return header("Location:/registration");
    }
}
    }
}