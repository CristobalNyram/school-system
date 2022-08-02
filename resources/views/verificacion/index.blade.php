@extends('layouts.verificacion')
<link rel="icon" type="image/png" href="/images/escudo_borde.png" />

@section('title',"VERIFICACIÓN - UTTECAM")

@section('content')

<section class="" >
	<div class="m-3">
		<div class="row m-15">
            <div class="col-sm-8">
                <div class="card">
                    <h4 class="card-header">Verificación</h4>
                    <div class="card-body">
                         <video id="lector" style="width: 100%;"></video>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                  <h4 class="card-header">Resultados</h4>
                       <div id="resultados">
                        <div class="row">
                          <div class="col-lg-12">
                          <div class="alert text-center" role="alert" id="alert">
                            <h1 id="mensaje"></h1>
                          </div>
                           <div class="col-lg-12 text-center">
                              <p><b>Nombre De Alumno: </b></p>
                              <p id="nombre"></p>
                          </div>
                          <div class="col-lg-12 text-center">
                              <p><b>Matricula: </b></p>
                              <p id="matricula"></p>
                          </div>
                          <div class="col-lg-12 text-center">
                              <p><b>Carrera: </b></p>
                              <p id="carrera"></p>
                          </div>
                          <div class="col-lg-12 text-center">
                            <p><b>Contesto Encusta: </b></p>
                            <p id="fecha_contesto"></p>
                        </div>
                          </div>
                      </div>
                       </div>
                  </div>
              </div>
          </div>
		</div>
	</div>
</section>
</center>
<script>
  var resultados = document.getElementById('resultados');
  resultados.style.display = 'none';
</script>
@endsection