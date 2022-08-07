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
                                    <th scope="col text-center">Imagen</th>
                                    <th scope="col text-center">Dirigido para</th>
                                    <th scope="col text-center">Publicado por</th>
                                    <th scope="col text-center" style="width: 20%">Acciones</th>
                                   
                                  </tr>
                                </thead>

                                <tbody id="datos_alumno">
                                    @foreach($news as $new)
                                    <tr>
                                        <td>{{$new->title}}</td>
                                        <td>{{$new->content}}</td>
                                        <td>{{$new->image_url}}</td>
                                        <td>{{$new->for_user}}</td>
                                        <td>{{$new->user_id}}</td>

                                        <td  class="d-flex">
                                            {{-- <form action="{{route('recipes_delete',$recipe)}}" method="POST">
            
                                                <!-- Con esto internamente le indicamos que tipo de ruta es -->
                                                @method('DELETE')
                                                    @csrf
                                                    <input type="submit" 
                                                    class="btn btn-danger" 
                                                    value="Eliminar" 
                                                    onclick="return confirm('¿Desea eliminar esta receta?')" >
                                            </form> --}}
                                         
                                            <button type="submit" id="Buscar"  class="btn btn-info">Editar</button>
        
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


@endsection