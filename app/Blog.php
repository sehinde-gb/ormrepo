<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Carbon\Carbon;
use Laravel\Scout\Searchable;
use App\Comment;


class Blog extends Model
{

    use  Sluggable, SluggableScopeHelpers, Searchable;

    // Add the fillable fields so that they are mass-assignable on this model.
    protected $fillable = ['title','excerpt', 'feat_image', 'body', 'slug', 'user_id', 'published_at', 'tag' ];


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
     * A blog can have many comments.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Search for the latest comments.
     *
     * @return mixed
     */
    public  function latestComment()
    {
        return $this->hasOne(Comment::class)->latest();

    }


    /**
     * Load a threaded set of comments for the post.
     *
     * @return app\CommentsCollection
     */
    public function getComments()
    {
        return $this->comments()->with('owner')->get()->threaded();
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
     * Add a comment to the blog.
     *
     * @param array $attributes
     * @return Model
     */
    public function addComment($attributes)
    {
        $comment = (new Comment)->forceFill($attributes);
        $comment->user_id = auth()->id();
        return $this->comments()->save($comment);
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
        //$this->attributes['published_at'] = Carbon::now()->toDateString();
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




}
