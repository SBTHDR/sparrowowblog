@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-gray-800 text-6xl font-bold">
                Blog Posts
            </h1>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            {{-- <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" width="700" alt=""> --}}
            <img src="https://images.pexels.com/photos/1714208/pexels-photo-1714208.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" width="700" alt="">
        </div>
        <div>
            <h2 class="text-gray-700 font-bold text-4xl pb-4">
                Lorem ipsum dolor sit amet.
            </h2>

            <span class="text-gray-500">
                By <span class="font-bold text-gray-800">Lorpsum dolor.</span>, Created on {{ date('jS M Y') }}
            </span>

            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, totam. Perferendis voluptate nulla atque repellat dignissimos velit quam enim sit aut optio sint id eius quod accusantium quasi, debitis adipisci.
            </p>

            <a href="" class=" bg-blue-500 text-gray-100 text-lg font-bold py-4 px-8 rounded-3xl">
                Keep Reading
            </a>

        </div>
    </div>

@endsection