<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Crearemos un Administrador.
        $useradmin=User::create([
            'nombres' => 'admin',
            'apellidos' => 'admin',
            'email' => 'admin@gmail.com',
            'dni' => '74208144',
            'celular' => '940979490',
            'domicilio' => 'Av. Urubamba 378',
            'nacionalidad' => 'Peruano',
            'politico' => '1',
            'cargo' => 'ministro de interior',
            'empresa' => 'Ministerio del interior',
            'password' => Hash::make('admin'),
            'tipo' => '1',
            ]);
                    
        $user1=User::create([
            /*
            'name' => 'usuario Marcos',
            'email' => 'user@gmail.com',
            'password' => Hash::make('admin'),
            'tipo' => '2',
            */
            'nombres' => 'Brian',
            'apellidos' => 'Huamani',
            'email' => 'brian125865@gmail.com',
            'dni' => '74208144',
            'celular' => '940979490',
            'domicilio' => 'Av. Urubamba 378',
            'nacionalidad' => 'Peruano',
            'politico' => '0',
            'cargo' => '',
            'empresa' => '',
            'password' => Hash::make('12345678'),
            'tipo' => '2',
            ]);
        $user1=User::create([
            /*'name' => 'usuario Moderador',
            'email' => 'moderador@gmail.com',
            'password' => Hash::make('admin'),
            'tipo' => '3',
            */
            'nombres' => 'usuario',
            'apellidos' => 'Moderador',
            'email' => 'moderador@gmail.com',
            'dni' => '74208144',
            'celular' => '940979490',
            'domicilio' => 'Av. Urubamba 378',
            'nacionalidad' => 'Peruano',
            'politico' => '0',
            'cargo' => '',
            'empresa' => '',
            'password' => Hash::make('admin'),
            'tipo' => '3',
            ]);

        
    }
}
