<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Donator extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'donators';

    protected $fillable = [
        'firstname',
        'lastname',
        'phone',
        'email',
        'address',
        'zip'
    ];

    public function donations()
    {
        return $this->hasMany(Donation::class);
    }
}
