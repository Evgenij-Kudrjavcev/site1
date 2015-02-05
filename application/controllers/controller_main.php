<?php

class Controller_Main extends Controller
{

	function action_index()
	{
		$this->view->generate('main_view.php', 'template_view.php');
    }
    function action_content($data=null)
    {

        $model=new Model_Main();
        $data=$model->get_state($data);
        $this->view->generate('page.php','template_view.php',$data);


    }
     function  action_full($id=null)
    {
        session_start();
        $model=new Model_Main();
        $data=$model->get_full($id);
        $this->view->generate('fulltext.php','template_view.php',$data);
        $id = explode('/', $_SERVER['REQUEST_URI']);
        $_SESSION['id']=$id[3];
    }
    function action_addcomment($id=null)
    {
        session_start();
        $message=$_POST['message'];
        $model=new Model_Main();
        $model->addcomment($id,$message);
        header('Location:/main/full/'.$_SESSION['id'].'');
        print_r($_SESSION['id']);
    }


   
    
}