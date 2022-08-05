@extends('layouts.admin')
@section('title',"Exportar Excel - UTTECAM")

@section('content')
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                <div class="main-header">
                    <h4>Buscar Alumno - Excel</h4>
                </div>
                </div>
            </div>
            <div class="row" >
                <div class="col-lg-12">
                     <div class="card">
                        <div class="card-block">
                            <div id="Mensaje">

                            </div>
                            @error('alumno')
							    <div class="alert alert-warning">{{ $message }}</div>
						    @enderror
                           <form action="{{ route('report_excel_export_alumno')}}" method="POST">
                            @csrf
                               <div class="row">
                                    <div class="form-group col-lg-3">
                                        <label for="matricula"  class="form-control-label">Matrícula</label>
                                        <input type="number" id="matricula" class="form-control" name="matricula"  value="{{ old('matricula') }}"  required>
                                    </div>
                               </div>
                               <center>
                                    <button type="submit" valu class="btn btn-success">Exportar Historial Alumno</button>
                              </center>
                           </form>
                           <br>
                           <center>
                            <button type="submit" id="Buscar" onclick="buscarAlumno();" class="btn btn-primary">Ver Historial</button>
                            <p id="carga" style="display: none">Cargando...</p>
                      </center>
                        </div>
                     </div>
                  </div>
            </div>
         </div>

         <div class="content-wrapper" style="margin-top: -15px;display: none;" id="tablaDatos">
            <div class="row" >
                <div class="col-lg-12">
                     <div class="card">
                        <div class="col-lg-12" style="margin-top: 1em;border-bottom: 2px solid green;">
                            <table style="width: 100%;text-align: center">
                                  <tr>
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Télefono</th>
                                    <th class="text-center">Edad</th>
                                  </tr>
                                  <tr>
                                      <td id="nombre"></td>
                                      <td id="telefono"></td>
                                      <td id="edad"></td>
                                  </tr>
                                <tr>
                                    <th class="text-center">Género</th>
                                    <th class="text-center">Carrera</th>
                                    <th class="text-center">Cuatrimestre</th>
                                </tr>
                                <tr>
                                    <td id="genero"></td>
                                    <td id="carrera"></td>
                                    <td id="cuatri"></td>
                                </tr>
                              </table>
                        </div>
                        <div class="card-block">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col text-center">Fecha</th>
                                    <th scope="col text-center">Resultado</th>
                                    <th scope="col text-center">Puntos</th>
                                    <th style="width: 10px" id="comprobante"></th>
                                  </tr>
                                </thead>
                                <tbody id="datos_alumno">

                                </tbody>
                              </table>
                        </div>
                     </div>
                  </div>
            </div>
         </div>

         <script>

                function buscarAlumno(){
                    document.getElementById('carga').style.display = '';
                    let matricula = document.getElementById('matricula').value;
                    if(matricula != ''){
                        $.ajax({
                        url: "{{ route('buscar_alumno_online')}}",
                        data: "matricula="+matricula+"&_token={{ csrf_token()}}",
                        dataType: "json",
                        method: "POST",
                        success: function(result)
                        {   
                            document.getElementById('carga').style.display = 'none';
                            var tabla = '';
                            if(result['datos'].length >=  1){
                                result['datos'].forEach( function(valor, indice, array) {
                                tabla += "<tr><td>"+valor.fecha+"</td><td>"+valor.resultado+"</td><td>"+valor.puntos+"</td></tr>";
                                });
                                document.getElementById('datos_alumno').innerHTML = tabla;
                                document.getElementById('tablaDatos').style.display = '';
                                document.getElementById('Mensaje').innerHTML = '';

                                document.getElementById('nombre').innerHTML = result['Alumno'][0]['nombre'];
                                document.getElementById('telefono').innerHTML = result['Alumno'][0]['telefono'];
                                document.getElementById('edad').innerHTML = result['Alumno'][0]['edad'];
                                document.getElementById('genero').innerHTML = result['Alumno'][0]['genero'];
                                document.getElementById('carrera').innerHTML = result['Alumno'][0]['carrera'];
                                document.getElementById('cuatri').innerHTML = result['Alumno'][0]['cuatrimeste'];
                                if(result['comp'][0]['urlPDF'] != 'null'){
                                    document.getElementById('comprobante').innerHTML = '<a target="_blank" href="'+result['comp'][0]['urlPDF']+'" class="btn btn-black">Comprobante</a>';
                                }
                            }else{
                                document.getElementById('datos_alumno').innerHTML = '';
                                document.getElementById('tablaDatos').style.display = 'none';
                                document.getElementById('Mensaje').innerHTML = '<p class="alert alert-warning">¡Alumno no encontrado, con la matricula ingresada!</p>';
                            }
                            
                        },
                        fail: function(){
                            document.getElementById('carga').style.display = '';
                        },
                        beforeSend: function(){
                            
                            
                        }
                    });  
                    }else{
                        document.getElementById('Mensaje').innerHTML = '<p class="alert alert-warning">INGRESA UNA MATRICULA</p>';
                    }
                   
                }
         </script>
@endsection