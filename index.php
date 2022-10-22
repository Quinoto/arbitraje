<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <link href="img/amongus.png" rel="icon">
  </head>
  <body>
    <div class="row">
      <div class="col-4 text-center">
        Columna 4 grid
      </div>

      <div class="col-3 mt-5">
        <form>
          <div class="" >
              <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="usuario" aria-describedby="usuarioHelp">
                <div id="usuarioHelp" class="form-text">Ponete tu usuario chabon!</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Dark mode?</label>
              </div>
              <button type="submit" class="btn btn-primary container-fluid">Conectar</button>
          </div>
          
        </form>
      </div>

      <div class="col-4 text-center">
        Columna 4 grid
      </div>

    </div>
    <br><br><br>
    <div class="center">
      <style>
          img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            }
      </style>

      <img src="img/amongus.png" alt="Soy Amongus" 
            style="width: 25%; display: block; margin-left: auto; margin-right: auto">
    </div>
  </body>
</html>
