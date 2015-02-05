<?php

class Controller_Login extends Controller
{
    function action_index()
    {
        $data='';
        if(!isset($_SESSION)){
            session_start();
        }
        if(isset($_SESSION['message'])){
            $data=$_SESSION['message'];
        }
        $this->view->generate('login.php', 'template_view.php',$data);
        unset($_SESSION['message']);
    }
    function action_valid(){
         $valid_login=new Model_Login();
         $this->message=$valid_login->valid_login();
    }
    function action_exit()
    {
        session_start();
        unset($_SESSION['session_username']);
        session_destroy();
        header("location:/");
    }

}