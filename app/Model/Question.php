<?php

namespace App\Model;

use App\User;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = [];
    public function getRouteKeyName()
    {
        return 'slug';
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getPathAttribute()
    {
        return asset("api/question/$this->slug");
    }
}
