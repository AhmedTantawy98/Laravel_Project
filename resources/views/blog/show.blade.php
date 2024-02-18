@extends('layouts.app');

@section("title", "Show Post");


@section('content')

@if (session()->has('message'))
    <div class="alert alert-success text-center m-0" role="alert">
        {{session()->get("message")}}
    </div>
@endif

<div class="text-center">
    <div class="container">
        <h1 class="mb-0 pt-5 mx-auto fw-bold" style="font-size: 70px;">{{$post->title}}</h1>
        <p class="fs-5 fw-bold"> By:
            <span style="color: #777; font-size: 12px; font-style:italic">{{$post->user->name}}</span>
            on <span style="color: #777; font-size: 12px">{{ date('d:m:Y', strtotime($post->updated_at))}}</span>
        </p>

        <div class="mt-5">
            <img src="/images/{{$post->image_path}}" class="w-100 h-75">
        </div>

        <p class="my-5" style="color: #777">{{$post->description}}</p>

        @if (Auth::user() && Auth::user()->id == $post->user_id)
            <a class="btn btn-success rounded mb-5" href="/blog/{{$post->slug}}/edit" style="font-size: 20px">Edit Post</a>
            <form method="POST" action="/blog/{{$post->slug}}" class="d-inline-block ms-2">
                @csrf
                @method('delete')
                <Button type="submit" class="btn btn-danger rounded mb-5" style="font-size: 20px">Delete Post</Button>
            </form>
        @endif
    </div>
</div>


@endsection
