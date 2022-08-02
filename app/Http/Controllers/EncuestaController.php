<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\PuntosEncuesta;
use App\Models\Encuesta;
use Illuminate\Http\Request;
use \Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;
class EncuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function info_alumno()
    {
        return view('encuesta.alumno');
    }
    
    public function descargar_pdf_matricula()
    {
        return view('encuesta.getPDFmatricula');
    }

    public function save_alumno(Request $request)
    {
                    //Validaciones en matricula(8) y CURP(18)
        if(!preg_match("/^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/", $request->CurpAlumno))
        {
            return '¡TU CURP ES INCORRECTA!';
        }
        if (strlen($request->MatriculaAlumno) <= 5){
            return '¡TU MATRICULA ES INCORRECTA!';
        }

        $sql = "SELECT alumnos.matricula ,DATE(encuestas.created_at) AS 'created_at',encuestas.resultado,encuestas.folio FROM encuestas
        INNER JOIN alumnos ON alumnos.matricula = encuestas.matricula_alumno
        WHERE encuestas.matricula_alumno = $request->MatriculaAlumno OR alumnos.email  = '$request->EmailAlumno' OR alumnos.curp = '$request->CurpAlumno'
        ORDER BY encuestas.created_at DESC
        LIMIT 1";
            $a_fecha = DB::select($sql);
            $alumno = new Alumno();
            $noDupl_matricula = Alumno::find($request->MatriculaAlumno);
            $noDupl_curp = Alumno::where('curp','=',$request->CurpAlumno)->first();
            $noDupl_email = Alumno::where('email','=',$request->EmailAlumno)->first(); 

            if(isset($a_fecha[0])){
                $alumno = Alumno::find($a_fecha[0]->matricula);
                $alumno->nombre = $request->nombreAlumno;
                $alumno->ape_paterno = $request->apellidoPaAlumno;
                $alumno->ape_materno = $request->apellidoMaAlumno;
                $alumno->genero = $request->GeneroAlumno;
                $alumno->edad = $request->edadAlumno;
                $alumno->curp = $request->CurpAlumno;
                $alumno->email =$request->EmailAlumno;
                $alumno->id_carrera = $request->programaEducativoAlumno;
                $alumno->cuatrimeste = $request->CuatrimestreAlumno;
                $alumno->telefono = $request->TelefonoAlumno; 
                $alumno->save();
                $datetime1 = date_create(date('Y-m-d')); //fecha actual  
                $datetime2 = date_create($a_fecha[0]->created_at); //fecha de db  
                $interval = date_diff($datetime1, $datetime2,false);  
                $dias = $interval->d;
            if($dias == 0 && !is_numeric($a_fecha[0]->resultado)) {
                return redirect('encuesta/info/'.$a_fecha[0]->matricula.'/'.$a_fecha[0]->folio);
            }else{
                if(is_numeric($a_fecha[0]->resultado) && $dias == 0) {
                    return 'POSIBLES ERRORES: <br> Error 1:Al contestar la encuesta, la matricula, correo y la CURP son datos personales, por lo que ningún otro estudiante puede hacer uso o registrar sus mismos datos.
                    Con los datos ingresados actualmente ya fue registrada una encuesta.<br>Error 2: Ya contestaste tu encuesta del día de hoy, intentalo nuevamente mañana.';
                }else{
                    $p_encuesta = new PuntosEncuesta();
                    $p_encuesta->iniciado = 1;
                    $p_encuesta->save();
                    $id_p_encuesta = $p_encuesta->id;
                    $encuesta = new Encuesta();
                    $encuesta->matricula_alumno = $a_fecha[0]->matricula;
                    $encuesta->id_puntos_encuesta = $id_p_encuesta;
                    $encuesta->save();
                    $folio = $encuesta->folio;
                    return redirect('encuesta/info/'.$a_fecha[0]->matricula.'/'.$folio);
                }
            }
        }else{

        $alumno = new Alumno();
         $alumno->nombre = $request->nombreAlumno;
         $alumno->ape_paterno = $request->apellidoPaAlumno;
         $alumno->ape_materno = $request->apellidoMaAlumno;
         $alumno->genero = $request->GeneroAlumno;
         $alumno->edad = $request->edadAlumno;
         $alumno->matricula = $request->MatriculaAlumno;
         $alumno->curp = $request->CurpAlumno;
         $alumno->email =$request->EmailAlumno;
         $alumno->id_carrera = $request->programaEducativoAlumno;
         $alumno->cuatrimeste = $request->CuatrimestreAlumno;
         $alumno->telefono = $request->TelefonoAlumno; 
         $alumno->save();

         $p_encuesta = new PuntosEncuesta();
         $p_encuesta->iniciado = 1;
         $p_encuesta->save();
         $id_p_encuesta = $p_encuesta->id;
         $encuesta = new Encuesta();
         $encuesta->matricula_alumno = $request->MatriculaAlumno;
         $encuesta->id_puntos_encuesta = $id_p_encuesta;
         $encuesta->save();
         $folio = $encuesta->folio;

         return redirect('encuesta/info/'.$request->MatriculaAlumno.'/'.$folio);
        }
        
         

    }

    public function save_encuesta(Request $request)
    {
        $folio = $_POST['folio'];
        
        $datosEnc = json_decode($_POST['datosJson']);
        $arrayPuntos = array($datosEnc[4],$datosEnc[5],$datosEnc[6],$datosEnc[7],$datosEnc[8],$datosEnc[9],$datosEnc[10],$datosEnc[11],$datosEnc[14]);
        $puntos = array_sum($arrayPuntos);

        if($puntos >= 0 && $puntos <= 3 ){
            $resultado = 0;
        }else if($puntos >= 4 && $puntos <= 6){
            $resultado = 1;
        }else if($puntos >= 7){
            $resultado = 2;
        }

        if($datosEnc[6] == 2 || $datosEnc[10] == 1){
            $resultado = 2;
        }
        
        $encuesta = Encuesta::where('folio','=',$folio)->first();
        $encuesta->resultado = $resultado;
        $encuesta->puntos = $puntos;
        $encuesta->save();

        $PuntosEncuesta = PuntosEncuesta::find($folio);
        $PuntosEncuesta->p_1 = $datosEnc[0];
        $PuntosEncuesta->p_2 = $datosEnc[1];
        $PuntosEncuesta->p_3 = $datosEnc[2];
        $PuntosEncuesta->p_4 = $datosEnc[3];
        $PuntosEncuesta->p_5 = $datosEnc[4];
        $PuntosEncuesta->p_6 = $datosEnc[5];
        $PuntosEncuesta->p_7 = $datosEnc[6];
        $PuntosEncuesta->p_8 = $datosEnc[7];
        $PuntosEncuesta->p_9 = $datosEnc[8];
        $PuntosEncuesta->p_10 = $datosEnc[9];
        $PuntosEncuesta->p_11 = $datosEnc[10];
        $PuntosEncuesta->p_12 = $datosEnc[11];
        $PuntosEncuesta->p_13 = $datosEnc[12];
        $PuntosEncuesta->p_14 = $datosEnc[13];
        $PuntosEncuesta->p_15 = $datosEnc[14];
        $PuntosEncuesta->p_16 = $datosEnc[15];
        $PuntosEncuesta->p_17 = $datosEnc[16];
        $PuntosEncuesta->p_18 = $datosEnc[17];
        $PuntosEncuesta->save();

        return($puntos);

    }

    public function save_comprobante(){
        $folio = $_POST['folio_comp'];
        $ds = DIRECTORY_SEPARATOR;  //1
        $storeFolder = '../../../public/comprobantes';   //2
        if (!empty($_FILES)) {
            $random = date('Y-m-d')."-21062001-".random_int(1,2500)."-UT-".$folio."-";
            $tempFile = $_FILES['file']['tmp_name'];          //3             
            $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
            $targetFile =  $targetPath.$random."".$_FILES['file']['name'];  //5
            move_uploaded_file($tempFile,$targetFile); //6
            $PuntosEncuesta = PuntosEncuesta::find($folio);
            $PuntosEncuesta->urlPDF = "/comprobantes/".$random."".$_FILES['file']['name']; 
            $PuntosEncuesta->save();
        }
    }

    public function show_encuesta($matricula,$folio)
    {
        $sql = "SELECT * FROM encuestas
                WHERE encuestas.matricula_alumno = $matricula
                ORDER BY encuestas.created_at DESC
                LIMIT 1";
        $a_fecha = DB::select($sql);
        if(isset($a_fecha[0])){
            $alumno = new Alumno();
            $noDupl_matricula = Alumno::find($matricula);
            $datetime1 = date_create(date('Y-m-d')); //fecha actual  
            $datetime2 = date_create($a_fecha[0]->created_at); //fecha de db  
            $interval = date_diff($datetime1, $datetime2,false);  
            $dias = intval($interval->format('%R%a'));

            if(!is_numeric($a_fecha[0]->resultado) || $dias != 0) {
                return view('encuesta.encuesta');
            }else{
                return 'YA ESTA CONTESTADA TU ENCUESTA, PUEDES CONTESTAR NUEVAMENTE MAÑANA';
            }
        }else{
            $v_folio = Encuesta::where('folio','=',$folio)->first();
            $v_matricula = Encuesta::where('matricula_alumno','=',$matricula)->first();
            if($v_folio && $v_matricula){
                return view('encuesta.encuesta');
                
            }else{
                return 'SOLICITUDA NO VALIDA';
            }
        }
       
        
    }

    public function show_pdf_resultados($matricula,$folio)
    {
        $alumno = Alumno::join("carreras","carreras.id", "=", "alumnos.id_carrera")
            ->join("encuestas","encuestas.matricula_alumno", "=", "alumnos.matricula")
            ->select("*")
            ->where("alumnos.matricula", "=", $matricula)
            ->where("encuestas.folio", "=", $folio)
            ->limit(1)
            ->get()
            ->sortByDesc("encuestas.create_at");
        if(!isset($alumno[0])){
          abort(404);
        }
        $data = [
        'alumno' => $alumno[0]
        ];
        $pdf = PDF::loadView('encuesta.pdf', $data);
        $pdf->setPaper('A4');
        return $pdf->stream('ComprobanteUTTECAM - '.$matricula.'.pdf');
    }

    public function show_pdf_resultados_matricula($matricula,$telefono)
    {
        if (strlen($matricula) <= 7 && strlen($telefono) == 13 ){
            return '¡TU MATRICULA O TELEFONO SON INCORRECTOS!';
        }

        $alumno = Alumno::join("carreras","carreras.id", "=", "alumnos.id_carrera")
            ->join("encuestas","encuestas.matricula_alumno", "=", "alumnos.matricula")
            ->select("*")
            ->where("alumnos.matricula", "=", $matricula)
            ->limit(1)
            ->get()
            ->sortByDesc("encuestas.create_at");

        if(!isset($alumno[0])){
            return '¡TU MATRICULA ES INCORRECTA!';
        }

        $data = [
        'alumno' => $alumno[0]
        ];

        $pdf = PDF::loadView('encuesta.pdf', $data);
        $pdf->setPaper('A4');
        return $pdf->stream('ComprobanteUTTECAM - '.$matricula.'.pdf');
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




}