<?php
include('header.php');
?>

            <h1 class="pb-5">Transportes Salvador</h1>

            <form action="postEjercicio3.php" method="post">

                <div class="mb-3">
                    <label for="vehicle" class="form-label">Seleccione el tipo de vehículo a utilizar para la entrega:</label><br>
                    <select class="form-select" id="vehicle" name="vehicle" aria-label="Default select example">
                        <option value="c5" selected>Camión 5 ton</option>
                        <option value="c3">Camión 3 ton</option>
                        <option value="pi">Pickup</option>
                        <option value="pa">Panel</option>
                        <option value="mo">Moto</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="num" class="form-label">Ingrese la distancia en kilómetros a recorrer:</label><br>
                    <input type="number" class="form-control" name="num">
                </div>

                <div class="d-grid gap-2 col-6 mx-auto">
                    <input type="button" value="Calcular" class="btn btn-outline-dark text-uppercase mt-3" name="enviar">
                </div>
            </form>

<?php
include('footer.php');
?>