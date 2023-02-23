<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'invoice',
        'campaign_id',
        'donatur_id',
        'amount',
        'pray',
        'status',
        'snap_token',
    ];

    /**
     * campaign
     *
     * @return void
     */
    public function campaigns()
    {
        return $this->belongsTo(Campaign::class);
    }

    /**
     * donatur
     *
     * @return void
     */
    public function donatur()
    {
        return $this->belongsTo(Donatur::class);
    }
}
