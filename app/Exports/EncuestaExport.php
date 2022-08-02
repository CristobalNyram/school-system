<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Illuminate\Support\Facades\DB;

class EncuestaExport implements FromView, WithColumnWidths, WithStyles
{

    protected $dia;
    protected $typeCase;
    protected $carrera;

    function __construct($dia,$typeCase,$carrera) {
        $this->dia = $dia;
        $this->typeCase = $typeCase;
        $this->carrera = $carrera;
    }

     public function view(): View{
        $dia = $this->dia;
        if ($this->typeCase === "Todos" && $this->carrera === "Todos") {
            $sql = "SELECT * FROM alumnos
            INNER JOIN carreras ON carreras.id = alumnos.id_carrera
            INNER JOIN encuestas ON encuestas.matricula_alumno = alumnos.matricula
            INNER JOIN puntos_encuestas ON puntos_encuestas.id = encuestas.id_puntos_encuesta
            WHERE encuestas.created_at LIKE ('$dia%') ";
        }else{
            $sql = "SELECT * FROM alumnos
            INNER JOIN carreras ON carreras.id = alumnos.id_carrera
            INNER JOIN encuestas ON encuestas.matricula_alumno = alumnos.matricula
            INNER JOIN puntos_encuestas ON puntos_encuestas.id = encuestas.id_puntos_encuesta
            WHERE encuestas.created_at LIKE ('$dia%') ";
            if ($this->typeCase != "Todos") {
               $sql .= " AND encuestas.resultado = $this->typeCase";
            }
            if ($this->carrera != "Todos") {
               $sql .= " AND carreras.id = $this->carrera";
            }
        }
        
        $alumno = DB::select($sql);

        return view('admin.exports.exportexcel', [
            'users' => $alumno
        ]);
    }

    public function columnWidths(): array
    {
        return [
            'A' => 12,
            'B' => 36,   
            'C' => 28,    
            'D' => 7,
            'E' => 5,
            'F' => 10,
            'G' => 17,
            'H' => 25,
            'I' => 10,
            'J' => 10,
            'K' => 15,
            'L' => 3,
            'M' => 3,
            'N' => 3,
            'O' => 3,
            'P' => 3,
            'Q' => 3,
            'R' => 3,
            'S' => 3,
            'T' => 3,
            'U' => 3,
            'V' => 3,
            'W' => 3,
            'X' => 3,
            'Y' => 3,
            'Z' => 3,
            'AA' => 3,
            'AB' => 3,
            'AC' => 3

        ];
    }
    
    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A1:AC1')->getFont()->setBold(true);
    }

    public function properties(): array
    {
        return [
            'creator'        => 'Universidad Tenologica De Tecamachalco',
            'lastModifiedBy' => 'Universidad Tenologica De Tecamachalco',
            'title'          => 'Cuestionario',
            'description'    => 'Datos del cuestionario',
            'subject'        => 'Universidad Tenologica De Tecamachalco',
            'keywords'       => 'Universidad Tenologica De Tecamachalco',
            'category'       => 'Medico',
            'manager'        => 'Universidad Tenologica De Tecamachalco',
            'company'        => 'Universidad Tenologica De Tecamachalco',
        ];
    }
}