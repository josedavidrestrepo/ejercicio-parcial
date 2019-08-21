<?php

use App\Usuario;
use App\Vehiculo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Usuario::insert([
            'cedula' => '1122',
            'nombre' => 'ABCD'
        ]);

        Usuario::insert([
            'cedula' => '3344',
            'nombre' => 'EFGH'
        ]);

        Vehiculo::insert([
            'placa' => 'ABC123',
            'Marca' => 'Mazda',
            'cedula_persona' => '1122'
        ]);

        Vehiculo::insert([
            'placa' => 'DEF456',
            'Marca' => 'Chevrolet',
            'cedula_persona' => '3344'
        ]);

        Vehiculo::insert([
            'placa' => 'GHI789',
            'Marca' => 'Toyota',
            'cedula_persona' => '3344'
        ]);
    }
}
