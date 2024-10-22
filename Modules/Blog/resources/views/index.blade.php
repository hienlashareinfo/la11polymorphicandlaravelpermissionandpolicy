@extends('layouts.app')

@section('content')
<h1>Xin chào các bạn</h1>
<p>{{$data}}</p>
<p>Module: {!! config('blog.name') !!}</p>
@endsection