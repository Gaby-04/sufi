<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <title>Login</title>
  <style>
    body {
      background: linear-gradient(to right, #FF8FB1, #FFACC7, pink);
    }

    h1 {
      font-family: 'Nerko One', cursive;
      text-shadow: 0 0 0.3em #F87, 0 0 0.3em #F87;
      padding: 0.5em;
    }

    h3 {
      font-family: 'Acme', sans-serif;
      text-shadow: 0 0 0.3em #F87, 0 0 0.3em #F87;
      padding: 0.5em;
    }

    a {
      color: black;
      text-decoration: none;

    }

    form {

      margin: 0 auto;
      width: 900px;
      padding: 1em;
      margin-top: 120px;
      border-left: #C147E9 7px solid;
      border-right: #810CA8 7px solid;
      border-bottom: #C539B4 7px solid;
      border-top: #8D72E1 7px solid;
      border-radius: 1em;
      color: black;
    }
  </style>
</head>

<body>
  <div class="container-sm hola">
  <center>
        <h1>BIENVENIDOS A MI PAGINA</h1>
        </center> 
    <form action="#" method="post">
      @csrf
      @METHOD ('POST')
      <div class="mb-3 row">
      <center>
        <h3>Inicie sesion</h3>
        <br>
        </center> <br>
        <div class="mb-3 row">
          <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" name="email" class="form-control" id="Email">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" name="pass" class="form-control" id="contra">
          </div>

        </div>
        <div class="mb-3 row">
          <div class="col-sm-10">
            <center>
              <button class="btn btn-primary" type="submit">INGRESAR</button>
            </center>
          </div>
        </div>
    </form>
  </div>



</body>

</html>