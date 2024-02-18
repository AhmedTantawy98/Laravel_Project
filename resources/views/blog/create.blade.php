@extends('layouts.app');

@section('title', "Create Post");

@section("content")

<h1 class="pt-5 text-center mx-auto fw-bold" style="font-size: 70px;">Create New Post</h1>

<form class="py-5" action="/blog" method="POST" enctype="multipart/form-data">

    @csrf
    <div class="container">
        <div class="mb-3 ">
            <input type="text" name="title" placeholder="Title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <textarea name="description" class="form-control" rows="10" placeholder="description"></textarea>
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text btn btn-outline-dark rounded" style="font-size: 30px" for="inputGroupFile02">Select An Image To Upload</label>
            <input type="file" name="image" class="form-control invisible" id="inputGroupFile02">
        </div>
        <button href="/blog" type="submit" class="btn btn-success rounded" style="font-size: 30px">Submit The Post</button>
    </div>
</form>

@endSection
