<?php

namespace App\Models\Meetups;

use Carbon\Carbon;
use Spatie\Feed\FeedItem;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Usergroup extends Model implements FeedItem
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

    public function getFeedItemId()
    {
        return $this->id;
    }

    public function getFeedItemTitle()
    {
        return $this->name;
    }

    public function getFeedItemUpdated() : Carbon
    {
        return $this->updated_at;
    }

    public function getFeedItemSummary()
    {
        return $this->name;
    }

    public function getFeedItemLink()
    {
        return action('Usergroups\UsergroupController@showGroup', [$this->slug]);
    }

    public function getFeedItemAuthor()
    {
        return 'PHP.ug';
    }

    public function getFeedItems()
    {
        return self::all();
    }
}
