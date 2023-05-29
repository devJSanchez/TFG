<?php
  // Recibe los parámetros enviados desde la aplicación Android
$parametro1 = $_POST['parametro1'];
$parametro2 = $_POST['parametro2'];
$parametro3 = $_POST['parametro3'];
// ...

// Realiza las modificaciones necesarias en el archivo HTML
// ...

// Guarda los cambios en el archivo HTML
$file = 'C:\Users\Jorge\Desktop\TFG\ComeRest_HTML\index.html';
$data = 'Contenido modificado del archivo HTML';

header("Location: index.html?parametro1=$parametro1&parametro2=$parametro2&parametro3=$parametro3");

if (file_put_contents($file, $data) !== false) {
    echo 'Archivo HTML modificado correctamente.';
} else {
    echo 'Error al modificar el archivo HTML.';

}
exit();
?>