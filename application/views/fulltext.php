<div>
    <p><?=$data[0]['theme_m']?></p>
    <p><?=$data[0]['content_m']?></p>
<?foreach($data as $item):?>
    <div class="alert alert-info">
   <p><?=$item['message_c']?></p>
    </div>
<?endforeach?>
    <h3>Добавить комментарий</h3>
    <form action= "<?="http://vitaly/main/addcomment/".$data[0]['id_m'].""?>" method= "POST">
        <p>Сообщение: </p><p> <textarea rows= "10" cols= "45" name= "message"></textarea></p>
        <input type= "submit" value= "Отправить">
    </form>
    <p><? if(isset($_SESSION['message']))echo $_SESSION['message']?></p>
</div>

