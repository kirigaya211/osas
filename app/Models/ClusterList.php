<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClusterList extends Model
{
    protected $primaryKey = 'ClusterID';

    public function organizations()
    {
        return $this->hasMany(Organization::class, 'ClusterID');
    }
}
