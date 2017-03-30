<?php

namespace App\Models\Resources;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Snippet extends Model
{
    use LogsActivity;

    protected $fillable = [
        'name', 'user_id', 'snippet', 'is_private',
    ];

    protected $casts = [
        'is_private' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
