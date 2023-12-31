<!doctype html>

<html lang="es">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Molis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

  <body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
          
        <a class="navbar-brand" style="margin-left: 20px;" href="#">
            <img src="img/logo.svg" alt="Bootstrap" width="30" height="24">
        </a>
       
      </nav>

      <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center"><h4>Crear Detalle</h4></div>
                    <div class="container">
                    <form method="post" action="crearCliente.php">
                            <div class="form-group">
                                <label for="nombre">Numero detalle:</label>
                                <input type="number" class="form-control" name="num_detalle" required>
                            </div>

                            <div class="form-group">
                                <label for="id_producto">ID producto:</label>
                                <input type="number" class="form-control" name="id_producto" required>
                            </div>

                            <div class="form-group">
                                <label for="cantidad">Cantidad:</label>
                                <input type="number" class="form-control" name="cantidad" required>
                            </div>

                            <div class="form-group">
                                <label for="precio">Precio:</label>
                                <input type="number" class="form-control" name="precio" required>
                            </div>

                            <button type="submit" style="margin-top: 20px; margin-bottom: 10px;" class="btn btn-primary">Crear detalle</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>

</html>