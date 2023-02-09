<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'Desarrollador',
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'Analista',
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'Tester',
            ),
            3 => 
            array (
                'id' => 4,
                'nombre' => 'Diseñador',
            ),
            
            4 => 
            array (
                'id' => 5,
                'nombre' => 'Profesional PMO',
            ),
            
            5 => 
            array (
                'id' => 6,
                'nombre' => 'Profesional de servicios',
            ),

            6 => 
            array (
                'id' => 7,
                'nombre' => 'Auxiliar administrativo',
            ),

            7 => 
            array (
                'id' => 8,
                'nombre' => 'Codirector',
            ),
        ));

        $this->command->info('Información de la tabla Roles OK');
    }
}
