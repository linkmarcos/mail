<?php
$archivo = 'texto.txt';

if (isset($_GET['archivo'])) {
     $archivo = $_GET['archivo'];
     if ($_GET['accion'] == 'Guardar cambios') {
          file_put_contents($archivo, $_GET['texto']);
     }
}


$texto = file_get_contents($archivo);


?>

<h1>Editar archivo de Texto</h1>

<form>
     <p>
          <label>Nombre del archivo:</label>
          <input type="text" name="archivo" value="<?= $archivo ?>">
     </p>
     <textarea name="texto"><?= $texto ?></textarea>
     <br>
     <input type="submit" value="Guardar cambios" name="accion" />
     <br>
     <input type="submit" value="Cargar" name="accion" />
</form>

<style>
     textarea {
          height: 210px;
          width: 310px;
          font-size: 25px;
     }
</style>
