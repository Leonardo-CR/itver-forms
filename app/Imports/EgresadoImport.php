<?php

namespace App\Imports;

use App\Models\User;
use App\Models\Carrera;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EgresadoImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        // Buscar carrera por nombre
        $carrera = Carrera::where('nombre', $row['carrera'])->first();
        $cv_carrera = $carrera ? $carrera->cv_carrera : null;

        // Si el campo ID existe y coincide con un usuario, lo actualizamos
        if (!empty($row['id'])) {
            $user = User::find($row['id']);
            if ($user) {
                $user->update([
                    'name'       => $row['nombre'],
                    'email'      => $row['correo'],
                    'cv_carrera' => $cv_carrera,
                    'tipo'       => $row['tipo'] ?? $user->tipo,
                ]);
                return $user;
            }
        }

        // Si no hay ID o no se encontró, creamos uno nuevo
        $newUser = User::create([
            'name'       => $row['nombre'],
            'email'      => $row['correo'],
            'cv_carrera' => $cv_carrera,
            'tipo'       => $row['tipo'],
            'password'   => Hash::make('password'), // O una contraseña predeterminada segura
        ]);

        // Asignar rol según carrera
        if (in_array($row['carrera'], ['Ing.Química', 'Ing.Bioquímica'])) {
            $newUser->assignRole('egresado_quibioo');
        } else {
            $newUser->assignRole('egresado_general');
        }

        return $newUser;
    }
}
