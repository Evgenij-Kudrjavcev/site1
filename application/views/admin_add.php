<form action= "//vitaly/admin/add" method= "POST" enctype="multipart/form-data">>
    <p>Раздел статьи</p><p><label><input class="input" id="section_m" name="section_m"size="20"type="text" value=""></label></p>
    <p>Тема</p><p><label><input class="input" id="theme_m" name="theme_m"size="20"type="text" value=""></label></p>
    <p>Текст Статьи: </p><p> <textarea rows= "10" cols= "45" name= "message_m"></textarea></p>
    <p>Добавление изображения</p><p><input type="file" name="filename[]"multiple="true" min="1" max="9999"/></p>
     <input type="submit" name="submit"value="Отправить" >
</form>
<?=$data;