<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Reltions\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'status',
    ];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::user);
    }

    public function owner(): BelongsTo
    {
        return $this->belongsTo(Business::user);
    }
}
