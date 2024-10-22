<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Carbon;

class PostPolicy
{

    // chạy trước khi vào policy có tác dụng đảm bảo người có quyền admin có thể vượt qua mọi thứ
    public function before(?User $user)
    {
        if ($user->hasRole('admin')) {
            return true;
        }
        return null;
    }
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(?User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Post $post): bool {}

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        if ($user->id === 1) {
            return true;
        } else {
            return true;
        }
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Post $post): bool
    {
        if ($post->created_at > Carbon::now()->subHours(2)) {
        }
        return $user->id === $post->user_id || $user->id === $post->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Post $post): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Post $post): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Post $post): bool
    {
        //
    }
}
