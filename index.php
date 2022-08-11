<?php include("db.php")?>
<?php include("includes/header.php")?>
    
    <h1>Administrador de tareas en PHP</h1>
    <hr>
    <form action="index.php" method="post">
        <input type="text" name="tarea" placeholder="Ingrese una tarea">
        <input type="submit" value="Agregar tarea">
    </form>
    <hr>
    <?php
        $sql = "SELECT * FROM tareas";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)){
            echo "<p>".$row['tarea']."</p>";
        }
    ?>
<?php include("includes/footer.php")?>