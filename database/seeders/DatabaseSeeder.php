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
        $this->generateUser();
    }

    public function generateUser()
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


        $usuarioNormal1 = new User();
        $usuarioNormal1->name = 'usuario1';
        $usuarioNormal1->email = 'usuario1@usuario1.usuario1';
        $usuarioNormal1->email_verified_at = now();
        $usuarioNormal1->remember_token = Str::random(10);
        $usuarioNormal1->password = Hash::make('usuario1');
        $usuarioNormal1->admin = false;
        $usuarioNormal1->save();


        $usuarioNormal2 = new User();
        $usuarioNormal2->name = 'usuario2';
        $usuarioNormal2->email = 'usuario2@usuario2.usuario2';
        $usuarioNormal2->email_verified_at = now();
        $usuarioNormal2->remember_token = Str::random(10);
        $usuarioNormal2->password = Hash::make('usuario2');
        $usuarioNormal2->admin = false;
        $usuarioNormal2->save();


        $usuarioNormal3 = new User();
        $usuarioNormal3->name = 'usuario3';
        $usuarioNormal3->email = 'usuario3@usuario3.usuario3';
        $usuarioNormal3->email_verified_at = now();
        $usuarioNormal3->remember_token = Str::random(10);
        $usuarioNormal3->password = Hash::make('usuario3');
        $usuarioNormal3->admin = false;
        $usuarioNormal3->save();


        $usuarioNormal4 = new User();
        $usuarioNormal4->name = 'usuario4';
        $usuarioNormal4->email = 'usuario4@usuario4.usuario4';
        $usuarioNormal4->email_verified_at = now();
        $usuarioNormal4->remember_token = Str::random(10);
        $usuarioNormal4->password = Hash::make('usuario4');
        $usuarioNormal4->admin = false;
        $usuarioNormal4->save();


        $usuarioNormal5 = new User();
        $usuarioNormal5->name = 'usuario5';
        $usuarioNormal5->email = 'usuario5@usuario5.usuario5';
        $usuarioNormal5->email_verified_at = now();
        $usuarioNormal5->remember_token = Str::random(10);
        $usuarioNormal5->password = Hash::make('usuario5');
        $usuarioNormal5->admin = false;
        $usuarioNormal5->save();


        $usuarioNormal6 = new User();
        $usuarioNormal6->name = 'usuario6';
        $usuarioNormal6->email = 'usuario6@usuario6.usuario6';
        $usuarioNormal6->email_verified_at = now();
        $usuarioNormal6->remember_token = Str::random(10);
        $usuarioNormal6->password = Hash::make('usuario6');
        $usuarioNormal6->admin = false;
        $usuarioNormal6->save();


        $usuarioNormal7 = new User();
        $usuarioNormal7->name = 'usuario7';
        $usuarioNormal7->email = 'usuario7@usuario7.usuario7';
        $usuarioNormal7->email_verified_at = now();
        $usuarioNormal7->remember_token = Str::random(10);
        $usuarioNormal7->password = Hash::make('usuario7');
        $usuarioNormal7->admin = false;
        $usuarioNormal7->save();


        $usuarioNormal8 = new User();
        $usuarioNormal8->name = 'usuario8';
        $usuarioNormal8->email = 'usuario8@usuario8.usuario8';
        $usuarioNormal8->email_verified_at = now();
        $usuarioNormal8->remember_token = Str::random(10);
        $usuarioNormal8->password = Hash::make('usuario8');
        $usuarioNormal8->admin = false;
        $usuarioNormal8->save();


        $usuarioNormal9 = new User();
        $usuarioNormal9->name = 'usuario9';
        $usuarioNormal9->email = 'usuario9@usuario9.usuario9';
        $usuarioNormal9->email_verified_at = now();
        $usuarioNormal9->remember_token = Str::random(10);
        $usuarioNormal9->password = Hash::make('usuario9');
        $usuarioNormal9->admin = false;
        $usuarioNormal9->save();


        $usuarioNormal10 = new User();
        $usuarioNormal10->name = 'usuario10';
        $usuarioNormal10->email = 'usuario10@usuario10.usuario10';
        $usuarioNormal10->email_verified_at = now();
        $usuarioNormal10->remember_token = Str::random(10);
        $usuarioNormal10->password = Hash::make('usuario10');
        $usuarioNormal10->admin = false;
        $usuarioNormal10->save();

        $usuarioNormal11 = new User();
        $usuarioNormal11->name = 'usuario11';
        $usuarioNormal11->email = 'usuario11@usuario11.usuario11';
        $usuarioNormal11->email_verified_at = now();
        $usuarioNormal11->remember_token = Str::random(10);
        $usuarioNormal11->password = Hash::make('usuario11');
        $usuarioNormal11->admin = false;
        $usuarioNormal11->save();


        $usuarioNormal12 = new User();
        $usuarioNormal12->name = 'usuario12';
        $usuarioNormal12->email = 'usuario12@usuario12.usuario12';
        $usuarioNormal12->email_verified_at = now();
        $usuarioNormal12->remember_token = Str::random(10);
        $usuarioNormal12->password = Hash::make('usuario12');
        $usuarioNormal12->admin = false;
        $usuarioNormal12->save();


        $usuarioNormal13 = new User();
        $usuarioNormal13->name = 'usuario13';
        $usuarioNormal13->email = 'usuario13@usuario13.usuario13';
        $usuarioNormal13->email_verified_at = now();
        $usuarioNormal13->remember_token = Str::random(10);
        $usuarioNormal13->password = Hash::make('usuario13');
        $usuarioNormal13->admin = false;
        $usuarioNormal13->save();


        $usuarioNormal14 = new User();
        $usuarioNormal14->name = 'usuario14';
        $usuarioNormal14->email = 'usuario14@usuario14.usuario14';
        $usuarioNormal14->email_verified_at = now();
        $usuarioNormal14->remember_token = Str::random(10);
        $usuarioNormal14->password = Hash::make('usuario14');
        $usuarioNormal14->admin = false;
        $usuarioNormal14->save();


        $usuarioNormal15 = new User();
        $usuarioNormal15->name = 'usuario15';
        $usuarioNormal15->email = 'usuario15@usuario15.usuario15';
        $usuarioNormal15->email_verified_at = now();
        $usuarioNormal15->remember_token = Str::random(10);
        $usuarioNormal15->password = Hash::make('usuario15');
        $usuarioNormal15->admin = false;
        $usuarioNormal15->save();


        $usuarioNormal16 = new User();
        $usuarioNormal16->name = 'usuario16';
        $usuarioNormal16->email = 'usuario16@usuario16.usuario16';
        $usuarioNormal16->email_verified_at = now();
        $usuarioNormal16->remember_token = Str::random(10);
        $usuarioNormal16->password = Hash::make('usuario16');
        $usuarioNormal16->admin = false;
        $usuarioNormal16->save();


        $usuarioNormal17 = new User();
        $usuarioNormal17->name = 'usuario17';
        $usuarioNormal17->email = 'usuario17@usuario17.usuario17';
        $usuarioNormal17->email_verified_at = now();
        $usuarioNormal17->remember_token = Str::random(10);
        $usuarioNormal17->password = Hash::make('usuario17');
        $usuarioNormal17->admin = false;
        $usuarioNormal17->save();


        $usuarioNormal18 = new User();
        $usuarioNormal18->name = 'usuario18';
        $usuarioNormal18->email = 'usuario18@usuario18.usuario18';
        $usuarioNormal18->email_verified_at = now();
        $usuarioNormal18->remember_token = Str::random(10);
        $usuarioNormal18->password = Hash::make('usuario18');
        $usuarioNormal18->admin = false;
    }
}
