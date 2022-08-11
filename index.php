<?php include("db.php")?>
<?php include("includes/header.php")?>
    
   
    <div class="container p-4">
    <h1>Administrador de tareas en PHP</h1>
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
                            <input type="text" name="tittle" placeholder="Tarea" class="form-control" autofocus>
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

            </div>
        </div>
    </div>


<?php include("includes/footer.php")?>