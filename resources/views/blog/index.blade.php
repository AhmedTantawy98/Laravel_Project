@extends('layouts.app');

@section("title", "All Posts");


@section('content')

@if (session()->has('message'))
    <div class="alert alert-danger text-center m-0" role="alert">
        {{session()->get("message")}}
    </div>
@endif


<h1 class="pt-5 text-center mx-auto fw-bold" style="font-size: 70px;">All Posts</h1>

@if (Auth::check())
    <div class="container">
        <a href="/blog/create" class="btn btn-success py-2 px-4 text-white text-uppercase rounded link-underline-opacity-0 link-underline-opacity-0-hover link-opacity-100-hover ">Create New Post</a>
    </div>
@endif

@foreach ($posts as $post)
    <div class="posts text-center text-md-start pb-5 mt-5">
        <div class="container">
            <div class="post d-flex flex-column flex-md-row justify-content-center align-items-start">
                <div class="img me-5">
                    <img src="/images/{{$post->image_path}}" class="w-100">
                </div>
                <div class="details mt-4 mt-md-0">
                    <h1 class="fw-bold">{{$post->title}}</h1>
                    <span class="fs-5 fw-bold"> By:
                        <span style="color: #777; font-size: 12px; font-style:italic">{{$post->user->name}}</span>
                        on <span style="color: #777; font-size: 12px">{{ date('d:m:Y', strtotime($post->updated_at))}}</span>
                    </span>
                    <p class="mt-4 mb-3" style="color: #777">{{$post->description}}</p>
                    <a href="/blog/{{$post->slug}}" class="bg-dark py-2 px-4 text-white text-uppercase rounded link-underline-opacity-0 link-underline-opacity-0-hover link-opacity-100-hover ">Read More</a>
                </div>
            </div>
        </div>
    </div>
@endforeach


@endsection
