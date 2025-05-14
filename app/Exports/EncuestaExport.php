<?php
// app/Exports/EncuestaExport.php

namespace App\Exports;

use App\Models\Encuesta;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EncuestaExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Encuesta::with('tipo_encuesta')->get()->map(function ($encuesta) {
            return [
                'cv_encuesta'     => $encuesta->cv_encuesta,
                'periodo'         => $encuesta->periodo,
                'is_active'       => $encuesta->is_active,
                'fecha_inicio'    => $encuesta->fecha_inicio,
                'fecha_cierre'    => $encuesta->fecha_cierre,
                'hora_inicio'     => $encuesta->hora_inicio,
                'hora_cierre'     => $encuesta->hora_cierre,
                'cv_tipo_encuesta'   =>$encuesta->cv_tipo_encuesta,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'ID Encuesta',
            'Periodo',
            'Activa',
            'Fecha Inicio',
            'Fecha Cierre',
            'Hora Inicio',
            'Hora Cierre',
            'Tipo de Encuesta',
        ];
    }
}
