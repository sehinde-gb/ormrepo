<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Cashier\Billable;

class User extends Authenticatable
{
    use Notifiable,  Billable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['username','name', 'email', 'password', 'password_confirmation', 'slack_url'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];


    /**
     * A user can have many blogs.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function blogs()
    {
        return $this->hasMany(\App\Blog::class);
    }

    /**
     * Relationship A user has one profile.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function profile()
    {
        return $this->hasOne('App\Profile');
    }




    /**
     * Determines the username for the User Model.
     *
     * @param $query
     * @param $username
     * @return mixed
     */
    public function scopeWhereUsername($query, $username)
    {
        return $query->where('username', '=', $username);
    }

    /**
     * Determines if the current user object is the
     * current authenticated user. Meaning if false
     * link is not shown if true the link is shown.
     *
     * @return bool
     */
    public function isCurrent()
    {
        if (Auth::guest()) {
            return false;
        }

        return Auth::user()->id == $this->id;
    }


    /**
     * Determines if the user has an admin column within the user's table.
     *
     * @return mixed
     */
    public function is_admin()
    {
        return $this->admin; // this looks for an admin column in your users table
    }



    /**
     * Route notifications for the Slack channel.
     *
     * @return string
     */
    public function routeNotificationForSlack()
    {
        //return 'https://hooks.slack.com/services/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';
        return $this->slack_url;
    }

    

    /**
     * Retrieves Sterling currency for Cashier.
     *
     * @return string
     */
    public function getCurrency()
    {
        return 'gbp';
    }
}
