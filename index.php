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
        <div class="container-fluid">
          
        <a class="navbar-brand" href="#">
            <img src="img/logo.svg" alt="Bootstrap" width="30" height="24">
        </a>
          <a class="navbar-brand" href="#">Molis</a>
        
 

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="clientes.php">Clientes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="categorias.php">Categoría</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Factura
                </a>  
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Facturas</a></li>
                  <li><a class="dropdown-item" href="modopago.php">Modo pago</a></li>
                  <li><a class="dropdown-item" href="detalle.php">Detalle</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="pago.php">Pago</a></li>
                </ul>
              </li>

            </ul>

            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>

          </div>
        </div>
      </nav>

      <a href="crearProducto.php" style="margin: 20px;" type="submit" class="btn btn-outline-dark">Agregar producto</a>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>

</html>