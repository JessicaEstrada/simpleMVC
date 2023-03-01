<?php

namespace App\Models;

class About{
    public static function all(){

        $about_info =[
                [
                    'id'        =>  '1',
                    'flavor'    =>  'All about Boba Milk Tea',
                    'desc'      =>  'Boba milk tea, is a cold, frothy drink made with a tea base shaken with flavors, sweeteners and milk with tapioca pearls at the base of the drink.',
                    'img'       =>  'assets/img/boba.jpg'
                ],
        ];
        return ($about_info);
        
    }
}