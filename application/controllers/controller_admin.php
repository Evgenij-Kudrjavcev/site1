<?php

class Controller_Admin extends Controller{

    function action_index(){
        $model=new Model_Admin();
        $data=$model->get_content();
        $this->view->generate('admin_content.php','admin.php',$data);
    }
    function action_add(){
        $model=new Model_Admin();
        if(isset($_POST['submit']));
        $data=$model->add_content();
        $this->view->generate('admin_add.php','admin.php',$data);
    }
    function action_delete($id){
        $model=new Model_Admin();
        $model->delete_state($id);
    }
}