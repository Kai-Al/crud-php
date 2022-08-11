<?php include("db.php")?>
<?php include("includes/header.php")?>
    
   
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4">

                <?php if(isset($_SESSION['message'])){ ?>
                    <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                        <?= $_SESSION['message']?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php session_unset(); } ?>
                <div class="card card-body">
                    <form action="saveTask.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="title" placeholder="Tarea" class="form-control" autofocus>
                        </div>
                        <div class="form-group">
                            <textarea name="description" rows="2" placeholder="Descripción" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success btn-block" name="saveTask" value="Guardar">
                            Guardar
                        </button>
                    </form>
                </div> 

            </div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Descripción</th>
                            <th>Hora de creación</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM task";
                        $result = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_array($result)){ ?>
                            <tr>
                                <td><?php echo $row['title']?></td>
                                <td><?php echo $row['description']?></td>
                                <td><?php echo $row['created_at']?></td>
                                <td>
                                    <a href="editTask.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                                        <i class="fas fa-marker"></i>
                                    </a>
                                    <a href="deleteTask.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>


<?php include("includes/footer.php")?>