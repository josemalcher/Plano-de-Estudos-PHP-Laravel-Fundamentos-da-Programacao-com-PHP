<h1>Álbum</h1>

<a href="?page=new_album" class="btn btn-success">Adicionar Novo Álbum</a>

<div class="row">
<?php

    $albums = getAlbums();
    //var_dump($albums);

    foreach ($albums as $album):
        $infoAlbum = explode('/', $album);
        $nameAlbum = $infoAlbum[1];
        //$imgAlbum = $album ."/". $nameAlbum. ".jpg"
        $imgAlbum = "{$album}/{$nameAlbum}.jpg";
?>
<div class="col-3 album">
        <a href="?page=musics&album=<?=$nameAlbum;?>">
            <img src="<?=$imgAlbum?>" alt="<?=$nameAlbum;?>" class="img-album">
            <h4><?=strtoupper($nameAlbum);?></h4>
        </a>
</div>
<?php
    endforeach;
?>
</div>