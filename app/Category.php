<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Category extends Model
    {
        /**
         * Fillable fields for a Category.
         *
         * @var array
         */
        protected $fillable = [
            'name'
        ];



        /**
         * Get the blogs associated with a given category
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
         */
        public function blogs()
        {
            return $this->belongsToMany('App\Blog');
        }
    }
