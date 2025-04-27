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
        return Aviso::select('titulo')->get();
    }
    public function headings(): array
    {
        return ['Título'];
    }
}
