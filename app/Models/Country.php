<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     */

    protected $fillable = [
        'name',
        'iso2',
        'iso3'
    ];

    public $timestamps = false;

    public function userDetail() {
        return $this->hasMany(UserDetail::class, 'citizenship_country_id');
    }
}
