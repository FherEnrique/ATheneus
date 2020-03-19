<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class nombreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 35 ; $i++) { 
            DB::table('nombres')->insert([
                'nombre' => 'chico '.$i,
                'sexo' => 'm'
            ]);
        }
        for ($i=0; $i < 35 ; $i++) { 
            DB::table('nombres')->insert([
                'nombre' => 'chica '.$i,
                'sexo' => 'f'
            ]);
        }
        for ($i=0; $i < 15 ; $i++) { 
            DB::table('muertes')->insert([
                'descripcion' => 'muerte '.$i
            ]);
        }
        for ($i=0; $i < 55 ; $i++) { 
            DB::table('acciones')->insert([
                'cant_personajes' => 1,
                'salud' => rand(-50,50),
                'descripcion' => 'accion '.$i,
            ]);
        }
        //$professions =DB::select('SELECT id FROM professions WHERE title = ?', ['Desarrollador back-end']);
        //echo $professions[0]->id;
    }
}
