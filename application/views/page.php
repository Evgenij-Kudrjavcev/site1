<div id="state">
    <h3>Статьи</h3>
<? $i=1;foreach($data as $item):?>
   <p class="lead"> <a href="<?="http://vitaly/main/full/".$item['id_m'].""?>"><?=$i.") ".$item['theme_m']?></a></p></br>
    <?$i++?>
    <?endforeach?>
</div>