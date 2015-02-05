<?php
foreach($data as $item){
    echo $item['id_m'].'<br>';
    echo $item['section_m'].'<br>';
    echo $item['theme_m'].'<br>';
    echo $item['content_m'].'<br>';
    echo'<a href="//vitaly/admin/delete/'.$item['id_m'].'">Удалить статью</a><br>';
}
?>
<p>
<a href="//vitaly/admin/add">Добавить статью</a><br>
</p>