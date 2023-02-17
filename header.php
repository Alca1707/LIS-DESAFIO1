<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Desafío 1</title>

  <script>
    function switchB() {
      const fromC = document.getElementById('fromC');
      const toC = document.getElementById('toC');

      const fromCValue = fromC.value;
      const toCValue = toC.value;

      fromC.value = toCValue;
      toC.value = fromCValue;
    }

    window.addEventListener('popstate', function(event) {

      console.log(event.state);
    });

    function optSelected() {
      var path = window.location.pathname;
      console.log(path);
    }
  </script>
</head>

<body>
  <nav class="navbar navbar-expand bg-light">
    <div class="container-fluid">
      <b>
        <a class="navbar-brand" href="index.php">Desafío 1</a>
      </b>
      <div class="" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="ejercicio1.php">Ejercicio 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ejercicio2.php">Ejercicio 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ejercicio3.php">Ejercicio 3</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>