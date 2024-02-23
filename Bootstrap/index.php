<!Doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="estilos.css" rel="stylesheet">
  </head>
  <body>
    <div class="container-fluid text-center">
      <div class="row">
        <div class="col">
          <div class="container mt-5">
            <div class="row justify-content-center">
              <div class="col">
                <h2 class="text-center mt-5">Login</h2>
                <form>
                  <div class="form-group">
                    <input type="email" class="form-control mt-5 w-50 mx-auto" id="email" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control mt-3 w-50 mx-auto" id="password" placeholder="Contraseña">
                  </div>
                  <button type="submit" class="btn btn-block mt-4 w-50 mx-auto botonIniciarSesion">Iniciar sesion</button>
                </form>
                <div class="text-center mt-4">
                  <a href="#">¿Olvidó su contraseña?</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col w-100" id="divPrincipal">
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  </body>
</html>

