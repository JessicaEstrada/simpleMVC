<?php

namespace App\Models;

class Products{
    public static function all(){

        $product_info =[
                [
                    'id'        =>  '1',
                    'flavor'    =>  'Classic',
                    'desc'      =>  'Black tea is shaken with frothy milk, crushed ice, and a few generous handfuls of marble-sized, caramelized tapioca pearls.',
                    'img'       =>  'assets/img/Classic.jpg'
                ],
                [
                    'id'        =>  '2',
                    'flavor'    =>  'Okinawa',
                    'desc'      =>  'Okinawa milk tea is a type of milk tea that draws influence from the Okinawa region of Japan. Okinawa milk tea is a tasty blend of black tea, milk, and sweetener. Okinawa milk tea gets its unique taste from the Okinawa brown sugar that\s used to sweeten the tea.',
                    'img'       =>  'assets/img/Okinawa.png'
                ],
                [
                    'id'        =>  '3',
                    'flavor'    =>  'Matcha',
                    'desc'      =>  'Made from matcha powder mixes that can be bought online or in store with a splash of almond milk, honey or other sweetener and of course the boba pearls.',
                    'img'       =>  'assets/img/Matcha.jpg'
                ]
        ];
        return ($product_info);
        
    }
}