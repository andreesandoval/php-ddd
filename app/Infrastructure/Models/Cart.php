
<?php

namespace App\Infrastructure\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id',
    ];

    public function items()
    {
        return $this->hasMany(CartItem::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'cart_items')
            ->withPivot('price', 'quantity');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
