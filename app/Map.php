<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{

    /**
     * @var string
     */
    protected $table = 'gmaps_geocache';

    /**
     * @var array
     */
    protected $fillable = [
        'address',
        'infowindow_content',
        'latitude',
        'longitude'
    ];


}
