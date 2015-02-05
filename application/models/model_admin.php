<?php
class Model_Admin extends Model{
    public  function __construct(){
        parent::__construct();
        $this->db=new Model();
    }
    public function get_content(){
        $res=$this->db->query("SELECT * FROM materials");
        $res=$res->fetchAll(PDO::FETCH_ASSOC);
        foreach($res as $item){
            $this->data[]=$item;
        }
        $this->db=null;
        return $this->data;
    }
    public function add_content(){
        $result='';
            (isset($_POST['section_m']))?$section=$_POST['section_m']:$section=null;
            (isset($_POST['theme_m']))?$theme=$_POST['theme_m']:$theme=null;
            (isset($_POST['message_m']))?$message=$_POST['message_m']:$message=null;
        if($section=='php'or$section=='css'or$section=='mvc'){
       $sql=$this->db->query("select * from materials where theme_m='$theme'");
       $numrows=$sql->fetch();
       if($numrows==0){
           $sql="INSERT INTO materials(id_m,section_m,theme_m,content_m)
	                            VALUES(id_m,'$section', '$theme', '$message')";
           $result=$this->db->query($sql);

           //if($_FILES['filename']['error'] == 0){

               //print_r($_FILES);
               //$id=$this->db->lastInsertId();
               //mkdir($_SERVER['DOCUMENT_ROOT']."/ball/images/".$id,0777);
               /*выбираем путь временного хранилища файла*/
               //  $temp=$_FILES['filename']['tmp_name'];
                 //$name=$_FILES['filename']['name'];
                 //var_dump($temp);
                /*выбираем путь, куда будем сохранять файл*/
                //$dir=$_SERVER['DOCUMENT_ROOT']."/ball/images/";

                /*перемещаем файл из временной папки к нам на сервер*/
                //move_uploaded_file($temp,$dir."/".$id."/".$name);
           //}

       }
            $valid=$_FILES['filename']['name'][0];
            var_dump($valid);
            if($valid==true){
                $id=$this->db->lastInsertId();
                mkdir($_SERVER['DOCUMENT_ROOT']."/ball/images/".$id,0777);
                for ($i=0; $i<=count($_FILES); $i++) {
                    $uploadFile = $_SERVER['DOCUMENT_ROOT']."/ball/images/".$id."/".basename($_FILES['filename']['name'][$i]);
                    if (copy($_FILES['filename']['tmp_name'][$i], $uploadFile))
                    {
                        echo "<h3>Файл успешно загружен на сервер</h3>";

                    }
                    else { echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>";}
                }
            }
        if($result){
           echo"Статья добавлена";
        }else{
            echo "такая тема уже существует";
        }
        }else
            echo"такого раздела нету ,либо вы не заполнили поле ";
            //return header("Location :/admin");
}
    public function delete_state($id){
         $sql=("DELETE materials,comments FROM materials LEFT JOIN comments
                                          ON materials.id_m=comments.theme_id_c where materials.id_m='$id'");
         $result=$this->db->query($sql);
        if($result){
            //var_dump($result);
            echo "удалена";
        }else{
            echo"ошибка";
           // var_dump($result);
        }
    }
}