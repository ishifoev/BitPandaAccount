<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     */

    protected $fillable = [
        'user_id',
        'citizenship_country_id',
        'first_name',
        'last_name',
        'phone_number'
    ];

    public $timestamps = false;
    
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function country() {
        return $this->belongsTo(Country::class, 'id');
    }
}
