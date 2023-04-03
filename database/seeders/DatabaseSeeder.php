<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $usuarioAdmin = new User();
        $usuarioAdmin->name = 'admin';
        $usuarioAdmin->email = 'admin@admin.admin';
        $usuarioAdmin->email_verified_at = now();
        $usuarioAdmin->remember_token = Str::random(10);
        $usuarioAdmin->password = Hash::make('admin');
        $usuarioAdmin->admin = true;
        $usuarioAdmin->save();

        $usuarioNormal = new User();
        $usuarioNormal->name = 'usuario';
        $usuarioNormal->email = 'usuario@usuario.usuario';
        $usuarioNormal->email_verified_at = now();
        $usuarioNormal->remember_token = Str::random(10);
        $usuarioNormal->password = Hash::make('usuario');
        $usuarioNormal->admin = false;
        $usuarioNormal->save();
    }
}
