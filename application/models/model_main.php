<?php
class Model_Main extends Model{
    public  function __construct(){
         parent::__construct();
         $this->db=new Model();
     }
    public function get_state($section){
        $res=$this->db->query("SELECT * FROM materials WHERE materials.section_m='$section'");
        $res=$res->fetchAll(PDO::FETCH_ASSOC);
        foreach($res as $item){
            $this->data[]=$item;
        }
        $this->db=null;
        return $this->data;
    }
    public function get_full($id){
        $res=$this->db->query("select * from materials as m left join
                                            comments as c on m.id_m=c.theme_id_c where m.id_m='$id'");
        $res=$res->fetchAll(PDO::FETCH_ASSOC);
        foreach($res as $item){
            $this->data[]=$item;
        }
        $this->db=null;
        return $this->data;
    }
    public function addcomment($id=null,$message=null)
    {   //session_start();
        $user=$_SESSION['session_username'];
        if(!empty($user))
        {
        $res=$this->db->query("INSERT INTO comments(id_c,theme_id_c,message_c,username_c)
                               VALUES(id_c,'$id','$message','$user')");
        $res=$res->fetchAll(PDO::FETCH_ASSOC);
        foreach($res as $item){
            $this->data[]=$item;
        }
            $this->db=null;
            return $this->data;
        }else{
        $_SESSION['message']="<h3 style='color: red'>Вы не зарегистрированы</h3>";
        $this->db=null;
        return ;
        }
    }

}