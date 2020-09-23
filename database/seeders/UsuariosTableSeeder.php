<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

public function run()
{
    $usuarios = [
        0 => [
            'name' => 'Hudson ryan',
            'email' => 'hudson@gmail.com', ],
        1 => [
            'name' => 'João gabriel',
            'email' => 'gabriel@gmail.com',],
        2 => [
             'name' => 'Miguel gabriel',
             'email' => 'gabriel@gmail.com',]            
    ];
    Usuario::insert($usuarios);
}
}
