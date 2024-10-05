<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Donation extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'donation_amount',
        'recurring_donation',
        'donation_campaign',
        'donation_message',
        'anonymous_donation',
        'donator_id'
    ];

    public function donator()
    {
        return $this->belongsTo(Donator::class);
    }
}
