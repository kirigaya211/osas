<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationStatusList extends Model
{
    use HasFactory;
    protected $primaryKey = 'StatusID';
    protected $fillable = ['ApplicationID','StatusID','StatusType',];



    public function application()
    {
        return $this->belongsTo(ApplicationInfo::class, 'ApplicationID');
    }

    public function statusType()
    {
        return $this->belongsTo(StatusType::class, 'StatusType');
    }

    public function pendingList()
    {
        return $this->hasOne(PendingList::class, 'StatusID');
    }

    public function returnList()
    {
        return $this->hasOne(ReturnList::class, 'StatusID');
    }

    public function deniedList()
    {
        return $this->hasOne(DeniedList::class, 'StatusID');
    }

    public function acceptedList()
    {
        return $this->hasOne(AcceptedList::class, 'StatusID');
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

