<h1>Músicas do álbum <?= strtoupper($_GET['album']) ?></h1>
<a href="?page=albums" class="btn btn-info">Voltar para os Álbuns</a>
<hr>

<?php
$album = $_GET['album'];
$musics = getMusic($album);
foreach ($musics as $music):
    ?>
<div class="col-12">
    <audio src="<?=$music?>" controls></audio>
</div>
<?php
endforeach;
?>
