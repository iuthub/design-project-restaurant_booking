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
 * @property User user
 */
class Food extends Model
{
    const STATUS_ACTIVE = 1;

    use TableName;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'price', 'image', 'description', 'status', 'unit_type_id',
    ];

    /**
     * User relation.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function unit()
    {
        return $this->belongsTo(Unit::class, "unit_type_id", 'id');
    }

    /*public function create($data)
    {
        $this->name = $data['name'];
        $this->status = self::STATUS_ACTIVE;
        $this->price = $data['price'];


    }*/
}
