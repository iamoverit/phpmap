<?php

namespace App\Models\Snippets;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Snippet extends Model
{
    protected $fillable = [
        'title', 'body', 'user_id', 'forked_id', 'is_private'
    ];

    protected $casts = [
        'is_private' => 'boolean'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
