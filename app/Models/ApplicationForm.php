<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationForm extends Model
{
    protected $fillable = ['id','organizationName', 'representativeName', 'representativeEmail', 'contactNumber', 'organizationDescription'];
    use HasFactory;
}
