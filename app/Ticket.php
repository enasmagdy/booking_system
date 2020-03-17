<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class , 'user_id');
    }

    public function event()
    {
        return $this->belongsTo(Event::class , 'event_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class , 'category_id');
    }


}
