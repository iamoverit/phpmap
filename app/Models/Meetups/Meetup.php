<?php

namespace App\Models\Meetups;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Meetup extends Model
{
    use Searchable;

    protected $fillable = [
        'name', 'link', 'url_name', 'description', 'city', 'country', 'localized_country_name', 'state', 'lat', 'lon', 'member_count', 'who', 'timezone',
    ];
}
