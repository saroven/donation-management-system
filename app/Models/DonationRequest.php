<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonationRequest extends Model
{
    use HasFactory;

    protected $fillable = ['requester_id','donation_id'];

    public function donation()
    {
        return $this->hasOne(Donations::class, 'id', 'donation_id');
    }
}
