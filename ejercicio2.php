<?php
include('header.php');
?>


<div class="container text-center position-absolute top-50 start-50 translate-middle">
    <div class="row d-flex align-items-center" id="rowC">
        <div class="col">
            <h1 class="pb-5">Conversor de unidades</h1>
            <form action="index.php" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">Ingrese la cantidad a convertir:</label><br>
                    <input type="number" class="form-control" name="num">
                </div>
                <div class="mb-2">
                    <select class="form-select" id="fromC" aria-label="Default select example">
                        <option value="m" selected>Metros</option>
                        <option value="in">Pulgadas</option>
                        <option value="yd">Yardas</option>
                        <option value="ft">Pie</option>
                    </select>
                </div>

                <button type="button" class="btn btn-secondary mb-2" onclick="switchB()">&#10606;</button>

                <div class="mb-2">
                    <select class="form-select" id="toC" aria-label="Default select example">
                        <option value="m">Metros</option>
                        <option value="in" selected>Pulgadas</option>
                        <option value="yd">Yardas</option>
                        <option value="ft">Pie</option>
                    </select>
                </div>

                <div class="d-grid gap-2 col-6 mx-auto">
                    <input type="button" value="Convertir" class="btn btn-outline-dark text-uppercase mt-3" name="enviar">
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include('footer.php');
?>