<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Carbon\Carbon;
use Laravel\Scout\Searchable;
use Illuminate\Notifications\Notifiable;



class Blog extends Model
{

    use  Sluggable, SluggableScopeHelpers, Searchable, Notifiable;

    // Add the fillable fields so that they are mass-assignable on this model.
    protected $fillable = ['title','series', 'feat_image', 'body', 'slug', 'user_id', 'published_at', 'tag' ];


    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    /**
     * Get the tags associated with a given blog
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    /**
     *  A blog belongs to a user.
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
        return Blog::search($query)->get()->all();
    }




    /**
     * Find the published articles in a query scope.
     *
     * @param $query
     */
    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now()->toDateTimeString());
    }


    /**
     * Find the unpublished articles in a query scope.
     *
     * @param $query
     */
    public function scopeUnpublished($query)
    {
        $query->where('published_at', '>', Carbon::now()->toDateTimeString());
    }

    /**
     * Find the latest published blogs and take 3 of them.
     *
     * @param $query
     * @param int $take
     * @return mixed
     */
    public function scopeTrending($query, $take = 3)
    {
        return $query->orderBy('reads', 'desc')->take($take)->get();
    }


    /**
     * Returns the latest published blog post.
     *
     * @param $query
     */
    public function scopeLatest($query)
    {
        return $query->where('published_at', '<=', Carbon::now());
    }

    /**
     * Set the published_at attribute mutator.
     *
     * @param $date
     */
    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);

    }



    /*
     * Return the published attribute and convert to
     * a UK format.
     *
     * @param $date
     * @return string
     */
    public function getPublishedAtAttribute($date)
    {
        return Carbon::parse($date)->format('Y-m-d');
    }

    /**
     * Return the created attribute and convert to UK
     * format.
     *
     * @param $date
     * @return string
     */
    public function getCreatedAtAttribute($date)
    {
        return Carbon::parse($date)->format('d-m-Y');
    }

    /**
     * Return the updated attribute and convert to UK
     * format.
     *
     * @param $date
     * @return string
     */
    public function getUpdatedAtAttribute($date)
    {
        return Carbon::parse($date)->format('d-m-Y');
    }


    /**
     * Accessor
     *
     * Get the taglist attribute id and return it to the form.
     *
     * @return mixed
     */
    public function getTagListAttribute()
    {
        return $this->tags()->pluck('id');
    }

    /**
     * @param $value
     * @return mixed
     */
    public function getBodyHtmlAttribute($value)
    {
        return Markdown::convertToHtml(e($this->body));

    }

    /**
     * Specify a Slack webhook to send notifications to
     * @return mixed
     * @internal param $value
     */
    public function routeNotificationForSlack() {
        //return env('SLACK_WEBHOOK_URL');
        //return 'https://hooks.slack.com/services/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';
        return $this->slack_url;
    }

}
