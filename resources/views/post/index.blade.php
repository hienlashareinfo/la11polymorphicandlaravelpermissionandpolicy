@extends('layouts.app')
@section('content')

@can('post.create') // dùng cho laravel perrmission ,
<a name="" id="" class="btn btn-primary" href="#" role="button">Create permission</a>
@endcan



@can('viewAny',App\Models\Post::class) // dùng cho policy

<a name="" id="" class="btn btn-primary" href="#" role="button">Create</a>

@endcan


@endsection