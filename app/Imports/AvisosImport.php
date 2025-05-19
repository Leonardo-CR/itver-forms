<?php

namespace App\Imports;

use App\Models\Aviso;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AvisosImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Aviso([
            'id' => $row['id'], // asegúrate que la columna en Excel se llame "titulo" => $row['titulo'] es el nombre de la columna en tu archivo Excel
            'titulo' => $row['titulo'], // asegúrate que la columna en Excel se llame "titulo" => $row['titulo'] es el nombre de la columna en tu archivo Excel
            'contenido' => $row['contenido'], // asegúrate que la columna en Excel se llame "titulo" => $row['titulo'] es el nombre de la columna en tu archivo Excel
            'publicado' => $row['publicado'], // asegúrate que la columna en Excel se llame "titulo" => $row['titulo'] es el nombre de la columna en tu archivo Excel
        ]);
    }
}
