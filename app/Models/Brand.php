<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'brand';
    public function product(): HasMany
    {
        return $this->hasMany(Product::class);
    }
    public function menu(): HasOne
    {
        return $this->hasOne(Menu::class, 'table_id')->where('type', '=', 'brand');
    }
    public function link(): HasOne
    {
        return $this->hasOne(Link::class, 'table_id')->where('type', '=', 'brand');
    }
}
