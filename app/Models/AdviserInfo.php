<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdviserInfo extends Model
{
    protected $primaryKey = 'AdviserID';

    public function organization()
    {
        return $this->hasOne(AdviserList::class, 'AdviserID');
    }
}
