<?php

class Controller_Registration extends Controller
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
        $this->view->generate('registration.php', 'template_view.php',$data);
        unset($_SESSION['message']);
    }
    function action_valid()
    {
        $valid=new Model_Registration();
        $valid->validation();


    }

}