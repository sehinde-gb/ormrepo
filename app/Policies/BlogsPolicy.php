<?php

namespace App\Policies;

use App\Blog;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BlogsPolicy
{
    use HandlesAuthorization;
    /**
     * @var User
     */
    public $user;
    /**
     * @var Blog
     */
    public $blog;

    /**
     * Create a new policy instance.
     *
     * @param User $user
     * @param Blog $blog
     */
    public function __construct(User $user, Blog $blog)
    {
        $this->user = $user;
        $this->blog = $blog;
    }

    /**
     * Determine if the given blog can be updated by the user.
     *
     * @param  \App\User $user
     * @param Blog $blog
     * @return bool
     */
    public function update(User $user, Blog $blog)
    {
        return $user->id === $blog->user_id;
    }

    /**
     * Determine if the given blog can be deleted by the user.
     *
     * @param  \App\User $user
     * @param Blog $blog
     * @return bool
     */
    public function delete(User $user, Blog $blog)
    {
        return $user->id === $blog->user_id;
    }

    /**
     * Determine if the given blog can be deleted by the user.
     *
     * @param  \App\User $user
     * @param Blog $blog
     * @return bool
     */
    public function create(User $user, Blog $blog)
    {
        return $user->id === $blog->user_id;
    }
}
