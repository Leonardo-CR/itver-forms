<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EgresadoExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::with('carrera')
            ->whereHas('roles', function ($query) {
                $query->whereIn('name', ['egresado_quibioo', 'egresado_general']);
            })
            ->get()
            ->map(function ($user) {
                return [
                    'id'       => $user->id,
                    'nombre'   => $user->name,
                    'correo'   => $user->email,
                    'carrera'  => optional($user->carrera)->nombre,
                    'tipo'     => $user->tipo,
                ];
            });
    }

    public function headings(): array
    {
        return ['id', 'nombre', 'correo', 'carrera', 'tipo'];
    }
}
