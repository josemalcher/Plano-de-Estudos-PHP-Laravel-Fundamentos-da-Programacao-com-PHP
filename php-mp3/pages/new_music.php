<h1>Cadastrar Nova Música</h1>
<hr>
<div class="row">

    <div class="col-6">
        <h3>Álbum Selecionado:<?=strtoupper($_GET['album'])?></h3>
    </div>
    <div class="col-6">
        <a href="?page=albums" class="btn btn-info">Ver todas as músicas <?=strtoupper($_GET['album'])?></a>
    </div>
</div>
<hr>
<div class="row">

</div>
<div class="row">
    <div class="col-3">
        <h5>Selecione Novas músicas</h5>
    </div>
    <div class="col-9">
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="file" name="audio" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </form>
    </div>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $album = $_GET['album'];

    $path = "albums/{$album}/musics/";

    if (!is_dir($path)) {
        mkdir($path);
    }

    if(move_uploaded_file($_FILES['audio']['tmp_name'], $path . $_FILES['audio']['name'])){
        header("Location: ?page=musics&album={$album}");
    }else{
        echo "Falha no upload";
    }

}
?>
