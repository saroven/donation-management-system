<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donations extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'donation_type_id',
        'donation_name',
        'donation_quantity',
        'donation_weight',
        'collection_address',
        'note'
    ];

    public function images()
    {
       return $this->hasMany(Images::class, 'donation_id', 'id');
    }
    public function type()
    {
       return $this->hasOne(DonationTypes::class, 'id', 'donation_type_id');
    }
}
