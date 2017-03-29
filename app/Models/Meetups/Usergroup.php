<?php

namespace App\Models\Meetups;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Usergroup extends Model
{
    use Searchable;

    protected $fillable = [
        'name', 'shortname', 'url', 'icalendar_url', 'latitude', 'longitude', 'state', 'country', 'slug',
    ];

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs()
    {
        return 'usergroups';
    }
}
