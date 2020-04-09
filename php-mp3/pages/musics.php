<h1>Músicas do álbum <?= strtoupper($_GET['album']) ?></h1>
<div class="row">
    <div class="col-12">
        <a href="?page=albums" class="btn btn-info">Voltar para os Álbuns</a>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-12">
        <a href="?page=new_music&album=<?=$_GET['album']?>" class="btn btn-success">Adicionar Nova Música</a>
    </div>
</div>
<br>
<?php
$album = $_GET['album'];
$musics = getMusic($album);
foreach ($musics as $music):
    ?>
    <div class="row">
        <div class="col-12">
            <audio src="<?= $music ?>" controls></audio>
        </div>
    </div>
<?php
endforeach;
?>
