<?php

namespace App\Http\Controllers;
use App\Models\Carrera;
use App\Models\Alumno;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EncuestaExport;
use App\Exports\HistoryAlumno;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $variables = [
            'menu'=>"dashboard"
        ];
        return view('admin.dashboard')->with($variables);
    }

    public function report_excel()
    {
        $carreras = Carrera::all();
         $variables = [
            'menu'=>"report_excel",
            'carreras'=> $carreras
        ];
        return view('admin.report_excel')->with($variables);
    }
    public function registration_users()
    {
      
         $variables = [
            'menu'=>"registration_users",        
        ];
        return view('admin.registration_users')->with($variables);
    }

    public function news()
    {
      
         $variables = [
            'menu'=>"news",        
        ];
        return view('admin.news')->with($variables);
    }



    public function export_report_excel(Request $request) 
    {
        return Excel::download(new EncuestaExport($request->dia,$request->caso,$request->carrera), 'reporte_encuesta.xlsx');
    }

    public function buscar_alumno()
    {
        $carreras = Carrera::all();
         $variables = [
            'menu'=>"report_online",
        ];
        return view('admin.report_online')->with($variables);
    }

    public function export_report_excel_alumno(Request $request) 
    {
        $alumno = Alumno::find($request->matricula);
        if($alumno){
            return Excel::download(new HistoryAlumno($request->matricula), 'HistorialDeAlumno-'.$request->matricula.'.xlsx');
        }else{
            $variables = [
                'menu'=>"report_online",
            ];
            return back()->withErrors(['alumno'=>'¡Alumno no encontrado, con la matricula ingresada!'])
            ->withInput(request(['matricula']));
        }
        
    }

    public function buscar_alumno_online(Request $request) 
    {
            $sql_encuestas = "SELECT DATE(created_at) AS 'fecha',IF(resultado = 0,'VERDE',IF(resultado = 1,'AMARILLO',IF(resultado = 2,'ROJO',''))) AS 'resultado',puntos FROM encuestas
            WHERE matricula_alumno = $request->matricula
            ORDER BY created_at DESC";
            $encuestas = DB::select($sql_encuestas);
            $sql_alumno = "SELECT 
            CONCAT(alumnos.nombre,' ',alumnos.ape_paterno,' ',alumnos.ape_materno) AS 'nombre',
            alumnos.genero,
            alumnos.edad,
            alumnos.cuatrimeste,
            alumnos.telefono,
            alumnos.email,
            alumnos.comprobante,
            carreras.carrera
            FROM alumnos
            INNER JOIN carreras ON carreras.id = alumnos.id_carrera
            WHERE matricula = $request->matricula";
            $alumno = DB::select($sql_alumno);
            
            $sql_comp = "SELECT encuestas.matricula_alumno,puntos_encuestas.urlPDF
            FROM encuestas
            INNER JOIN puntos_encuestas ON puntos_encuestas.id = encuestas.id_puntos_encuesta
            WHERE puntos_encuestas.urlPDF != '' AND encuestas.matricula_alumno = $request->matricula LIMIT 1";
            $comp = DB::select($sql_comp);
            
        if(isset($alumno[0])){
            return ['mensaje' => "1",'datos' => $encuestas,'Alumno'=> $alumno,'comp' => $comp];
        }else{
            return ['mensaje' => "0",'datos' => $encuestas,'Alumno' => $alumno,'comp' => $comp];
        }
    }

    public function casosPositivos(Request $request) 
    {
            $sql = "SELECT 
            c.carrera,
            COUNT(*) AS 'total'
            FROM carreras c
            INNER JOIN alumnos a ON a.id_carrera = c.id
            INNER JOIN encuestas e ON e.matricula_alumno = a.matricula
            WHERE e.resultado = 2 AND e.created_at BETWEEN '$request->fecha 00:00:00' AND '$request->fecha 23:59:59'
            GROUP BY c.id;
            ";
            $datos = DB::select($sql);
            return json_encode($datos);
            
    }

    public function casosSospechosos(Request $request) 
    {
            $sql = "SELECT 
            c.carrera,
            COUNT(*) AS 'total'
            FROM carreras c
            INNER JOIN alumnos a ON a.id_carrera = c.id
            INNER JOIN encuestas e ON e.matricula_alumno = a.matricula
            WHERE e.resultado = 1 AND e.created_at BETWEEN '$request->fecha 00:00:00' AND '$request->fecha 23:59:59'
            GROUP BY c.id;
            ";
            $datos = DB::select($sql);
            return json_encode($datos);
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}