<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert(array (
            0 =>
            array (
                'id' => 1,
                'nombre' => 'Administrativa y Financiera',
            ),
            1 =>
            array (
                'id' => 2,
                'nombre' => 'Ingeniería',
            ),
            2 =>
            array (
                'id' => 3,
                'nombre' => 'Desarrollo de Negocio',
            ),
            3 =>
            array (
                'id' => 4,
                'nombre' => 'Proyectos',
            ),          
            4 =>
            array (
                'id' => 5,
                'nombre' => 'Servicios',
            ),
            5 =>
            array (
                'id' => 6,
                'nombre' => 'Calidad',
            ),
        ));
        
        $this->command->info('Información de la tabla areas OK');
    }
}