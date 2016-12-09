<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    /**
     * Class Comment
     * @package App
     */
    class Comment extends Model
    {

        /**
         * @var array
         */
        protected $fillable = ['body'];


        /**
         * Relationship: A comment belongs to a user.
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function user()
        {
            return $this->belongsTo(User::class);
        }

        /**
         * Return the name associated with this comment.
         *
         * @return mixed
         */
        public function name()
        {
            return $this->user->name;
        }

        /**
         * Return the username associated with this comment.
         *
         * @return mixed
         */
        public function username()
        {
            return $this->user->username;
        }

        /**
         * Relationship A comment has user owner referenced by the user_id.
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function owner()
        {
            return $this->belongsTo(User::class, 'user_id');
        }


        /**
         * Find the owner of a blog.
         *
         * @param $query
         * @param Blog $blog
         * @return mixed
         */
        public function scopeforBlog($query, Blog $blog)
        {
            return $query->with('owner')->where('blog_id', $blog->id);

        }

        /**
         * Use a custom collection for all comments.
         *
         * @param array $models
         * @return CommentCollection
         */
        public function newCollection(array $models = [])
        {
            return new CommentCollection($models);
        }


    }
