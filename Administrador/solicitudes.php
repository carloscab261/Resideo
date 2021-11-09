<?php



include("./Navbar.php");

echo '
<!-- Contenido principal-->





<!-- Solicitudes activas-->
<div class="container">
  <div class="columns col-auto  m-4 row">


    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header"  id="headingOne">
          <button id="activas" class="accordion-button bg-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
            aria-expanded="true" aria-controls="collapseOne">
            Solicitudes Activas
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
          data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <!-- Contenido Activo-->








            <div class="columns m-4 row">
              <div class="list-group col-10">
                <a href="#" class="list-group-item list-group-item-action m-2" aria-current="true">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1"><b>
                      </b></h5>
                    <small>
                        </u></b>8/06/201
                    </small>
                  </div>
                  <h4 class="mt-1">
                    Carlos Cabrera
                  </h4>
                  <p class="mt-1">
                    Taladro inalambrico
                  </p>
                </a>
              </div>
              <div class="col-1 align-self-center">
                <button id="aceptar" class="btn btn-success m-1" data-toggle="modal" data-target="#ventanaEliminar">
                  Aceptar
                </button>
                <button id="rechazar" class="btn btn-success m-1" data-toggle="modal" data-target="#ventanaModificar">
                  Rechazar
                </button>
              </div>
            </div>



      </div>
        </div>
      </div>

      <!-- Inactivas-->


      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button id="prestamo" class="accordion-button collapsed bg-danger" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            En prestamo
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
          data-bs-parent="#accordionExample">
          <div class="accordion-body">

            <!-- Contenido inactivo-->
            <div class="columns m-4 row">
              <div class="list-group col-10">
                <a href="#" class="list-group-item list-group-item-action m-2" aria-current="true">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1"><b>
                      </b></h5>
                    <small>
                        </u></b>8/06/201
                    </small>
                  </div>
                  <h4 class="mt-1">
                    Carlos Cabrera
                  </h4>
                  <p class="mt-1">
                    Taladro inalambrico
                  </p>
                </a>
              </div>
              <div class="col-1 align-self-center">
                <button id="recibir" class="btn btn-success m-1 disabled" data-toggle="modal" data-target="#ventanaEliminar">
                  Recibir
                </button>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</html>




';


?>