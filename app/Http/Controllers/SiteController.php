<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;
use App\Models\Slug;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(Request $request)
    {

        $data = Slug::where('slug', '=', 'post-11234')->firstOrFail();
        dd($data->slugable->name);
        // $post = Post::find(6);
        // dd($post->slugs());
    }

    public function images()
    {
        $data = Post::find(2);
        foreach ($data->images as $key => $value) {
            if ($value->url == 'post2-123') {
                $value->url = 'post2-12345678';
                $value->save();
            }
        }
    }
    public function imageslugable(Request $request)
    {
        $data = Image::where('url', '=', 'post2-12345678')->firstOrFail();
        dd($data->imageable->name);
    }
    public function user_image(Request $request)
    {
        $user = User::find(1);
        dd($user->post_image()->paginate(2));
    }
    public function hasuserimage(Request $request)
    {
        $data = User::withWhereHas('post_image', function (Builder $query) {
            $query->where('url', '=', 'post-123456778');
        })->get();
        dd($data);
    }
}
