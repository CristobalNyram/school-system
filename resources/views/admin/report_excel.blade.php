@extends('layouts.admin')
@section('title',"Exportar Excel - UTTECAM")

@section('content')
        <div class="content-wrapper" style="background: ">
            <div class="container-fluid">
                <div class="row">
                <div class="main-header">
                    <h4>Exportar Resultados - Excel</h4>
                </div>
            </div>
            <div class="row" >
                <div class="col-lg-12">
                     <div class="card">
                        <div class="card-block">
                           <form action="{{ route('report_excel_export')}}" method="POST">
                            @csrf
                               <div class="row">
                                    <div class="form-group col-lg-3">
                                        <label for="dia" class="form-control-label">Día</label>
                                        <input type="date" class="form-control" name="dia" id="dia" required>
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <label for="caso" class="form-control-label">Caso</label>
                                        <select class="form-control" id="caso" name="caso">
                                            <option value="Todos">Todos</option>
                                            <option value="2">Casos Positivos</option>
                                            <option value="1">Casos Sospechosos</option>
                                            <option value="0">Casos Negativos</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label for="carrera" class="form-control-label">Carrera</label>
                                        <select class="form-control" id="carrera" name="carrera">
                                            <option value="Todos">Todos</option>
                                            @foreach ($carreras as $carrera)
                                            <option value="{{$carrera->id}}">{{$carrera->carrera}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                               </div>
                               <center>
                                  <button type="submit" class="btn btn-success">Exportar Datos</button>
                              </center>
                           </form>
                        </div>
                     </div>
                  </div>
            </div>
         </div>


@endsection