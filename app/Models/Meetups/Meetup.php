<?php

namespace App\Models\Meetups;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Meetup extends Model
{
    use Searchable;

    protected $fillable = [
        'name', 'link', 'url_name', 'description', 'city', 'country', 'localized_country_name', 'state', 'lat', 'lon', 'member_count', 'who', 'timezone'
    ];
}
