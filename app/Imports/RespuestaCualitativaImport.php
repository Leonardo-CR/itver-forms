<?php

namespace App\Imports;

use App\Models\RespuestaCualitativa;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RespuestaCualitativaImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            // Convertir claves a minúscula para asegurar coincidencia con headings
            $data = array_change_key_case($row->toArray(), CASE_LOWER);

            // Buscar si ya existe la respuesta por su ID
            $respuesta = RespuestaCualitativa::find($data['id_respuesta']);

            if ($respuesta) {
                // Actualizar si ya existe
                $respuesta->update([
                    'cv_pregunta' => $data['id_pregunta'],
                    'cv_encuesta' => $data['id_encuesta'],
                    'valor'       => $data['valor'],
                    'user_id'     => $data['id_usuario'],
                ]);
            } else {
                // Crear nuevo registro
                RespuestaCualitativa::create([
                    'cv_respuesta_cualitativa' => $data['id_respuesta'],
                    'cv_pregunta'              => $data['id_pregunta'],
                    'cv_encuesta'              => $data['id_encuesta'],
                    'valor'                    => $data['valor'],
                    'user_id'                  => $data['id_usuario'],
                ]);
            }
        }
    }
}
