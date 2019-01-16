<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Watch extends Model
{

    public $timestamps = false;

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function scopeMightAlsoLike($query)
    {
        return $query->inRandomOrder()->take(4);
    }

    public function obrisi($id)
    {
        return \DB::table('watches')
            ->where('id', '=', $id)
            ->delete();
    }
}