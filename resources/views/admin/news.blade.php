@extends('layouts.admin')
@section('title',"Exportar Excel - UTTECAM")

@section('content')
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                <div class="main-header">
                    <h4><i class="ti-id-badge"></i> Noticias  </h4> 
                </div>
                </div>
            </div>
            <div class="row" >
                <div class="col-lg-12">
                     <div class="card">
                        <div class="card-block">
                            <center>
                                <button type="submit" id="Buscar"  class="btn btn-primary">Agregar noticia</button>
                               
                        </div>
                     </div>
                  </div>
            </div>
         </div>

         <div class="content-wrapper"  id="tablaDatos">
            <div class="row" >
                <div class="col-lg-12">
                     <div class="card">
                 
                        <div class="card-block">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col text-center">Noticia</th>
                                    <th scope="col text-center">Fecha de publicación</th>
                                    <th scope="col text-center">Tipo de publicación</th>
                                    <th scope="col text-center" style="width: 20%">Acciones</th>
                                   
                                  </tr>
                                </thead>

                                <tbody id="datos_alumno">
                                    <tr>
                                        <td>Noticia</td>
                                        <td>s</td>
                                        <td>Noticia</td>
                                        <td  class="d-flex">

                                            <button type="submit" id="Buscar"  class="btn btn-info">Editar noticia  </button>
                                         
                                            <button type="submit" id="Buscar"  class="btn btn-danger">Borrar noticia</button>

                                        </td>
                                      
                                    </tr>
                                   
                                </tbody>
                              </table>
                        </div>
                     </div>
                  </div>
            </div>
         </div>


@endsection