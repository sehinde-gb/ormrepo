<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
        protected $fillable = ['product_id','order_number', 'email', 'updated_at', 'created_at'];


    /**
     * Relationship
     *
     * Orders belongs to a charge.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function charge()
    {
        return $this->belongsTo('App\Charge');
    }
}
