<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Carts extends Model
{
    use HasFactory;
    protected $table = 'carts';

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
