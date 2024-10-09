<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReturnList extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['StatusID', 'Feedback'];

    public function status()
    {
        return $this->belongsTo(ApplicationStatusList::class, 'StatusID');
    }
}
