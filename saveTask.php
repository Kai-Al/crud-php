<?php 

include ("db.php");

if(isset($_POST['saveTask'])){
    $tittle = $_POST['title'];
    $description = $_POST['description'];

    $query = "INSERT INTO task(title, description) VALUES('$tittle', '$description')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Query failed");
    }
    $_SESSION['message'] = "Tarea guardada correctamente";
    $_SESSION['message_type'] = "success";
    header("Location: index.php");
}

?>