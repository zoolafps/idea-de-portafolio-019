<?php

include('db.php');


$directorio = '../images/';
$subir_archivo = $directorio.basename($_FILES['img']['name']);

if (move_uploaded_file($_FILES['img']['tmp_name'], $subir_archivo)) {
      echo "El archivo es válido y se cargó correctamente.";
    } else {
       echo "La subida ha fallado";
    }


if (isset($_POST['save_task'])) {
  $img = $_FILES['img']['name'];
  $title = $_POST['title'];
  $text = $_POST['text'];
  $code = $_POST['code'];
  $demo = $_POST['demo'];

  $query = "INSERT INTO proyectos (img, title, text, code, demo) VALUES ('$img', '$title', '$text', '$code', '$demo')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
