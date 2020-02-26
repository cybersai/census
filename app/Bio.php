<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bio extends Model
{
    protected $fillable = [
        'date_of_birth',
        'sex',
        'marital_status',
        'residence'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
