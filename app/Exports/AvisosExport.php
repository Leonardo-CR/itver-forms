<?php

namespace App\Exports;

use App\Models\Aviso;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AvisosExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
         return Aviso::all()->map(function ($aviso) {
            return [
                'id' => $aviso->id,
                'titulo' => $aviso->titulo,
                'contenido' => $aviso->contenido,
                'publicado' => $aviso->publicado ? '1' : '0',
            ];
        });
    }
    public function headings(): array
    {
        return ['id', 'titulo', 'contenido', 'publicado'];
    }
}
