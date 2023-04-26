<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Accomodations;
use App\Models\Reservation;
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
        $this->generateAccommodation();
    }

    public function generateAccommodation()
    {
        $casa1 = new Accomodations();
        $casa1->name = 'Villa Flores';
        $casa1->stars = 3;
        $casa1->description = 'Una hermosa villa en medio de la naturaleza con amplios jardines y todas las comodidades.';
        $casa1->image = 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/269759074.jpg?k=10e3527be64b4774d0dbfa2171fb587ab61ded9686ab1452bdd118be51a30d8f&o=&hp=1';
        $casa1->save();

        $casa2 = new Accomodations();
        $casa2->name = 'Alojamiento de Montaña';
        $casa2->stars = 3;
        $casa2->description = 'Hermosa cabaña ubicada en las montañas con vista panorámica y acceso a rutas de senderismo.';
        $casa2->image = 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/40222756.jpg?k=ac9f9528c86395d1fef7464d9706a2ee20967c9bb9770d12e3dadb2995fa2f13&o=&hp=1';
        $casa2->save();

        $casa3 = new Accomodations();
        $casa3->name = 'Casa de Playa';
        $casa3->stars = 4;
        $casa3->description = 'Cómoda casa ubicada frente al mar con acceso privado a la playa y hermosa vista al océano.';
        $casa3->image = 'https://www.revistainteriores.es/uploads/s1/18/56/65/4/12-consejos-que-debes-tener-en-cuenta-si-vas-a-comprar-una-casa-en-la-playa.jpeg';
        $casa3->save();

        $casa4 = new Accomodations();
        $casa4->name = 'Alojamiento Rural';
        $casa4->stars = 2;
        $casa4->description = 'Acogedora casa rural rodeada de naturaleza y tranquilidad, ideal para descansar y desconectar.';
        $casa4->image = 'https://www.escapadarural.com/blog/wp-content/uploads/2016/07/Castanar-de-Aracena-1-1024x684.jpg.webp';
        $casa4->save();

        $casa5 = new Accomodations();
        $casa5->name = 'Casa de Ciudad';
        $casa5->stars = 1;
        $casa5->description = 'Pequeña casa ubicada en el centro de la ciudad, perfecta para aquellos que buscan estar cerca de las atracciones turísticas.';
        $casa5->image = 'https://upload.wikimedia.org/wikipedia/commons/c/c9/Ciudad_Satelite_2_casa.JPG';
        $casa5->save();

        $casa6 = new Accomodations();
        $casa6->name = 'Villa de Lujo';
        $casa6->stars = 5;
        $casa6->description = 'Espectacular villa de lujo ubicada en una zona exclusiva, con todas las comodidades y una vista impresionante al mar.';
        $casa6->image = 'https://aryon.es/wp-content/uploads/2021/09/villa-de-lujo.jpg';
        $casa6->save();

        $casa7 = new Accomodations();
        $casa7->name = 'Casa Rural con Piscina';
        $casa7->stars = 4;
        $casa7->description = 'Hermosa casa rural con piscina y amplio jardín, ideal para disfrutar del aire libre y la tranquilidad del campo.';
        $casa7->image = 'https://fotos.viajescanariasrural.com/68/n/casa_la_palma_puntagorda_lp1181_636959752539076855.jpg';
        $casa7->save();

        $casa8 = new Accomodations();
        $casa8->name = 'Casa de Montaña';
        $casa8->stars = 3;
        $casa8->description = 'Casa de montaña con una hermosa vista a los picos nevados y cerca de las pistas de esquí, perfecta para los amantes de los deportes de invierno.';
        $casa8->image = 'https://www.elmueble.com/medio/2022/02/24/terraza-con-vistas-al-jardin-00526556_c68652b7_1106x1200.jpg';
        $casa8->save();

        $casa9 = new Accomodations();
        $casa9->name = 'Casa de Campo';
        $casa9->stars = 2;
        $casa9->description = 'Casa de campo ubicada en un entorno tranquilo y rodeada de naturaleza, ideal para descansar y disfrutar de la vida al aire libre.';
        $casa9->image = 'https://s37805.pcdn.co/fotocasa-life/wp-content/uploads/2020/08/casa-campo-de-cuento.png.webp';
        $casa9->save();

        $casa10 = new Accomodations();
        $casa10->name = 'Casa del Lago';
        $casa10->stars = 4;
        $casa10->description = 'Una casa de ensueño con una vista espectacular al lago, amplias habitaciones y piscina privada.';
        $casa10->image = 'https://live.staticflickr.com/1411/903599955_2e17875bc3_b.jpg';
        $casa10->save();

        $casa11 = new Accomodations();
        $casa11->name = 'Casa La Palma';
        $casa11->stars = 2;
        $casa11->description = 'Una casa rústica en el campo, ideal para quienes buscan la tranquilidad y la paz.';
        $casa11->image = 'https://imgcap.capturetheatlas.com/wp-content/uploads/2021/07/El-Posito-casas-rurales-de-La-Palma.jpg';
        $casa11->save();

        $casa12 = new Accomodations();
        $casa12->name = 'Casa del Árbol';
        $casa12->stars = 5;
        $casa12->description = 'Una casa construida en un árbol con una vista panorámica del bosque, perfecta para los amantes de la naturaleza.';
        $casa12->image = 'https://images.adsttc.com/media/images/5259/c6a3/e8e4/4ecb/1700/08e1/large_jpg/d.jpg?1381615234';
        $casa12->save();

        $casa13 = new Accomodations();
        $casa13->name = 'Casa del Rio';
        $casa13->stars = 3;
        $casa13->description = 'Una casa en la ribera del río, con amplios ventanales para disfrutar de la vista, chimenea y todas las comodidades.';
        $casa13->image = 'http://agatajensen.com/wp-content/uploads/2019/12/wedding-casa-del-rio-benahavis170-1-1024x684.jpg';
        $casa13->save();

        $casa14 = new Accomodations();
        $casa14->name = 'Casa de la Montaña';
        $casa14->stars = 4;
        $casa14->description = 'Una casa en medio de las montañas con todas las comodidades, ideal para quienes buscan alejarse del ruido de la ciudad.';
        $casa14->image = 'https://www.arquitecturaydiseno.es/medio/2021/08/23/casa-mirador-en-un-bosque-de-california-9050399b-1500x2000_70eb13b1_1500x2000.jpeg';
        $casa14->save();

        $casa15 = new Accomodations();
        $casa15->name = 'Casa del Sol';
        $casa15->stars = 2;
        $casa15->description = 'Una casa en la costa con vista al mar, piscina y todas las comodidades necesarias para unas vacaciones perfectas.';
        $casa15->image = 'https://upload.wikimedia.org/wikipedia/commons/f/fb/Casa_del_Sol_C%C3%A1ceres.jpg';
        $casa15->save();

        $casa16 = new Accomodations();
        $casa16->name = 'Alojamiento Cerca del Bosque';
        $casa16->stars = 4;
        $casa16->description = 'Hermosa cabaña con vista al bosque, ideal para amantes de la naturaleza';
        $casa16->image = 'https://cdn.businessinsider.es/sites/navi.axelspringer.es/public/media/image/2021/05/hoteles-originales-dormir-plena-naturaleza-2347969.jpg?tf=1080x';
        $casa16->save();

        $casa17 = new Accomodations();
        $casa17->name = 'Casa del Lago Grande';
        $casa17->stars = 3;
        $casa17->description = 'Alojamiento cerca del lago, ideal para familias';
        $casa17->image = 'https://thumbs.dreamstime.com/b/casa-grande-del-lago-1261059.jpg';
        $casa17->save();

        $casa18 = new Accomodations();
        $casa18->name = 'Casa del Valle';
        $casa18->stars = 5;
        $casa18->description = 'Hermosa casa en el valle, ideal para escapadas románticas';
        $casa18->image = 'https://www.grupobodegasolarra.com/wp-content/uploads/2018/11/fachada_bodegas_casa_valle-1024x540.jpg';
        $casa18->save();

        $casa19 = new Accomodations();
        $casa19->name = 'Alojamiento en el Centro';
        $casa19->stars = 2;
        $casa19->description = 'Pequeño departamento en el centro de la ciudad, ideal para viajeros solitarios';
        $casa19->image = 'https://www.elmueble.com/medio/2020/04/30/un-chalet-centenario_e297b0aa_568x742.jpg';
        $casa19->save();

        $casa20 = new Accomodations();
        $casa20->name = 'Casa de la Playa';
        $casa20->stars = 4;
        $casa20->description = 'Hermosa casa frente al mar, ideal para vacaciones en familia';
        $casa20->image = 'https://www.revistainteriores.es/uploads/s1/18/56/65/4/12-consejos-que-debes-tener-en-cuenta-si-vas-a-comprar-una-casa-en-la-playa.jpeg';
        $casa20->save();
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
