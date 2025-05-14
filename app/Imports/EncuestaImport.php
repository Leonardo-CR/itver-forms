<?php

namespace App\Imports;

use App\Models\Encuesta;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EncuestaImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        // Establecemos que todas las encuestas serán inactivas
        $activa = false;

        // Si se proporciona un ID
        if (!empty($row['id_encuesta'])) {
            $encuesta = Encuesta::find($row['id_encuesta']);

            if ($encuesta) {
                // Actualiza la encuesta existente
                $encuesta->update([
                    'periodo'          => $row['periodo'],
                    'is_active'        => $activa,
                    'fecha_inicio'     => $row['fecha_inicio'],
                    'fecha_cierre'     => $row['fecha_cierre'],
                    'hora_inicio'      => $row['hora_inicio'],
                    'hora_cierre'      => $row['hora_cierre'],
                    'cv_tipo_encuesta' => $row['tipo_de_encuesta'],
                ]);
                return null; // Ya fue actualizada
            }

            // No existe, crea con el ID proporcionado
            return new Encuesta([
                'cv_encuesta'       => $row['id_encuesta'],
                'periodo'           => $row['periodo'],
                'is_active'         => $activa,
                'fecha_inicio'      => $row['fecha_inicio'],
                'fecha_cierre'      => $row['fecha_cierre'],
                'hora_inicio'       => $row['hora_inicio'],
                'hora_cierre'       => $row['hora_cierre'],
                'cv_tipo_encuesta'  => $row['tipo_de_encuesta'],
            ]);
        }

        // No se proporciona ID, se crea una nueva encuesta
        return new Encuesta([
            'periodo'           => $row['periodo'],
            'is_active'         => $activa,
            'fecha_inicio'      => $row['fecha_inicio'],
            'fecha_cierre'      => $row['fecha_cierre'],
            'hora_inicio'       => $row['hora_inicio'],
            'hora_cierre'       => $row['hora_cierre'],
            'cv_tipo_encuesta'  => $row['tipo_de_encuesta'],
        ]);
    }
}
