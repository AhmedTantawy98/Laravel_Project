@extends('layouts.app');

@section("title", "Home")

@section('content')


<div class="content d-flex flex-column justify-content-center align-items-center">
    <h1 class="text-white text-uppercase fw-bold p-0 m-0 mb-4 text-center" style="font-size: 50px">Welcome to my blog</h1>
    <a href="/" class="bg-white rounded py-2 px-3 link-body-emphasis fs-5 fw-bold border-r-3 link-underline-opacity-0 link-underline-opacity-0-hover link-opacity-100-hover">Start Reading</a>
</div>

<div class="container my-5 d-flex flex-column flex-md-row align-items-center justify-content-start " style="background-color: #F4F5F7;">
    <div class="me-md-5 w-100 mb-5">
        <img src="{{ asset('images/239-960x620.jpg') }}" class="rounded w-100" alt="img_1">
    </div>
    <div class="text-center">
        <h1 class="p-0 m-0 fw-bold text-uppercase" style="color: #374151">HOW TO BE AN EXPERT IN 2023</h1>
        <p class="p-0 m-0 fw-bold fs-5" style="color: #4B5563">You can find a list of all programming languages here.</p>
        <p class="p-0 mt-4 opacity-50">Get the same random image every time based on a seed, by adding to the start of the url. You may combine any of the options above. For example, to get a specific image that is grayscale and blurred.</p>
        <a href="/" class="bg-secondary py-2 px-4 text-white text-uppercase rounded link-underline-opacity-0 link-underline-opacity-0-hover link-opacity-100-hover ">Read More</a>
    </div>
</div>

<div class="py-5 mb-5" style="background-color: #374151">
    <div class="container">
        <h2 class="text-white-50 text-center fw-bold">Blog Categories</h2>
        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center text-white mt-4">
            <h2>UX Designer</h2>
            <h2>Programming</h2>
            <h2>Graphic</h2>
            <h2>Front-End</h2>
        </div>
    </div>
</div>

<div class="py-5 mb-5 recent">
    <div class="container">
        <h1 class="text-center fw-bold text-black" style="font-size: 50px">Recent Postes</h1>
        <p class="my-5 text-center text-secondary">PHP is a general-purpose scripting language geared toward web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995. The PHP reference implementation is now produced by The PHP Group. PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages. PHP is a widely-used, free, and efficient alternative to</p>
        <div class="d-flex justify-content-center align-items-start" style="height: 480px">
            <div class="left p-5" style="width: 50%; background-color: #8E4B10; max-height: 100%; overflow-y: auto">
                <ul class="m-0 p-0 mb-5 d-flex">
                    <li class="me-2 p-1 rounded"><a href="/">PHP</a></li>
                    <li class="me-2 p-1 rounded"><a href="/">Programming</a></li>
                    <li class="me-2 p-1 rounded"><a href="/">Languages</a></li>
                    <li class="p-1 rounded"><a href="/">Backend</a></li>
                </ul>
                <p class="fs-5 mb-5" style="color: #EECA78">PHP is a general-purpose scripting language geared toward web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995. The PHP reference implementation is now produced by The PHP Group. PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages. PHP is a widely-used, free, and efficient alternative to</p>
                <a class="read" href="/">Read More</a>
            </div>
            <div class="" style="width: 50%">
                <img src="{{ asset('images/242-960x620.jpg')}}" alt="img2" class="w-100 h-100">
            </div>
        </div>
    </div>
</div>



@endsection




