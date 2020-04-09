<h1>Cadastrar Novo Álbum</h1>
<br>
<a href="?page=albums" class="btn btn-info">Voltar para os Álbuns</a>
<hr>

<form action="#" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <input type="text" name="name" placeholder="Nome: " class="form-control">
    </div>
    <div class="form-group">
        <input type="file" name="image" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Cadastrar</button>

</form>
<br>
<hr>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $album = $_POST['name'];

    $path = "albums/{$album}";

    if (!is_dir($path)) {
        mkdir($path);
    }

    $file = $_FILES['image'];
    $fileInfo = explode('.', $file['name']);

    $extension = $fileInfo[1];
    $nameImage = $album . "." . $extension;

    if(move_uploaded_file($file['tmp_name'], $path . '/'.$nameImage)){
        header('Location: ?page=albums');
    }else{
        echo "Falha no upload...";
    }
}

?>
