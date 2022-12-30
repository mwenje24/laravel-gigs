<?php

namespace App\Models;

class Listing{
    public static function all(){
        return[
            [
                'id' => 1,
                'name' => 'Architect',
                'description' => 'Gigs are a simple way to make your life easier.',
                'location' => 'Boston, USA'
            ],
            [
                'id' => 2,
                'name' => 'Lawyer',
                'description' => 'Gigs are a simple way to make your life easier.',
                'location' => 'Boston, USA'
            ]
            ];
    }

    public static function find($id){
        $listings = self::all();
        foreach($listings as $listing){
            if($listing['id'] == $id){
                return $listing;
            }
        }
    }
    
}