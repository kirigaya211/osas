<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationStatusList extends Model
{
    use HasFactory;
    protected $primaryKey = 'StatusID';


    public function application()
    {
        return $this->belongsTo(ApplicationInfo::class, 'ApplicationID');
    }

    public function scopeSearch($query, $value)
    {
        $query->where('ApplicationID', 'like', "%{$value}%")
            ->orWhere('StatusID', 'like', "%{$value}%")
            ->orWhereHas('application', function ($query) use ($value) {
                $query->where('OrganizationName', 'like', "%{$value}%") 
                      ->orWhere('representativeName', 'like', "%{$value}%"); 
            });
           
    }

}

