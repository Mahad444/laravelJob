<?php

namespace App\Models;

class Listings
{
public static function all()
{
    return
    [
        [
            'id'=> 1,
            'title' => 'Listing 1',
            'description' => 'This is listing 1 and it has a description thats really long and boring'
        ],
        [
            'id'=> 2,
            'title' => 'Listing 2',
            'description' => 'This is listing 2 and it has a description thats really long and boring 
            lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor, nisl eget'
        ],
        [
            'id'=> 3,
            'title' => 'Listing 3',
            'description' => 'This is listing 3 and it has a description thats really long and boring'
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