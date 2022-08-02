<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class VerificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('verificacion.index');
    }
    public function show_qr()
    {
        //
    }

    public function show_info_qr(Request $request)
    {   
        $matricula = $request->matricula;
        $sql = "SELECT 
        a.matricula,CONCAT(a.nombre,' ',a.ape_paterno,' ',a.ape_materno) as 'nombre',c.carrera,en.resultado,en.created_at
        FROM encuestas en
        INNER JOIN alumnos a ON a.matricula = en.matricula_alumno
        INNER JOIN carreras c ON c.id = a.id_carrera
        WHERE folio IN(SELECT MAX(folio) FROM encuestas e
        WHERE DATE(e.created_at) BETWEEN CURDATE() - INTERVAL 1 DAY AND CURDATE()
        AND a.matricula = $matricula
        GROUP BY e.matricula_alumno
        ORDER BY DATE(e.created_at) DESC)
        ORDER BY en.created_at DESC
        LIMIT 1;";
        $alumno = DB::select($sql);
        if(isset($alumno)){
            return json_encode($alumno);
        }else{
             return false;
        }
    }
    
    public function show_matricula()
    {
        //
    }

    public function datosEncuestas()
    {
        $sql = "SELECT 
        a.matricula,CONCAT(a.nombre,' ',a.ape_paterno,' ',a.ape_materno) as 'nombre',c.carrera,en.resultado,en.created_at
        FROM encuestas en
        INNER JOIN alumnos a ON a.matricula = en.matricula_alumno
        INNER JOIN carreras c ON c.id = a.id_carrera
        WHERE folio IN(SELECT MAX(folio) FROM encuestas e
        WHERE DATE(e.created_at) BETWEEN CURDATE() - INTERVAL 1 DAY AND CURDATE()
        GROUP BY e.matricula_alumno
        ORDER BY DATE(e.created_at) DESC)
        ORDER BY en.created_at DESC;";
        $alumno = DB::select($sql);

        if(isset($alumno)){
            return json_encode($alumno);
        }else{
             return false;
        }
    }

    public function show_curp()
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

}