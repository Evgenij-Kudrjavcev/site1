<?php
class Model_Login extends Model
{
    public $message;
    public  function __construct(){
        parent::__construct();
        $this->db=new Model();
    }
    public function  valid_login(){
        if(!isset($_SESSION)){
         session_start();
        }
        /*
        if(isset($_SESSION["session_username"])){
            // вывод "Session is set"; // в целях проверки
           // header("Location: intropage.php");
             $this->message="МЫ УЖЕ ДАВНО";
        }
        */
        if(isset($_POST["login"])){
            if(!empty($_POST['username']) && !empty($_POST['password'])) {
                $username=$_POST['username'];
                $password=$_POST['password'];
                $sql=$this->db->query("select * from users where username_u='$username' and password_u='$password'");
                $numrows=$sql->fetch();
                if($numrows!=0)
                {
                  $sql=$this->db->query("select * from users where username_u='$username' and password_u='$password'");
                    while($row=$sql->fetch())
                    {
                        $dbusername=$row['username_u'];
                        $dbpassword=$row['password_u'];
                    }
                }

                    if($username == $dbusername && $password == $dbpassword)
                    {
                        // старое место расположения
                        //  session_start();
                        $_SESSION['session_username']=$username;
                        /* Перенаправление браузера */
                        $_SESSION['message']= "<h3 style='color: green'>OK</h3>";
                        return header('Location:/login/');

                    }
                } if($username !== $dbusername && $password !== $dbpassword) {
                       $_SESSION['message']= "<h3 style='color: red'>Invalid username or password!</h3>";
                       return header('Location:/login/');

                }
            }if(empty($dbusername) && empty($dbpassword)) {
                        $_SESSION['message']= "<h3 style='color: red'>All fields are required!</h3>";
                        return header('Location:/login/');

            }
        session_destroy();
    }
}