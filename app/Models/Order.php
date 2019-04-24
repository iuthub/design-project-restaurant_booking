<?php

namespace App\Models;

use App\Models\Traits\TableName;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * Class Order
 *
 * @package App\Models
 *
 * @property mixed         id
 * @property User user
 */
class Order extends Model
{
    use TableName;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'client_id', 'status', 'food_id',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * User relation.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client()
    {
        return $this->belongsTo(Client::class, "client_id", 'id');
    }

    /**
     * Get the bookings for the order.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function bookings()
    {
        return $this->belongsToMany(Booking::class, 'booking_items');
    }

    /**
     * Get the cart item for the order.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cartItem()
    {
        return $this->hasOne(CartItem::class);
    }

    /**
     * Get the purchase item for the order.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    /*public function purchaseItem()
    {
        return $this->belongsToMany(User::class, 'purchase_items');
    }*/
}
