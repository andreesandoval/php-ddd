<?php

//namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([ 
            'name' => 'Mauricio Lucero',
            'email' => 'mauriciolucero@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            
        ]);

        User::factory(10)->create();

        //$this->call('ArticuloSeeder');

        $faker = Faker::create();
        /*  insert Reclamos  */
        for($i = 0; $i<30; $i++){
            
            $nombre = $faker->text(15);
            $cantidad = $faker->numberBetween(1,50);
            
            if(random_int(0,1)){
                $precio = $faker->numberBetween(1,50);
            }
            else{
                $precio = $faker->numberBetween(51,100);
            }
            $modelo = $faker->text(15);
            if(random_int(0,1)){
                $descuentoPromocional = $faker->numberBetween(5,30);
            }
            else{
                $descuentoPromocional = 0;
            }

            $clasificacion = random_int(0,2);
                

            DB::table('articulos')->insert([
                'nombre'    => $nombre,
                'cantidad'    => $cantidad,
                'precio'    => $precio,
                'modelo'    => $modelo,
                'descuentoPromocional'    => $descuentoPromocional,
                'descripcion' => $faker->text(40),
                'clasificacion' => $clasificacion,
                'created_at'    => now(),
                'updated_at'    => now(),
            ]);
        }
    }
}
