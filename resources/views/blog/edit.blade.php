    @extends('layouts.app');

    @section('title', "Edit Post");

    @section("content")
        @if (Auth::user() && Auth::user()->id == $post->user_id)

            <h1 class="pt-5 text-center mx-auto fw-bold" style="font-size: 70px;">Edit Post</h1>

            <form class="py-5" action="/blog/{{$post->slug}}" method="POST" enctype="multipart/form-data">

                @csrf
                @method('PUT')
                <div class="container">
                    <div class="mb-3 ">
                        <input type="text" name="title" value="{{$post->title}}" class="form-control p-3" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <textarea name="description" class="form-control p-3" rows="10">{{$post->description}}</textarea>
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text btn btn-outline-dark rounded" style="font-size: 30px" for="inputGroupFile02">Select An Image To Upload</label>
                        <input type="file" name="image" class="form-control invisible" id="inputGroupFile02">
                    </div>
                    <button  class="btn btn-success rounded" type="submit" style="font-size: 30px">Update</button>
                </div>
            </form>
        @else
            @section("content")
                <h1 class="text-center" style="font-size: 50px ">Can Not Edit Post</h1>
            @endSection
        @endif
    @endSection
