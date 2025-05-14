<?php

namespace App\Exports;

use App\Models\RespuestaCualitativa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RespuestaCualitativaExport implements FromCollection, WithHeadings
{
    protected $cv_encuesta;

    public function __construct($cv_encuesta)
    {
        $this->cv_encuesta = $cv_encuesta;
    }

    public function collection()
    {
        return RespuestaCualitativa::with(['pregunta', 'encuesta.tipo_encuesta'])
            ->where('cv_encuesta', $this->cv_encuesta)
            ->get()
            ->map(function ($respuesta) {
                return [
                    'cv_respuesta_cualitativa' => $respuesta->cv_respuesta_cualitativa,
                    'cv_pregunta'              => $respuesta->cv_pregunta,
                    'texto_pregunta'           => $respuesta->pregunta->descripcion,
                    'cv_encuesta'              => $respuesta->cv_encuesta,
                    'tipo_encuesta'            => $respuesta->encuesta?->tipo_encuesta?->nombre,
                    'valor'                    => $respuesta->valor,
                    'user_id'                 => $respuesta->user_id,
                ];
            });
    }

    public function headings(): array
    {
        return [
            'ID Respuesta',
            'ID Pregunta',
            'Texto de la Pregunta',
            'ID Encuesta',
            'Tipo de Encuesta',
            'Valor',
            'ID Usuario',
        ];
    }
}
