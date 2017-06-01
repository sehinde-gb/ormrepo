<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Charge extends Model
{

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * Fillable fields for a Post.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'name',
        'description',
        'sku',
        'price',
        'is_downloadable'

    ];


    /**
     * Converts a products price in to pennies for use
     * by Stripe.
     *
     * @return mixed
     */
    public function priceToCents()
    {
        return $this->price * 100;
    }
    /**
     * Rounding the float on the way out of the db (Cause Dylan's db has downs)
     */
    public function setPriceFromCurrencyAttribute($value) {

        $this->attributes['price'] = $value*100;
    }


    /**
     * Relationship
     *
     * A charge has many orders.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders()
    {
        return $this->hasMany('App\Order');
    }


    /**
     * Relationship
     *
     *  Charges belong to one user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }


     /**
     * Return a collection of search results.
     *
     * @param $query
     * @return array
     */
    public function scopeSearch($query)
    {
        return Charge::search($query)->get()->all();
    }

    /**
     * Returns the latest published charged.
     *
     * @param $query
     */
    public function scopeLatest($query)
    {
        return $query->where('created_at', '<=', Carbon::now());
    }

}
