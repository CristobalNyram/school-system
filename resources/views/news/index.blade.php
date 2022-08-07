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
                                <a href="{{ route('news_create')}}" class="btn btn-primary">Agregar noticia</a>
                               
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
                                    <th scope="col text-center">Titulo</th>
                                    <th scope="col text-center">Contenido</th>
                    
                                    <th scope="col text-center" style="width: 20%">Acciones</th>
                                   
                                  </tr>
                                </thead>

                                <tbody id="datos_alumno">
                                    @foreach($news as $new)
                                    <tr>
                                        <td>{{$new->title}}</td>
                                        <td>{{$new->content}}</td>
                                      

                                        <td  class="d-flex">
                                            <form action="{{route('news_delete',$new)}}" method="POST">
            
                                                @method('DELETE')
                                                    @csrf
                                                    <input type="submit" 
                                                    class="btn btn-danger" 
                                                    value="Eliminar" 
                                                    onclick="return confirm('¿Desea eliminar esta noticia?')" >
                                            </form> 
                                         
                                            <button type="submit" id="Buscar"  class="btn btn-warning">Editar</button>
                                            <button type="submit" data-toggle="modal" data-target="#exampleModal"  class="btn btn-info">Ver</button>
        
                                        </td>
                                      
                                    </tr>
                                    @endforeach
                                   
                                </tbody>
                              </table>
                        </div>
                     </div>
                  </div>
            </div>
         </div>


         <button type="button" class="btn btn-primary" >
            Launch demo modal
          </button>
          
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Titulo de noticia</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             
                </div>
                <div class="modal-body">
                  Contenido
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar ventana</button>
                </div>
              </div>
            </div>
          </div>

@endsection