<?php

namespace App\Models;

use App\Models\Traits\TableName;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 *
 * @package App\Models
 *
 * @property User user
 */
class Menu extends Model
{
    use TableName;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'amount', 'status', 'food_id',
    ];


    /**
     * User relation.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function food()
    {
        return $this->belongsTo(Food::class, "food_id", 'id');
    }
}
