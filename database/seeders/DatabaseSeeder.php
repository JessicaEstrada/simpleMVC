<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        //\App\Models\User::factory(5)->create();

        DB::table('products')->insert([
            
            'id'        =>  '1',
            'flavor'    =>  'Classic',
            'desc'      =>  'Black tea is shaken with frothy milk, crushed ice, and a few generous handfuls of marble-sized, caramelized tapioca pearls.',
            'img'       =>  'assets/img/Classic.jpg'
            
        ]);
        DB::table('products')->insert([
            'id'        =>  '2',
            'flavor'    =>  'Okinawa',
            'desc'      =>  'Okinawa milk tea is a type of milk tea that draws influence from the Okinawa region of Japan. Okinawa milk tea is a tasty blend of black tea, milk, and sweetener. Okinawa milk tea gets its unique taste from the Okinawa brown sugar that\s used to sweeten the tea.',
            'img'       =>  'assets/img/Okinawa.png'

        ]);

        DB::table('products')->insert([
            'id'        =>  '3',
            'flavor'    =>  'Matcha',
            'desc'      =>  'Made from matcha powder mixes that can be bought online or in store with a splash of almond milk, honey or other sweetener and of course the boba pearls.',
            'img'       =>  'assets/img/Matcha.jpg'
        ]); 
    }   
p}
