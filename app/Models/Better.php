<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Better extends Model
{
    use HasFactory;
    public $fillabe =['name', 'surname','bet','horse_id'];

    public function horses()
    {
        return $this->belongsTo('App\Models\Horse');
    }
}